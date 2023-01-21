<?php
/**
 * Autoloader file for theme.
 *
 * @package carolmupePortfolio
 */

namespace Carolmupe\Inc\Helpers;

/**
 * Auto loader function.
 *
 * @param string $resource Source namespace.
 *
 * @return void
 */

spl_autoload_register( function () {
    if( strpos(get_called_class(), 'class') ) {
        require_once CAROLMUPE_ROOT_PATH . 'inc/classes/' . get_called_class() . '.php';
    }
    if( strpos(get_called_class(), 'traits') ) {
        require_once CAROLMUPE_ROOT_PATH . 'inc/traits/' . get_called_class() . '.php';
    }
});