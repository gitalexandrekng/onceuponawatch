<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header();
?>

<section class="intheblog">

    <div class="jesuisletitre" style="display:none;">
        <div class="thetitle">
            <!-- TITRE -->
            <div class="title">
                <h3>Dans le journal</h3>
            </div>

        	<!-- Slogan -->
        	<div class="row">
                <div class="large-8 medium-10 small-centered columns">
                    <div class="description">
                        <span>On ne doute pas de votre connaissance en horlogerie, mais, une chose est sûre, ces articles pourraient vous interesser</span>
                        <hr>
                        <span class="citation">« La différence entre le style et la mode est la qualité.»</span>
                    </div>
                </div>
            </div>
    	</div>
    </div>

    <div class="fulltitre">
        <h3>Sur le blog</h3>
    </div>

	<div class="row fullWidth small-collapse">

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'home', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>

	</div>

	<div class="text-center" style="display:none;"><a href="<?php echo bloginfo('home') ?>/category/montres" class="custom-button">Voir tous les articles</a></div>
    <a href="<?php bloginfo('home') ?>/category/montres" class="morelink">Voir tous les articles</a>

</section>

<?php if (is_home()){ include("footer_home.php"); include("footer_all.php"); } else {}; ?>

<?php get_footer();
