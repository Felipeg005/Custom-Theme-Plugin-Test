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

function carolmupe_add_scripts() {
    // Styles
    wp_enqueue_style( 'style',  get_stylesheet_uri(), array(), wp_get_theme()->get('Version') , 'all' );


    // Scripts
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), wp_get_theme()->get('Version'), true);
}

add_action( 'wp_enqueue_scripts', 'carolmupe_add_scripts' );

