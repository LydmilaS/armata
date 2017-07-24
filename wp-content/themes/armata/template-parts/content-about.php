<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package trinity
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="thumbnail-post">
        <?php the_post_thumbnail();?>
    </div>

    <div class="content-post">
        <header class="entry-header">
            <?php
            if ( is_single() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title">', '</h2>' );
            endif;

            if ( 'workers' === get_post_type() ) : ?>
                <?php
            endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <div class="profession"><?php  echo  get_field( "profession" );?></div>
            <?php the_content('', ''); ?>
        </div><!-- .entry-content -->
    </div>
</article>