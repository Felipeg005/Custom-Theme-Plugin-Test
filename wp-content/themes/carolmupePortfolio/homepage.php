<?php 
/* 
Template Name: Home Template 
*/

get_header();

$introduction = get_field('introduction');

?>

<div>
    <?php get_template_part('template-parts/nav'); ?>
    <p><?php echo $introduction; ?></p>
    <p><?php echo get_template_directory_uri(); ?></p>
    <p><?php echo get_stylesheet_uri(); ?></p>
</div>


<?php 
get_footer();
?>