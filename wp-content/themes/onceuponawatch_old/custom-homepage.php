<!-- assurance
===================== -->
<div class="assure">
    <div class="row">
        <div class="medium-4 columns"><a class="oklm"><i class="fa fa-truck"></i>Livraison et retours gratuits</a></div>
        <div class="medium-4 columns"><a class="oklm"><i class="fa fa-phone"></i>Assistance 24h/24h</a></div>
        <div class="medium-4 columns"><a class="oklm"><i class="fa fa-gift"></i>Cadeau offert</a></div>
    </div>
</div>

<!-- Annonces genre promotions
==================================== -->

<section class="annonces">

    <div class="annonces-container owl-carousel">

        <?php
        $args = array('post_type' => 'annonces');
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>

        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <?php endif; ?>

        <div class="item">
            <div class="in" style="background-image:url(<?php echo $image[0]; ?>)"></div>
            <div class="texte">
                <div class="inset">
                    <div class="inzzz">
                        <div class="zzz">
                            <span class="toutpetit">Onceuponawatch</span>
                            <h3><?php the_title(); ?></h3>
                            <span><?php the_excerpt(); ?></span>
                            <a href="<?php the_permalink(); ?>" class="custom-button">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php endwhile;?>
    </div>

</section>

<!-- Derniers articles
============================= -->

<section class="last-articles">

    <div class="jesuisletitre">
        <div class="containz">
            <article class="clock">
                <div class="circle-container" style="border:0">
                    <div class="circle-one"></div>
                    <div class="circle-two"></div>
                </div>
                <div class="circle-petit-container" style="border:0">
                    <div class="circle-petit-one"></div>
                </div>
            </article>
        </div>
        <div class="thetitle">
            <div class="title">
                <h3>Derniers articles</h3>
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

    <article>

        <div class="row">

            <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product;
            ?>

            <?php if (has_post_thumbnail( $post->ID ) ): ?>
            	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <?php endif; ?>

            <div class="large-3 medium-6 columns">
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

    <div class="text-center" style="margin-top:20px;"><a href="<?php echo bloginfo('home') ?>/nouveautes" class="custom-button">Découvrir toutes les nouveautés</a></div>

</section>

<!-- Promotions
=================== -->

<section class="promotions-container">
    <div class="promotions">
        <a href="#" class="indiv indiv-left"><strong>-10%</strong> sur les incontournables de l'été</a>
        <a href="#" class="indiv indiv-middle"><strong>-20%</strong> sur l'achat d'un bracelet et d'une montre</a>
        <a href="#" class="indiv indiv-right"><strong>Livraison et retours gratuits</strong></a>
    </div>
</section>

<!-- Les plus vendus
=========================== -->

<section class="bestseller">

    <!-- Titre -->
    <div class="bestsell-title">
        <div class="fade">
            <div class="jesuisletitre" style="margin:auto;">
                <div class="thetitle">
                    <div class="title">
                        <h3>Les plus vendues</h3>
                    </div>
                    <div class="row">
                        <div class="large-8 medium-10 columns small-centered columns">
                            <div class="description">
                                <span>Découvrez nos dernières montres qui n'attendent que d'être à votre poignet</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <article>

        <!-- Single product -->
        <div class="singleproduct row owl-carousel" id="bestsellz">

            <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 4, 'meta_key' => 'total_sales', 'orderby' =>'meta_value_num' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product;
            ?>

            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <?php endif; ?>

            <div class="item" data-hash="<?php echo $product->id; ?>">
                <div class="ecritures">
                    <div class="ine">
                        <span class="titreproduit"><?php the_title(); ?></span>
                        <span class="marqueproduit">
                            <?php
                            $name = get_the_terms($product->ID, 'product_cat');
                            echo $name[0]->name;
                            ?>
                        </span>
                        <a href="<?php echo the_permalink(); ?>" class="decouvrir">Découvrir</a>
                    </div>
                </div>
                <div class="thumbnail-product">
                    <div class="overflowed">
                        <img src="<?php echo $image[0]; ?>" alt="">
                    </div>
                    <a href="<?php the_permalink(); ?>" class="link"></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>

        <div class="row">

            <?php
            $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 4, 'meta_key' => 'total_sales', 'orderby' =>'meta_value_num' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product;
            ?>

            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <?php endif; ?>

            <div class="large-3 medium-6 columns">
                <a href="#<?php echo $product->id; ?>" class="product-link non" title="<?php the_title(); ?>">
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

</section>

<!-- Collections
======================= -->

<section class="collections">
    <div class="row in-collections">
        <div class="small-6 columns"><div class="left"></div></div>
        <div class="small-6 columns"><div class="right"></div></div>
    </div>
    <div class="row channel-style">
        <div class="large-8 medium-10 columns small-centered">
            <div class="channel-texte">
                <div class="in">
                    <div class="inz">
                        <h3>Collections</h3>
                        <div style="margin-bottom:20px;">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard.</div>
                        <a href="#" class="custom-button">Découvrir toutes les collections</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- In the bloginfo
========================== -->
