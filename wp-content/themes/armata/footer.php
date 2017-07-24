<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package armata
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="container">
            <?php if(qtrans_getLanguage() == "ru") : ?>
                &copy; 2016 Armata Manus. Все права защищены.
            <?php else :?>
                &copy; 2016 Armata Manus. All rights reserved.
            <?php endif; ?>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
