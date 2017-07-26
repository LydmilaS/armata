<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package armata
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php echo esc_url( get_permalink() ) ; ?>" rel="bookmark">
        <?php the_post_thumbnail( ); ?>
    </a>

	<header class="entry-header">
		<?php
		if ( is_singular() && ! is_front_page() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>

		<div class="entry-date">
            <?php if(qtrans_getLanguage() == "ru") : ?>
                <span class="main-color">Опубликован: </span> <?php echo get_the_date('d/m/Y'); ?>
            <?php else :?>
                <span class="main-color">Published: </span> <?php echo get_the_date('d/m/Y'); ?>
            <?php endif; ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
        <div class="entry-date">
            <?php if(qtrans_getLanguage() == "ru") : ?>
                <span class="main-color">Категории : </span>  <?php armata_entry_footer(); ?>
            <?php else :?>
                <span class="main-color">Category: </span>  <?php armata_entry_footer(); ?>
            <?php endif; ?>

        </div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
        <?php if(qtrans_getLanguage() == "ru") : ?>
            <?php the_content( 'Читать далее', ''); ?>
        <?php else :?>
            <?php the_content( 'Read more', ''); ?>
        <?php endif; ?>


	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
