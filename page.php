<?php get_header(); ?>

<?php
//sidebars plakken

if (is_active_sidebar('blog_sidebar')) {
    dynamic_sidebar('blog_sidebar');
}
?>


<div class='header'>
    <div class='container'>
        dit is de page pagina
    </div>
</div>


<div class='container finetune'>
    <hr>


    <?php get_template_part("includes/pagina", "reader"); ?>

    <hr>

</div>


<?php get_footer(); ?>