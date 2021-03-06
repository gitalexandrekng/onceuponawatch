<?php
/**
 * Basic WooCommerce support
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header();

?>

<!-- Woocommerce
================== -->

<?php include('custom-boutique.php'); ?>

<div class="row theboutique">
	<div class="small-12 columns shopping shopping-in" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( woocommerce_content() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>

			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
	<?php /* woocommerce_get_sidebar(); */ ?>
</div>
<?php include('footer_all.php'); ?>
<?php get_footer();
