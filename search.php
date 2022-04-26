<?php get_header(); ?>

<h2> zoek resultaten </h2>
<p>U zocht: <?php echo get_search_query(); ?> </p>
<?php

get_template_part('/includes/post', 'archive');


get_footer();
