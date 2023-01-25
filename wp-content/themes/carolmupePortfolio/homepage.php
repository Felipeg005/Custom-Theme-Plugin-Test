<?php 
/* 
Template Name: Home Template 
*/

get_header();

?>

<div>
    <?php get_template_part('template-parts/nav'); ?>
    <p><?php echo get_stylesheet_uri(); ?></p>
    <p><?php echo wp_title('', true); ?></p>
</div>


<?php 
get_footer();
?>