<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package SKT Naturolite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

</head>

<body <?php body_class(''); ?>>
<div class="header">
    <div class="header-inner">
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <h1><?php bloginfo('name'); ?></h1>
                <span class="tagline"><?php bloginfo( 'description' ); ?></span>
            </a>
         </div><!-- logo -->
        <div class="toggle">
        <a class="toggleMenu" href="#"><?php esc_attr_e('Menu','naturo_lite'); ?></a>
        </div><!-- toggle -->
        <div class="nav">
            <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
        </div><!-- nav --><div class="clear"></div>
    </div><!-- header-inner -->
</div><!-- header -->
<?php if ( is_front_page() && is_home() ) { ?>
<section id="home_slider">
        	<?php
			$sldimages = ''; 
			$sldimages = array(
						'1' => get_template_directory_uri().'/images/slides/slider1.jpg',
						'2' => get_template_directory_uri().'/images/slides/slider2.jpg',
						'3' => get_template_directory_uri().'/images/slides/slider1.jpg',
			); ?>
            
        	<?php
			$slAr = array();
			$m = 0;
			for ($i=1; $i<4; $i++) {
				if ( get_theme_mod('slide_image'.$i, $sldimages[$i]) != "" ) {
					$imgSrc 	= get_theme_mod('slide_image'.$i, $sldimages[$i]);
					$imgTitle	= get_theme_mod('slide_title'.$i);
					$imgDesc	= get_theme_mod('slide_desc'.$i);
					$imgLink	= get_theme_mod('slide_link'.$i);
					if ( strlen($imgSrc) > 2 ) {
						$slAr[$m]['image_src'] = get_theme_mod('slide_image'.$i, $sldimages[$i]);
						$slAr[$m]['image_title'] = get_theme_mod('slide_title'.$i);
						$slAr[$m]['image_desc'] = get_theme_mod('slide_desc'.$i);
						$slAr[$m]['image_link'] = get_theme_mod('slide_link'.$i);
						$m++;
					}
				}
			}
			$slideno = array();
			if( $slAr > 0 ){
				$n = 0;?>
                <div class="slider-wrapper theme-default"><div id="slider" class="nivoSlider">
                <?php 
                foreach( $slAr as $sv ){
                    $n++; ?><img src="<?php echo esc_url($sv['image_src']); ?>" alt="<?php echo esc_attr($sv['image_title']);?>" title="<?php echo esc_attr('#slidecaption'.$n) ; ?>" /><?php
                    $slideno[] = $n;
                }
                ?>
                </div><?php
                foreach( $slideno as $sln ){ ?>
                    <div id="slidecaption<?php echo esc_attr($sln); ?>" class="nivo-html-caption">
                    <div class="slide_info">
                    <h2><a href="<?php echo esc_url(get_theme_mod('slide_link'.$sln,'#link'.$sln)); ?>"><?php echo esc_attr(get_theme_mod('slide_title'.$sln, __('We Create Wordpress Theme','naturo_lite').$sln)); ?></a></h2>
                    <p><?php  echo esc_attr(get_theme_mod('slide_desc'.$sln, __('We are a group of experienced designers and developers. We set new standards in user experience & make future happen.','naturo_lite').$sln)); ?></p>
                    </div>
                    </div><?php 
                } ?>
                </div>
                <div class="clear"></div><?php 
			}
            ?>
        </section>
<div class="clear"></div>
<?php
}
elseif ( is_front_page() ) { 
?>
<section id="home_slider">
        	<?php
			$sldimages = ''; 
			$sldimages = array(
						'1' => get_template_directory_uri().'/images/slides/slider1.jpg',
						'2' => get_template_directory_uri().'/images/slides/slider2.jpg',
						'3' => get_template_directory_uri().'/images/slides/slider1.jpg',
			); ?>
            
        	<?php
			$slAr = array();
			$m = 0;
			for ($i=1; $i<4; $i++) {
				if ( get_theme_mod('slide_image'.$i, $sldimages[$i]) != "" ) {
					$imgSrc 	= get_theme_mod('slide_image'.$i, $sldimages[$i]);
					$imgTitle	= get_theme_mod('slide_title'.$i);
					$imgDesc	= get_theme_mod('slide_desc'.$i);
					$imgLink	= get_theme_mod('slide_link'.$i);
					if ( strlen($imgSrc) > 2 ) {
						$slAr[$m]['image_src'] = get_theme_mod('slide_image'.$i, $sldimages[$i]);
						$slAr[$m]['image_title'] = get_theme_mod('slide_title'.$i);
						$slAr[$m]['image_desc'] = get_theme_mod('slide_desc'.$i);
						$slAr[$m]['image_link'] = get_theme_mod('slide_link'.$i);
						$m++;
					}
				}
			}
			$slideno = array();
			if( $slAr > 0 ){
				$n = 0;?>
                <div class="slider-wrapper theme-default"><div id="slider" class="nivoSlider">
                <?php 
                foreach( $slAr as $sv ){
                    $n++; ?><img src="<?php echo esc_url($sv['image_src']); ?>" alt="<?php echo esc_attr($sv['image_title']);?>" title="<?php echo esc_attr('#slidecaption'.$n) ; ?>" /><?php
                    $slideno[] = $n;
                }
                ?>
                </div><?php
                foreach( $slideno as $sln ){ ?>
                    <div id="slidecaption<?php echo esc_attr($sln); ?>" class="nivo-html-caption">
                    <div class="slide_info">
                    <h2><a href="<?php echo esc_url(get_theme_mod('slide_link'.$sln,'#link'.$sln)); ?>"><?php echo esc_attr(get_theme_mod('slide_title'.$sln, __('We Create Wordpress Theme','naturo_lite').$sln)); ?></a></h2>
                    <p><?php  echo esc_attr(get_theme_mod('slide_desc'.$sln, __('We are a group of experienced designers and developers. We set new standards in user experience & make future happen.','naturo_lite').$sln)); ?></p>
                    </div>
                    </div><?php 
                } ?>
                </div>
                <div class="clear"></div><?php 
			}
            ?>
        </section>
<div class="clear"></div>

<?php
}
elseif ( is_home() ) {
?>
<section id="home_slider" style="display:none;"></section>
<section id="wrapsecond" style="display:none;"></section>
<?php
}
?>