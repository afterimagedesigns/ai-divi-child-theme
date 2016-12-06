<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  

// Enable automatic updates for Core
//add_filter( 'auto_update_core', '__return_true' );
// Enable automatic updates for plugins
//add_filter('auto_update_plugin', '__return_true');
// Enable automatic updates for themes
//add_filter('auto_update_theme', '__return_true');

require_once get_stylesheet_directory() . '/includes/plugin-list.php';

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function cc_mime_types($mimes) {
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

//
// Your code goes below
//
