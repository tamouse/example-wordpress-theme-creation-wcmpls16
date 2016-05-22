<?php

get_header();
if ( have_posts() ) {
    while  (have_posts() ) {
        the_post();

        echo the_title("<h2>","</h2>");
        echo the_excerpt();
        ?>
        <p>Posted on: <?php the_date(); ?> at: <?php the_time(); ?></p>
        <?php
    }
}
get_footer();
