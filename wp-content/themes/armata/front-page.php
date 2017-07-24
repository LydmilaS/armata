<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package armata
 */

get_header(); ?>
<div >
<?php
echo do_shortcode("[metaslider id=52]");
?>
</div>
    <div id="primary" class="content-area">
        <div class="container">
            <main id="main" class="site-main">
                <?php
                if ( have_posts() ) :

                    if ( is_home() && ! is_front_page() ) : ?>

                        <?php
                    endif;

                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        the_content( '', '');

                    endwhile;

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>

            </main><!-- #main -->
        </div>
    </div><!-- #primary -->

<?php
get_footer();
