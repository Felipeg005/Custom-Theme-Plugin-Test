<?php
/**
 * 
 *
 * @package WordPress
 * 
 * 
 */

$menu_class = Carolmupe\Inc\Classes\BaseCarolmupeMenus::get_instance();

$menu_id= $menu_class->get_menu_id( 'carolmupe-header-menu' );

$menu_items = wp_get_nav_menu_items( $menu_id );

$menu_childs = $menu_class->get_children_ids( $menu_items );
?>
<header>
    <nav>
        <ul>
            <?php foreach ($menu_items as $item) {?>
                <?php if ( empty( $item->menu_item_parent  ) ) { ?>
                    <li> 
                        <?php echo $item->title; ?>
                        <?php if ( ! empty( $menu_childs ) ) { ?>
                            <ul>
                                <?php foreach ($menu_childs as $child) {?>
                                    <li> 
                                        <?php if ( $child->menu_item_parent == $item->ID ) { ?>
                                        <?php echo $child->title; ?>
                                        <?php } ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </li>
                <?php } ?>
            <?php }?>
        </ul>
    </nav>
</header>
