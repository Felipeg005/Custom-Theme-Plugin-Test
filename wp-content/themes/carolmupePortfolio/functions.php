<?php 

function carolmupe_add_scripts() {
    wp_enqueue_style( 'style',  get_stylesheet_uri(), array(), wp_get_theme()->get('Version') , 'all' );
    wp_enqueue_style( 'primary-styles',  get_template_directory_uri() . '/assets/css/primary-styles.css', array('secondary-styles'), wp_get_theme()->get('Version'), 'all' );
    wp_enqueue_style('secondary-styles', get_template_directory_uri() . '/assets/css/secondary-styles.css', array(  ), wp_get_theme()->get('Version'), 'all' );
}

add_action( 'wp_enqueue_scripts', 'carolmupe_add_scripts' );

