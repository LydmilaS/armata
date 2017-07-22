<?php
/* Template Name: About */

get_header(); ?>
<div class="container">
    <?php

    $args = array(
        'posts_per_page' => 10,
        'post_type' => 'workers',
        'orderby' => 'date',
        'order'   => 'DESC',
        'paged' => $paged,
    );

    query_posts($args);

    if ( have_posts() ) :

        if ( is_home() && ! is_front_page() ) : ?>
            <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>

            <?php
        endif;

        while ( have_posts() ) : the_post();


            get_template_part( 'template-parts/content-about', get_post_format() );

        endwhile;
    endif; ?>

</div>


<?php
get_footer();
