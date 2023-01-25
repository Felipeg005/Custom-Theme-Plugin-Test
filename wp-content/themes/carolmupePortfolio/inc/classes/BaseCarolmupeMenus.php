<?php

/**
 * 
 * @package carolmupePortfolio
 */

namespace Carolmupe\Inc\Classes;

use Carolmupe\Inc\Traits\Singleton;

class BaseCarolmupeMenus {
   use Singleton;

   protected function __construct() {
        $this->setup_hooks();
    }

    public function setup_hooks() {
        //Actions
        add_action( 'init', [ $this , 'setup_theme_menus' ] );
    }

    public function setup_theme_menus() {
        register_nav_menus( array(
            'carolmupe-header-menu' => esc_html__( 'Header Menu' ),
            'carolmupe-extra-menu' => esc_html__( 'Extra Menu' )
           )
        );
    }

    public function get_menu_id( $location ) {
        $locations = get_nav_menu_locations();

        return array_key_exists($location, $locations) ? $locations[ $location ] : '';
    }

    public function get_children_ids( $menu_items, $menu_id ) {
        $child_items = [];

        if ( ! empty( $menu_items ) ) {
            foreach( $menu_items as $menu ) {
                if(  intval($menu->menu_item_parent) === $menu_id ) {
                    array_push( $child_items , $menu );
                }
            }
        }

        return $child_items;
    }
}