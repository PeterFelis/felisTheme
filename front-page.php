<?php get_header(); ?>

<div class='header'>
    <div class='container'>
        dit is de front page
    </div>
</div>




<div class="container finetune">
    <div class="row">
        <div class="col-sm-3 grijs">
            <h2>col links</h2>
        </div>

        <div class="col-sm-6 geel">
            <h2> midelste colom </h2>
            <p><?php get_template_part('includes/pagina', 'reader'); ?></p>
        </div>

        <div class="col-sm-3 groen">
            <h2>rechter kolom</h2>
        </div>
    </div>
    <div class='row'>
        <div class='col'>
            <?php get_template_part("includes/lekker", 'zoeken'); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>