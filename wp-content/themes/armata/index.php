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

	<div id="primary" class="content-area">
        <?php if(qtrans_getLanguage() == "ru") : ?>
            <h1 class="entry-title entry-title-page">Новости</h1>
        <?php else :?>
            <h1 class="entry-title entry-title-page">News</h1>
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <?php get_sidebar(); ?>
            <main id="main" class="col-md-9 col-md-pull-3 site-main">
                <?php
                if ( have_posts() ) :

                    if ( is_home() && ! is_front_page() ) : ?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                        </header>

                    <?php
                    endif;

                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', get_post_format() );

                    endwhile;  ?>
                    <div class="pagination">
                        <?php global $wp_query;

                        $big = 999999999; // need an unlikely integer

                        echo paginate_links( array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?paged=%#%',
                            'current' => max( 1, get_query_var('paged') ),
                            'total' => $wp_query->max_num_pages
                        ) ); ?>

                    </div>

                <?php else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>

            </main><!-- #main -->

            </div>
        </div>
	</div><!-- #primary -->

<?php
get_footer();
