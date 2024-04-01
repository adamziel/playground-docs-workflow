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
    define('HTML_PAGES_PATH', __DIR__ . '/html-pages');
}

require_once __DIR__ . '/playground-post-export-processor.php';

add_action('init', function () {
    // Register custom post type for doc_page
    $args = array(
        'public' => true,
        'show_in_rest' => true, // Enable block editor
        'menu_position' => 5,
        'hierarchical' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_ui' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'supports' => array('title', 'editor', 'custom-fields', 'page-attributes'),
        'labels' => array(
            'name' => 'Doc Pages',
            'singular_name' => 'Doc Page',
            'menu_name' => 'Doc Pages',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New',
        ),
    );
    register_post_type('doc_page', $args);

    initialize_docs_plugin();
});

function initialize_docs_plugin() {
    if(get_option('docs_populated')) {
        // Prevent collisions between the initial create_db_doc_pages_from_html_files call
        // process and the save_post_doc_page hook.
        return;
    }

    if(!file_exists(HTML_PAGES_PATH)) {
        return;
    }

    delete_db_doc_pages(HTML_PAGES_PATH);
	create_db_doc_pages_from_html_files(HTML_PAGES_PATH);

    update_option('docs_populated', true);
}

add_action('admin_menu', function () {
    // Remove distracting options from the admin menu
    remove_menu_page('edit.php');
    remove_menu_page('edit.php?post_type=page');
    remove_menu_page('edit-comments.php');
    remove_menu_page('users.php');

    // Add a submenu under "Docs pages" menu
    add_submenu_page(
        'edit.php?post_type=doc_page',
        'Download ZIP',
        'Download ZIP',
        'manage_options',
        'download_docs',
        function () { }
    );
    // Add a submenu under "Docs pages" menu
    add_submenu_page(
        'edit.php?post_type=doc_page',
        'Reload doc pages from disk',
        'Reload doc pages from disk',
        'manage_options',
        'recreate_db_doc_pages_from_disk',
        function () { }
    );
});

add_action('admin_init', function () {
    if (isset($_GET['page']) && $_GET['page'] === 'download_docs') {
        return download_docs_callback();
    }
    if (isset($_GET['page']) && $_GET['page'] === 'recreate_db_doc_pages_from_disk') {
        update_option('docs_populated', false);
        delete_db_doc_pages(HTML_PAGES_PATH);
        create_db_doc_pages_from_html_files(HTML_PAGES_PATH);
        update_option('docs_populated', true);

        // Display admin notice
        add_action('admin_notices', function () {
            echo '<div class="notice notice-success is-dismissible"><p>Doc pages were recreated successfully.</p></div>'; 
        });
    }
});

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
add_action('save_post_doc_page', function ($post_id) {
    // Prevent collisions between the initial create_db_doc_pages_from_html_files call
    // process and the save_post_doc_page hook.
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
    save_db_doc_pages_as_html($tmpPath);
    docs_plugin_deltree(HTML_PAGES_PATH);
    rename($tmpPath, HTML_PAGES_PATH);
});

function create_db_doc_pages_from_html_files($dir, $parent_id = 0) {
    $indexFilePath = $dir . '/index.html';
    if(file_exists($indexFilePath)) {
        $parent_id = create_db_doc_page_from_html_file(new SplFileInfo($indexFilePath), $parent_id);
    }

    foreach (scandir($dir) as $file) {
        if ($file === '.' || $file === '..' || $file === 'index.html') {
            continue;
        }
        
        $filePath = $dir . '/' . $file;
        if (is_dir($filePath)) {
            create_db_doc_pages_from_html_files($filePath, $parent_id);
        } else if (pathinfo($file, PATHINFO_EXTENSION) === 'html') {
            create_db_doc_page_from_html_file(new SplFileInfo($filePath), $parent_id);
        }
    }
}

function create_db_doc_page_from_html_file(SplFileInfo $file, $parent_id = 0) {
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
        $content = trim($p->get_updated_html());
    } else {
        $title = $file->getBasename('.html');
    }

    // Insert the content as a WordPress doc_page
    return wp_insert_post(array(
        'post_title'    => $title,
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_author'   => get_current_user_id(),
        'post_type'     => 'doc_page',
        'post_parent'   => $parent_id,
    ));
}

function delete_db_doc_pages() {
    $args = array(
        'post_type'      => 'doc_page',
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

function save_db_doc_pages_as_html($path, $parent_id = 0) {
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    $args = array(
        'post_type'      => 'doc_page',
        'posts_per_page' => -1,
        'post_parent'    => $parent_id,
        'post_status'    => 'publish',
    );
    $pages = new WP_Query($args);

    if ($pages->have_posts()) {
        while ($pages->have_posts()) {
            $pages->the_post();
            $page_id = get_the_ID();
            $title = sanitize_title(get_the_title());
            $content = '<h1>' . esc_html(get_the_title()) . "</h1>\n\n" . get_the_content();
            $child_pages = get_pages(array('child_of' => $page_id, 'post_type' => 'doc_page'));

            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }

            if (!empty($child_pages)) {
                $new_parent = $path . '/' . $title;
                if (!file_exists($new_parent)) {
                    mkdir($new_parent, 0777, true);
                }
                file_put_contents($new_parent . '/index.html', $content);
                save_db_doc_pages_as_html($new_parent, $page_id);
            } else {
                file_put_contents($path . '/' . $title . '.html', $content);
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
