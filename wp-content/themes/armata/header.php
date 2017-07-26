<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package armata
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://use.fontawesome.com/49cb636043.js"></script>
    <script   src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'armata' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="container">
            <div class="row">
                <div class="logotype-area col-xs-10 col-sm-6 col-md-4">
                    <a href="<?php echo home_url();?>">
                        <?php
                        if (ot_get_option('logotype_image')): ?>
                            <img src="<?php echo ot_get_option('logotype_image'); ?>" alt=""/>

                            <?php
                        else: echo ot_get_option('logotype_text'); ?>

                            <?php
                        endif;
                        ?>
                        <span>Armata manus</span>
                        <span class="site-slogan">Chirurgus curat manu armata!</span>
                    </a>
                </div>
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i></button>
                <div class="navigation col-xs-12 col-sm-6  col-md-8">
                    <nav id="site-navigation" class="main-navigation">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        ) );
                        ?>

                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-2',
                            'menu_id'        => 'language',
                        ) );
                        ?>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
