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
                <p> &copy; 2016 Armata Manus. Все права защищены. </p>
            <?php else :?>
                <p> &copy; 2016 Armata Manus. All rights reserved. </p>
            <?php endif; ?>

            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-3',
                'menu_id'        => 'social',
            ) );
            ?>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
