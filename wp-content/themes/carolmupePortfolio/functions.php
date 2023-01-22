<?php
/**
 * carolmupePortfolio functions
 * 
 * Theme functions
 * 
 */

/**
 * Carolmupe Add Scripts Function
 * 
 * Adds all needed scripts and styles on the head and footer injected by WordPress
 * 
 * @package carolmupePortfolio
 * 
 * @return void
 */

// Call autoloader

include_once 'inc/helpers/autoloader.php';

// Define the root path of the theme
if (! defined( 'CAROLMUPE_DIR' )) {
   define( 'CAROLMUPE_DIR',  untrailingslashit(get_template_directory()) );
}

if (! defined( 'CAROLMUPE_DIR_URI' )) {
   define( 'CAROLMUPE_DIR_URI', untrailingslashit(get_template_directory_uri()) );
}

function get_base_class_instance() {
    \Carolmupe\Inc\Classes\BaseCarolmupe::get_instance();
}

get_base_class_instance();