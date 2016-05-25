<?php
/*
Template Name: News
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="title_news">
        <div class="fade">
            <h2 class="newstitle">Nouveautés</h2>
        </div>
    </div>
    <article class="row pagenews">
        <div class="small-12 columns" style="margin-top:50px;">
            <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product;
            ?>

            <?php if (has_post_thumbnail( $post->ID ) ): ?>
            	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <?php endif; ?>

            <div class="small-3 columns">
                <a href="<?php the_permalink(); ?>" class="product-link" title="<?php the_title(); ?>">
                    <!--<div class="image-product"><?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" />'; ?></div>-->
                    <div class="image-product"><img src="<?php echo $image[0]; ?>" alt=""></div>
                    <span class="article-subtitle"><?php the_title(); ?></span>
                    <span class="article-title">
                        <?php
                        $name = get_the_terms($product->ID, 'product_cat');
                        echo $name[0]->name;
                        ?>
                    </span>
                    <span class="price" style="display:none;"><?php echo $product->get_price_html(); ?></span>
                    <button class="custom-button-yo" id="left-disappear">Découvrir</button>
                </a>
            </div>
            <?php /* woocommerce_template_loop_add_to_cart( $loop->post, $product ); */ ?>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
