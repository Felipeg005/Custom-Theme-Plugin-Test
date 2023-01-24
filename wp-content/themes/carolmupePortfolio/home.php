<?php 
/* 
Template Name: Home Template 
*/

get_header();

?>

<div>
    <?php 
    if ( have_posts() ) { 
        while ( have_posts() ) {
            the_post();
    ?>
        <h1><?php echo the_title(); ?></h1>
        <h1><?php echo the_content(); ?></h1>
    <?php 
        }
    } 
    ?>
</div>


<?php 
get_footer();
?>