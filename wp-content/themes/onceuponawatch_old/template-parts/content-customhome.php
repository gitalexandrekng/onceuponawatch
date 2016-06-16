<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="removeheader"></div>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry fildrong'); ?> style="margin-bottom:50px;">
	<header class="customarchive" style="background-image:url(<?php the_post_thumbnail_url() ?>)">
		<div class="fns">
			<h2 style="font-family:'Oswald'"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php foundationpress_entry_meta(); ?>
		</div>
	</header>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>

    <div class="text-right"><a href="<?php the_permalink() ?>" class="custom-button">Lire plus</a></div>
</div>
