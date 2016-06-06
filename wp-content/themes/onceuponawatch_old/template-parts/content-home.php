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

<article class="medium-4 columns inzer" id="post-<?php the_ID(); ?>">
	<div class="article-photo" style="background-image:url(<?php echo $image[0]; ?>)">
		<a href="<?php the_permalink(); ?>" class="fadeyo">
			<div class="za">
                <div class="texte"><?php the_excerpt() ?></div>
                <div class="pllus">Cliquez pour<br>en savoir plus<br></div>
				<i class="fa fa-plus-circle fa-3x"></i>
			</div>
		</a>
		<div class="zertitle">
		    <h2><?php the_title() ?></h2>
		</div>
	</div>
	<!--<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<div class="sampled"><?php the_excerpt(); ?></div>-->
</article>
