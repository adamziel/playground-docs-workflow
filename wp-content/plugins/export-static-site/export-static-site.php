<?php
/*
Plugin Name: Export Static Site
Plugin URI: https://w.org/playground
Description: Exposes a export_static_site PHP function that exports the static site using the Simply Static
Version: 0.1
Author: WordPress Contributors
License: GPL2
*/

function export_static_site($output_file)
{
    $simply_static = Simply_Static\Plugin::instance();
    $simply_static->run_static_export();

    // Wait at most 2 minutes for the export to finish
    $i = 0;
    do {
        $exports = glob(WP_CONTENT_DIR . '/uploads/simply-static/temp-files/*.zip');
        sleep(1);
    } while (empty($exports) && ++$i < 120);

    if (empty($exports)) {
        throw new Exception("The export wasn't finished in two minutes, aborting.");
    }
    
    $export = end($exports);
    rename($export, $output_file);
}
