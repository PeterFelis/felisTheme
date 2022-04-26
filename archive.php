<?php get_header(); ?>


<div class='header'>
    <div class='container'>
        dit is de archive pagina
    </div>
</div>


<div class="container finetune">
    <div class="row">
        <div class="col-sm-2">
        </div>

        <div class="col-sm-8">
            <h2 class='text-center'>Alle posts</h2>

            <?php get_template_part('includes/post', 'archive'); ?>

        </div>

        <div class="col-sm-2">
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-2'></div>
        <div class='col-sm-4 text-start'><?php previous_posts_link(); ?></div>
        <div class='col-sm-4 text-end'><?php next_posts_link(); ?></div>
        <div class='col-sm-2'></div>
    </div>
</div>


<?php get_footer(); ?>