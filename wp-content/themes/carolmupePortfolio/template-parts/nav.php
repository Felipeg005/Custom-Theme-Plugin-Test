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
?>
<header>
    <nav>
        <ul>
            <?php foreach ($menu_items as $item) {
                $menu_childs = $menu_class->get_children_ids( $menu_items, $item->ID );
                $has_childs = ! empty ( $menu_childs ) && is_array( $menu_childs );
                ?>
                <?php if ( $has_childs ) { ?>
                        <li><?php echo $item->title ?></li>
                        <ul>
                            <?php foreach ($menu_childs as $child) { ?>
                                <li> 
                                <?php echo $child->title; ?>
                                </li>
                            <?php } ?>
                        </ul>
                <?php } else { ?>
                    <?php if ( empty($item->menu_item_parent) ) { ?>
                    <li>
                        <?php echo $item->title ?>
                    </li>
                    <?php } ?>
                <?php } ?>
            <?php }?>
        </ul>
    </nav>
</header>
