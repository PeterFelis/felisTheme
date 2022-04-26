<?php

if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <div class='archivepost'>
            <a href="<?php the_permalink(); ?>">


                <div class='container'>
                    <div class='row'>
                        <div class='col-6'>
                            <h2> <?php the_title(); ?> </h2>
                            <p> <?php the_excerpt(); ?> </p>

                            <?php
                            $tags = get_the_tags();
                            foreach ($tags as $tag) { ?>
                                <a class="badge bg-success" href="<?php echo get_tag_link($tag->term_id); ?>">
                                    <?php echo $tag->name; ?> </a>
                            <?php } ?>

                            <?php
                            $catagories = get_the_category();
                            foreach ($catagories as $cat) { ?>
                                <a class="badge bg-info text-dark p-2" href="<?php echo get_category_link($cat->term_id); ?>">
                                    <?php echo $cat->name; ?> </a>
                            <?php }; ?>
                        </div>
                        <div class='col-6'>
                            <?php if (has_post_thumbnail()) ?>
                            <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" />
                        </div>
                    </div>
                </div>
        </div>
<?php }
}
