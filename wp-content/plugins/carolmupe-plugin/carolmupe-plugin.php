<?php 
/**
 * Carolmupe Plugin
 * 
 * Plugin to upload projects easily
 * @package carolmupePortfolio
 */

/*
 * Plugin Name:       Portfolio items
 * Plugin URI:        https://example.com/plugins/
 * Description:       Handle all your designer projects easily.
 * Version:           1.0.0
 * Requires PHP:      8.0
 * Author:            Juan Felipe Gomez Tobon
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       carolmupe-plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

class CarolmupePortfolioItems {

    private static $bla = 'Name';

    public function __construct() {
    }

    public function activate() {
        echo 'Activated';
    }
    public function deactivate() {

    }
    public function uninstall() {

    }
}

$portfolio_items_class = new CarolmupePortfolioItems();


// Activation hook
register_activation_hook( __FILE__, [ $portfolio_items_class , 'activate' ] );

// Deactivation hook
register_activation_hook( __FILE__, [ $portfolio_items_class , 'deactivate' ] );