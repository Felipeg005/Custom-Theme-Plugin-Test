<?php

/**
 * 
 * @package carolmupePortfolio
 */

namespace Carolmupe\Inc\Classes;

use Carolmupe\Inc\Traits\Singleton;

class BaseCarolmupeAssets {
   use Singleton;

   protected function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        //Actions
        add_action( 'wp_enqueue_scripts', [ $this , 'register_styles' ] );
        add_action( 'wp_enqueue_scripts', [ $this , 'register_scripts' ] );
    }

    public function register_styles() {
        // Register styles
        wp_register_style( 'style',  get_stylesheet_uri(), array(), wp_get_theme()->get('Version') , 'all' );

        // Enqueue styles
        wp_enqueue_style( 'style' );
    }

    public function register_scripts() {
        // Register scripts
        wp_register_script( 'custom', CAROLMUPE_DIR_URI . '/assets/js/custom.js', array(), wp_get_theme()->get('Version'), true );

        // Enqueue scripts
        wp_enqueue_script( 'custom' );
    }
}