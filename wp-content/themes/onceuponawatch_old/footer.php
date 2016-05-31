<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<?php if(is_page()){include('footer_all.php');} ?>

		</div>
		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php /* dynamic_sidebar( 'footer-widgets' ); */ ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>
	</div>
		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>

<script src="<?php echo get_stylesheet_directory_uri() ?>/jquery.parallax.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/protonet/jquery.inview/jquery.inview.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/scrollme/jquery.scrollme.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/jquery-fadethis/dist/jquery.fadethis.min.js"></script>

<!-- Javascript perso -->
<script src="<?php echo get_stylesheet_directory_uri() ?>/custom-js.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/custom-woocommerce.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/custom-pageproduit.js" type="text/javascript"></script>

<!-- Pour la parallax des bandeaux -->
<script type="text/javascript">
$(document).ready(function(){
	//$('.excellence-band').parallax("50%", 0.5);
	$('.header-image-container .in').parallax("50%", 0.5);
	$('.yaprobleme').parallax("50%", 0.5);
})
</script>

<!-- Fade this plugin -->
<script>$(window).fadeThis({
	reverse:false,
});</script>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
