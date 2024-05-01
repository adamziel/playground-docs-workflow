<?php
/*
Plugin Name: Documentation Pages
Plugin URI: https://w.org/playground
Description: Manage HTML documentation pages using WordPress.
Version: 0.1
Author: WordPress Contributors
License: GPL2
*/

if (!defined('HTML_PAGES_PATH')) {
    define('HTML_PAGES_PATH', WP_CONTENT_DIR . '/html-pages');
}

/**
 * Placeholder site URL to be used in the exported HTML files.
 */
define('DOCS_INTERNAL_SITE_URL', 'https://playground.internal');

require_once __DIR__ . '/playground-post-export-processor.php';

add_action('init', function () {
    // Don't initialize the plugin if WordPress wasn't installed yet.
    global $wpdb;
    if($wpdb->get_var("SHOW TABLES LIKE 'wp_options'") != 'wp_options') {
        return;
    }
    initialize_docs_plugin(); 
});

add_filter('http_request_args', function ($args, $url) {
    $args['reject_unsafe_urls'] = true;
    return $args;
}, 10, 2);

add_filter('allowed_redirect_hosts', function ($deprecated = '') {
    return array ();
});

function initialize_docs_plugin() {
    if(get_option('docs_populated')) {
        // Prevent collisions between the initial create_db_pages_from_html_files call
        // process and the save_post_page hook.
        return;
    }

    if(!file_exists(HTML_PAGES_PATH)) {
        return;
    }
    
    update_option('permalink_structure', '/%postname%/');
    flush_rewrite_rules();
    // Activating here because the activateTheme Blueprint step doesn't work
    // in wp-now :(
    switch_theme('playground-docs');
    // Activate the gutenberg plugin and the create-block-theme plugin
    // for the same reasons.
    require_once ABSPATH . 'wp-admin/includes/plugin.php';
    activate_plugin('gutenberg/gutenberg.php');
    activate_plugin('create-block-theme/create-block-theme.php');
    pages_reinitialize_content();
}

add_action('admin_menu', function () {
    // Remove distracting options from the admin menu
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
    remove_menu_page('users.php');

    // Add a submenu under "Docs pages" menu
    add_submenu_page(
        'edit.php?post_type=page',
        'Download ZIP',
        'Download ZIP',
        'manage_options',
        'download_docs',
        function () { }
    );
    // Add a submenu under "Docs pages" menu
    add_submenu_page(
        'edit.php?post_type=page',
        'Reload doc pages from disk',
        'Reload doc pages from disk',
        'manage_options',
        'recreate_db_pages_from_disk',
        function () { }
    );
});

add_action('admin_init', function () {
    if (isset($_GET['page']) && $_GET['page'] === 'download_docs') {
        return download_docs_callback();
    }
    if (isset($_GET['page']) && $_GET['page'] === 'recreate_db_pages_from_disk') {
        pages_reinitialize_content();

        // Display admin notice
        add_action('admin_notices', function () {
            echo '<div class="notice notice-success is-dismissible"><p>Doc pages were recreated successfully.</p></div>'; 
        });
    }
});

function pages_reinitialize_content() {
    update_option('docs_populated', false);

    delete_db_pages(HTML_PAGES_PATH);
	create_db_pages_from_html_files(HTML_PAGES_PATH);
    delete_db_attachments();
    create_db_media_files_from_uploads();

    update_option('docs_populated', true);
}

/**
 * Doc pages functions
 */

function download_docs_callback() {
    // Create a zip file of the HTML_PAGES_PATH directory
    $zipFile = __DIR__ . '/docs.zip';
    $zip = new ZipArchive();
    if ($zip->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator(HTML_PAGES_PATH),
            RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($files as $name => $file) {
            if (!$file->isDir()) {
                $filePath = $file->getRealPath();
                $relativePath = substr($filePath, strlen(HTML_PAGES_PATH) + 1);
                $zip->addFile($filePath, $relativePath);
            }
        }

        $zip->close();

        // Download the zip file
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="docs.zip"');
        header('Content-Length: ' . filesize($zipFile));
        readfile($zipFile);

        // Delete the zip file
        unlink($zipFile);
    } else {
        echo 'Failed to create zip file';
    }

    exit;
}

/**
 * Recreate the entire file structure when any post is saved.
 * 
 * Why recreate?
 * 
 * It's easier to recreate the entire file structure than to keep track of
 * which files have been added, deleted, renamed and moved under
 * another parent, or changed via a direct SQL query.
 */
add_action('save_post_page', function ($post_id) {
    // Prevent collisions between the initial create_db_pages_from_html_files call
    // process and the save_post_page hook.
    if (!get_option('docs_populated')) {
        return;
    }
    
    // Don't delete the files upfront. Save the new files to a temporary
    // directory and then replace the existing directory with the new one
    // to prevent data loss on error.
    $tmpPath = HTML_PAGES_PATH . '.tmp';
    if (file_exists($tmpPath)) {
        docs_plugin_deltree($tmpPath);
    }
    save_db_pages_as_html($tmpPath);
    docs_plugin_deltree(HTML_PAGES_PATH);
    rename($tmpPath, HTML_PAGES_PATH);
});


function create_db_pages_from_html_files($dir, $parent_id = 0) {
    $indexFilePath = $dir . '/index.html';
    if(file_exists($indexFilePath)) {
        $parent_id = create_db_page_from_html_file(
            new SplFileInfo($indexFilePath),
            $parent_id,
            get_order_from_filename(basename($dir))
        );
    }

    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..' || $file === 'index.html') {
            continue;
        }
        
        $filePath = $dir . '/' . $file;
        if (is_dir($filePath)) {
            create_db_pages_from_html_files($filePath, $parent_id);
        } else if (pathinfo($file, PATHINFO_EXTENSION) === 'html') {
            create_db_page_from_html_file(
                new SplFileInfo($filePath), 
                $parent_id,
                get_order_from_filename(basename($filePath))
            );
        }
    }
}

function get_order_from_filename($filename) {
    if(preg_match('/^(\d+)_/', $filename, $matches)) {
        return $matches[1];
    }
    return 0;
}

function create_db_page_from_html_file(SplFileInfo $file, $parent_id = 0, $order = 0) {
    $content = file_get_contents($file->getRealPath());
    $p = new Playground_Post_Export_Processor($content);
    $p->next_tag();
    if($p->get_tag() === 'H1') {
        $p->set_bookmark('start');
        $title = $p->get_content_between_balanced_template_tags();
        $p->seek('start');
        $p->remove_balanced_tag();
        // Removing the tag doesn't affect the whitespace that follows, so
        // we need to trim the content or else we'll start accumulating leading
        // newlines.
        try {
            $content = trim($p->get_updated_html());
        } catch(ValueError $e) {
            $content = '';
        }
        // Replace placeholder site URLs with the URL of the current site.
        // @TODO: This is very naive, let's actually parse the block 
        //        markup and the HTML markup and make these replacements
        //        in the JSON and HTML attributes structures, not just in
        //        their textual representation.
        $content = str_replace(
            DOCS_INTERNAL_SITE_URL,
            get_site_url(),
            $content
        );
    } else {
        $title = $file->getBasename('.html');
    }

    // Insert the content as a WordPress page
    $post_data = array(
        'post_title' => $title,
        'post_content' => $content,
        'post_status' => 'publish',
        'post_author' => get_current_user_id(),
        'post_type' => 'page',
        'post_parent' => $parent_id,
        'menu_order' => $order
    );
    
    $page_id = wp_insert_post($post_data);
    if("0" == get_option('page_on_front')) {
        update_option('page_on_front', $page_id);
    }
    return $page_id;
}

function delete_db_pages() {
    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_status'    => 'any',
    );
    $pages = new WP_Query($args);

    if ($pages->have_posts()) {
        while ($pages->have_posts()) {
            $pages->the_post();
            wp_delete_post(get_the_ID(), true);
        }
    }
    wp_reset_postdata();
}

function save_db_pages_as_html($path, $parent_id = 0) {
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => $parent_id,
        'post_status'    => 'publish',
    );
    $pages = new WP_Query($args);

    if ($pages->have_posts()) {
        while ($pages->have_posts()) {
            $pages->the_post();
            $page_id = get_the_ID();
            $page = get_post($page_id);
            $title = sanitize_title(get_the_title());
            
            $content = '<h1>' . esc_html(get_the_title()) . "</h1>\n\n" . get_the_content();
            // Replace current site URL with a placeholder URL for the export.
            // @TODO: This is very naive, let's actually parse the block 
            //        markup and the HTML markup and make these replacements
            //        in the JSON and HTML attributes structures, not just in
            //        their textual representation.
            $content = str_replace(
                get_site_url(),
                DOCS_INTERNAL_SITE_URL,
                $content
            );
            $child_pages = get_pages(array('child_of' => $page_id, 'post_type' => 'page'));

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            if (!empty($child_pages)) {
                $new_parent = $path . '/' . $page->menu_order . '_' . $title;
                if (!file_exists($new_parent)) {
                    mkdir($new_parent, 0777, true);
                }
                file_put_contents($new_parent . '/index.html', $content);
                save_db_pages_as_html($new_parent, $page_id);
            } else {
                file_put_contents($path . '/' . $page->menu_order . '_' . $title . '.html', $content);
            }
        }
    }
    wp_reset_postdata();
}

function docs_plugin_deltree($path) {
    if (!file_exists($path)) {
        return;
    }

    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::CHILD_FIRST);
    foreach ($iterator as $file) {
        /** @var SplFileInfo $file */
        if ($file->isDir()) {
            rmdir($file->getRealPath());
        } else if($file->isFile()) {
            unlink($file->getRealPath());
        }
    }
}

/**
 * Media attachments
 */

function delete_db_attachments() {
    $args = array(
        'post_type'      => 'attachment',
        'posts_per_page' => -1,
        'post_status'    => 'any',
    );
    $attachments = new WP_Query($args);

    add_filter('wp_delete_file', 'keep_media_file'); 
    if ($attachments->have_posts()) {
        while ($attachments->have_posts()) {
            $attachments->the_post();
            wp_delete_post(get_the_ID(), true);
        }
    }
    remove_filter('wp_delete_file', 'keep_media_file');
    wp_reset_postdata();
}

/**
 * Set this as a wp_delete_file filter to prevent
 * media files on the fisk from being deleted when
 * their corresponding database records are deleted.
 */
function keep_media_file($file) {
    // This function does nothing, it's just a dummy function.
    return '';
}

function create_db_media_files_from_uploads() {
    $uploads = wp_upload_dir();
    $uploadsDir = $uploads['basedir'];
    $uploadsUrl = $uploads['baseurl'];

    $mediaFiles = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($uploadsDir),
        RecursiveIteratorIterator::LEAVES_ONLY
    );

    foreach ($mediaFiles as $name => $file) {
        /** @var SplFileInfo $file */
        $filename = $file->getFilename();
        if($filename === '.gitkeep') {
            continue;
        }
        if (!$file->isDir()) {
            $filePath = $file->getRealPath();
            $relativePath = substr($filePath, strlen($uploadsDir) + 1);
            $attachment = array(
                'guid'           => $uploadsUrl . '/' . $relativePath,
                'post_mime_type' => naive_mime_content_type($filePath),
                'post_title'     => pathinfo($filePath, PATHINFO_FILENAME),
                'post_content'   => '',
                'post_status'    => 'inherit',
            );
            if(preg_match('/^(\d+)_/', $filename, $matches)) {
                $attachmentId = $matches[1];
                $attachment['import_id'] = $attachmentId;
            }
            $attachmentId = wp_insert_attachment($attachment, $filePath);
            if (!is_wp_error($attachmentId)) {
                require_once ABSPATH . 'wp-admin/includes/image.php';
                $attachmentData = wp_generate_attachment_metadata($attachmentId, $filePath);
                wp_update_attachment_metadata($attachmentId, $attachmentData);
            }
        }
    }
}

// Don't generate thumbnails for images for now
// so that the restore function has an easier job.
// @TODO: Implement thumbnails export/import
add_filter( 'intermediate_image_sizes_advanced', 'disable_image_sizes' );

function disable_image_sizes ($sizes){
	unset( $sizes['thumbnail'] );    // Disable Thumbnail (150 x 150 hard cropped)
	unset( $sizes['medium'] );       // Disable Medium resolution (300 x 300 max height 300px)
	unset( $sizes['medium_large'] ); // Disable Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
	unset( $sizes['large'] );        // Disable Large resolution (1024 x 1024 max height 1024px)

	return $sizes;
}

/**
 * Workaround in wp-now where the finfo PHP extension
 * is not installed yet. Let's replace this with
 * mime_content_type once a new version is released.
 * 
 * @param mixed $path
 * @return string
 */
function naive_mime_content_type($path) {
    $extension = pathinfo($path, PATHINFO_EXTENSION);
    switch ($extension) {
        case 'jpg':
        case 'jpeg':
            return 'image/jpeg';
        case 'png':
            return 'image/png';
        case 'gif':
            return 'image/gif';
        case 'pdf':
            return 'application/pdf';
        default:
            return 'application/octet-stream';
    }
}

/**
 * The image block stores the attachment ID so we need
 * to preserve it in the export. Let's prepend it to the
 * filename so that we can restore it later.
 * 
 * @param mixed $file
 * @return mixed
 */
function rename_uploaded_file($attachment_id) {
    // Do not rename the attachments when importing.
    if (!get_option('docs_populated')) {
        return;
    }
    $file = get_attached_file($attachment_id);
    $path = pathinfo($file);
       
    // new filename structure here
    $newfilename = $attachment_id . "_" . $path['filename'];
    $newfile = $path['dirname']."/".$newfilename.".".$path['extension'];
   
    rename($file, $newfile);    
    update_attached_file($attachment_id, $newfile);
}
add_action('add_attachment', 'rename_uploaded_file');
