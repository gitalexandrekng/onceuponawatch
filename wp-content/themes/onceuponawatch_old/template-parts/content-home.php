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

<?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<?php endif; ?>

<article class="large-4 columns inzer" id="post-<?php the_ID(); ?>">
	<div class="article-photo" style="background-image:url(<?php echo $image[0]; ?>)">
		<a href="<?php the_permalink(); ?>" class="fadeyo">
			<div>Cliquez pour<br>en savoir plus<br>
				<i class="fa fa-plus-circle fa-3x"></i>
			</div>
		</a>
	</div>
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<div class="sampled"><?php the_excerpt(); ?></div>
</article>
