<?php
get_header();
$q = array(
    'post_type' => 'employee',
    'posts_per_page' => 10
);

$loop = new WP_Query( $q );

if ( $loop->have_posts() ) {
    echo "<ul>";
    while ($loop->have_posts()) {
        $loop->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
        <?php
    }
    echo "</ul>";
}
get_footer();

