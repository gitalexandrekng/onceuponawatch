<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/animate.css/animate.min.css" charset="utf-8">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/assets/owl.carousel.min.css" media="screen" title="no title" charset="utf-8">
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
        <script>
		$(window).load(function(){
        	$('.appear').addClass('animated fadeInUp');
        });
		</script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<!-- Boite de dialogue pour le login
	====================================== -->
    <div id="openLogin" class="loginDialog">
    	<div class="inlogin">
    		<div class="texte">
                <a href="#close" title="Close" class="close non"><i class="fa fa-times-circle-o"></i></a>
        		<div class="title">
        		    <h3>Connexion</h3>
        		</div>
        		<div><?php wp_login_form(); ?></div>
    		</div>
    	</div>
    </div>

	<!-- Responsive menu
	====================================== -->
    <div id="openMenu" class="menuDialog">
    	<div class="inmenu">
    		<div class="texte">
                <a href="#close" title="Close" class="close non"><i class="fa fa-times-circle-o"></i></a>
        		<div>
                    <h4>Menu</h4>
        		    <?php wp_nav_menu( array( 'theme_location' => 'headmenu' ) ); ?>
        		</div>
                <div>
                    <h4>Compte</h4>
                    <ul id="zozo">
                        <li><?php if (is_user_logged_in()){ echo '<a href="' . wp_logout_url( site_url( '/' ) ) .'"><i class="fa fa-sign-out"></i>Se déconnecter</a>'; } else { ?><a href="#openLogin" class="non"><i class="fa fa-sign-in"></i>S'identifier</a><?php } ?></li>
                        <?php if (!is_user_logged_in()){ ?><li><a href="<?php echo bloginfo('home')?>/inscription"><i class="fa fa-check"></i>Inscription</a></li><?php } ?>
                        <?php if (is_user_logged_in()){ ?><li><a href="<?php echo bloginfo('home')?>/mon-compte/"><i class="fa fa-user"></i>Mon compte</a></li><?php } ?>
                    </ul>
                </div>
    		</div>
    	</div>
    </div>

	<!-- Navigation fixed-navi
	=============================== -->

    <div class="fixed-navi">
        <?php wp_nav_menu( array( 'theme_location' => 'headmenu' ) ); ?>
		<div id="headmenuresponsive">
		    <ul>
		        <li><a href="#openMenu" class="non"><i class="fa fa-bars"></i>Menu</a></li>
                <li><a href="#" class="openSearchbutton non"><i class="fa fa-search"></i></a></li>
                <li><a href="#openBasket"><i class="fa fa-shopping-basket"></i>Panier</a></li>
		    </ul>
		</div>
        <div class="rechercherrr">
            <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
        </div>
    </div>

	<!-- Video background
	========================== -->

	<div class="video-bg">
	    <video autoplay muted poster="<?php echo get_stylesheet_directory_uri() ?>/images/cover.png" id="bgvid" loop>
	    <source src="<?php echo get_stylesheet_directory_uri() ?>/rolex.mp4" type="video/mp4">
	</div>

	<!-- INCLUDE header
    ========================== -->

    <div class="appear">

        <?php include('custom-header.php') ?>

		<?php if (is_home()){ include("custom-homepage.php"); } ?>
		<?php if (is_page(7) or is_page(5) or is_page(70) or is_page(66) or is_page(75)){ echo '<div class="removeheader"></div>';} ?>

	<div class="container">
		<?php do_action( 'foundationpress_after_header' );
