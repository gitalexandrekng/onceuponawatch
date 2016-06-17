<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="custom-thumbnail" style="background-image:url(<?php the_post_thumbnail_url() ?>)">
        <div class="fad">
            <header class="topset">
    			<h1 class="entry-title"><?php the_title(); ?></h1>
    		</header>
        </div>
    </div>

    <div id="single-post" role="main" style="margin-top:40px;">

    	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
    		<div class="text-center" style="font-family:'Montserrat';"><?php foundationpress_entry_meta(); ?></div>
    		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
    		<div class="entry-content">

    		<?php the_content(); ?>
    		</div>
            <div class="anglez"><i class="fa fa-angle-down fa-2x"></i></div>
    		<footer style="margin-top:30px;">
    			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
    			<p><?php the_tags(); ?></p>
    		</footer>
    		<?php do_action( 'foundationpress_post_before_comments' ); ?>
    		<?php comments_template(); ?>
    		<?php do_action( 'foundationpress_post_after_comments' ); ?>
    	</article>

    </div>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
<?php include('footer_all.php') ?>
<?php get_footer();
