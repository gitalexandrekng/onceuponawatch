<?php
/*
Template Name: News
*/
get_header(); ?>
<?php do_action( 'foundationpress_before_content' ); ?>
<div class="title_news">
    <div class="fade">
        <h1 class="newstitle">Nouveautés</h1>
    </div>
</div>
<section class="row pagenews">
    <div class="small-12 columns listingproduit">
        <?php
        $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 8, 'orderby' =>'date','order' => 'DESC' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product;
        ?>

        <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <?php endif; ?>

        <div class="large-3 medium-6 columns end">
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
    <div class="text-center"><a href="<?php echo bloginfo('home') ?>/categorie-produit/montres/" class="custom-button">Tout découvrir</a></div>
</section>
<section class="promoz row">
    <div class="small-12 columns">
        <div class="jesuisletitre">
            <div class="thetitle">
                <div class="title">
                    <h3>Promotions</h3>
                </div>
                <div class="row">
                    <div class="large-8 medium-10 small-centered columns">
                        <div class="description">
                            <span>Découvrez nos dernières montres qui n'attendent que d'être à votre poignet</span>
                            <hr>
                            <span class="citation">« La différence entre le style et la mode est la qualité.»</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel promozions">
            <?php
            $args = array('post_type' => 'annonces');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>

            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <?php endif; ?>
            <div class="item">
                <div class="promoz-slide" style="background-image:url(<?php echo $image[0] ?>)">
                    <div class="inze">
                        <span class="titleze"><?php the_title() ?></span>
                        <span><?php the_excerpt() ?></span>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();
