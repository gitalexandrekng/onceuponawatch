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

	<!-- Navigation fixed-navi
	=============================== -->

    <div class="fixed-navi">
        <?php wp_nav_menu( array( 'theme_location' => 'headmenu' ) ); ?>
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

	<div style="height:100%" class="container">
		<?php do_action( 'foundationpress_after_header' );
