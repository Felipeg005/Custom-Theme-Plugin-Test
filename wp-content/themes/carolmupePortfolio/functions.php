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

// Define the root path of the theme
if (! defined( 'CAROLMUPE_ROOT_PATH' )) {
   define( 'CAROLMUPE_ROOT_PATH', untrailingslashit(get_template_directory_uri()) );
}

//include 'inc/traits/trait-singleton.php';
//include 'inc/classes/class-base-carolmupe.php';
include_once 'inc/helpers/autoloader.php';


function get_base_class_instance() {
    \Carolmupe\Inc\BaseCarolmupe::get_instance();
}

get_base_class_instance();

function carolmupe_add_scripts() {
    // Styles
    wp_enqueue_style( 'style',  get_stylesheet_uri(), array(), wp_get_theme()->get('Version') , 'all' );


    // Scripts
    wp_enqueue_script('custom', CAROLMUPE_ROOT_PATH . '/assets/js/custom.js', array(), wp_get_theme()->get('Version'), true);
}

add_action( 'wp_enqueue_scripts', 'carolmupe_add_scripts' );

