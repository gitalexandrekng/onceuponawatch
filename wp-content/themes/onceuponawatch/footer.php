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

		</section>
		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
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
<script type="text/javascript">
$(document).ready(function(){
	$('.header-image-container .in').parallax("50%", 0.5);
})
</script>

<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/protonet/jquery.inview/jquery.inview.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/scrollme/jquery.scrollme.min.js"></script>
<script type="text/javascript">
$('.annonces-container').owlCarousel({
	loop:true,
	nav:true,
	items:1,
	animateOut: 'fadeOut',
	autoplay:true,
	loop:true,
	autoplayTimeout:5000,
	nav:false
})
</script>
<script type="text/javascript">
	$('a').on('click', function(){
		$('body').addClass('ainmated fadeOutUp');
	});

	var lanavigation = $(".navigation-header");

	lanavigation.on('inview', function(event, isInView) {
		if (isInView) {
			$('.fixed-navi').css({opacity : "0", top : "-100px"})
		} else {
			$('.fixed-navi').css({opacity : "1", top : "0px"});
		}
	});
</script>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
