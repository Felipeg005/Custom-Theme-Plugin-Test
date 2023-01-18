<?php 
/* 
Template Name: Home Template 
*/
get_header();

$introduction = get_field('introduction');

?>

<div>
    <?php 
        get_template_part('template-parts/nav');
    ?>
    <p>
        <?php 
            echo $introduction;
        ?>
    </p>
</div>


<?php 
get_footer();
?>