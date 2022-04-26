<?php

if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <H2><?php the_title(); ?>
            <p> <?php the_content(); ?> </p>

            <?php if (has_post_thumbnail()) ?>
            <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>">

            <h2><?php echo get_the_author_meta('first_name'); ?></h2>

            <div><?php wp_link_pages(); ?></div>
            <p>
                <span><?php previous_post_link(); ?></span> - - - - -
                <span><?php next_post_link(); ?></span>

            <div><?php wp_link_pages() ?></div>
            </p>

    <?php }
}
