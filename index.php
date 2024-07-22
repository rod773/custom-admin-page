<?php
/*
Plugin Name: Custom Admin Page
Description: Create a custom admin page in WordPress.
Version: 1.0
Author: Rodrigo

*/

/* Add CSS file */


function custom_admin_page_styles() {
wp_enqueue_style('custom-admin-page-styles', plugin_dir_url(__FILE__) .
'style.css');
}

add_action('admin_enqueue_scripts', 'custom_admin_page_styles');

/*Create the Admin Menu Page*/
function custom_admin_page_menu() {
add_menu_page(
'Custom Admin Page',
'Custom Page',
'manage_options',
'custom-admin-page',
'custom_admin_page_callback',
plugin_dir_url(__FILE__) .'/images/folder.png',
20 // Position in the menu
);
}


add_action('admin_menu', 'custom_admin_page_menu');
/* Add Content File */
include('content.php');