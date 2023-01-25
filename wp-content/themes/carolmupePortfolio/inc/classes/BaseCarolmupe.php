<?php

namespace Carolmupe\Inc\Classes;

use Carolmupe\Inc\Traits\Singleton;

class BaseCarolmupe {
    use Singleton;

    protected function __construct() {
        // Call classes
        BaseCarolmupeAssets::get_instance();
        BaseCarolmupeMenus::get_instance();
        $this->setup_hooks();
    }

    public function setup_hooks() {
        //Actions
        add_theme_support( 'title-tag' );
    }
}