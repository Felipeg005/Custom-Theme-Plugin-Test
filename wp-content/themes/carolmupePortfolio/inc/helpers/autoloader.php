<?php
/**
 * Autoloader file for theme.
 *
 * @package carolmupePortfolio
 */

namespace Carolmupe\Inc\Helpers;

spl_autoload_register( function ($class) {
    // Convert path in array
    $class_array = explode("\\", $class);

    // Etract the class name
    $class_name = array_pop($class_array);

    // Find fill class directorie
    $class_dir = array_slice($class_array, 1);
    $class_dir = strtolower(join('/' , $class_dir));

    // Define filename for use
    $file_name = CAROLMUPE_DIR . '/' .$class_dir . '/' . $class_name . '.php';

    // If the file is readable make the call
    if( is_readable($file_name) ) {
        require_once $file_name;
    }
});