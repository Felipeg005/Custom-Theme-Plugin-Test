<?php

namespace Carolmupe\Inc;

use Carolmupe\Inc\Traits\Singleton;

class BaseCarolmupe {
    use Singleton;

    protected function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        wp_die();
    }
}