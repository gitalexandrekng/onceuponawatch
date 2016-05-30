<?php
/*
Template Name: Page contact
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="title_news">
    <div class="fade">
        <h1 class="newstitle"><?php the_title(); ?></h1>
    </div>
</div>

<div id="page-full-width" role="main" style="background:white;position:relative;z-index:10;">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content pagecontact') ?> id="post-<?php the_ID(); ?>">
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
          <div class="text-center" style="margin-bottom:3rem;">Une information ? Une réclamation ?<br>N'hésitez pas à nous contacter</div>
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
<?php get_footer();
