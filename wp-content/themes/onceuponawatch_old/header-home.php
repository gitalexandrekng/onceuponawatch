<section class="custom-header">

    <!-- Informations de langues -->
    <div class="infos">
        <ul class="left-infos">
            <li><a href="#">FR</a></li>
            <li><a href="#">Besoin d'aide ?</a></li>
        </ul>
        <ul class="right-infos">
            <li><a href="#openLogin">S'identifier</a></li>
            <li><a href="#">Panier</a></li>
        </ul>
    </div>

    <!-- Titre -->
    <div id="title-header">
        <span class="in-title">Once upon a Watch</span>
        <span class="subtitle">A chaque montre son histoire</span>
    </div>

    <!-- Navigation -->
    <div class="navigation-header">
        <div class="navigation-container">
            <div class="in-navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'headmenu' ) ); ?>
            </div>
        </div>
    </div>

    <!-- Image -->
    <div class="wrapper">
        <div class="header-image-container">
            <div class="in">
                <div class="row">
                    <div class="small-6 columns end left-citation">
                        <span class="citation-header">« Le style est une manière de dire qui vous êtes sans parler. »</span>
                        <span class="auteur-header">- Rachel zoe</span>
                        <div class="row">
                            <div class="small-6 columns">
                                <a href="#" class="custom-button" style="width:100%">Toutes les montres</a>
                            </div>
                            <div class="small-6 columns">
                                <a href="#" class="custom-button-reverse-white" id="reverse" style="width:100%">Collections</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searchbar"><?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- Promotions
=================== -->

<section class="promotions-container">
    <div class="promotions">
        <!--<div class="indiv indiv-left"><strong>-10%</strong> sur les incontournables de l'été <a href="#" class="dismoi">En profiter</a></div>-->
        <a href="#" class="indiv indiv-left"><strong>-10%</strong> sur les incontournables de l'été</a>
        <a href="#" class="indiv indiv-middle"><strong>-20%</strong> sur l'achat d'un bracelet et d'une montre</a>
        <a href="#" class="indiv indiv-right"><strong>Livraison et retours gratuits</strong></a>
    </div>
</section>

<!-- Derniers articles
============================= -->

<section class="last-articles">

    <div class="title">
        <h3>Derniers articles</h3>
    </div>
    <div class="row">
        <div class="small-4 small-centered columns">
            <div class="description">
                <span>Découvrez nos dernières montres qui n'attendent que d'être à votre poignet</span>
                <hr>
                <span class="citation">« La différence entre le style et la mode est la qualité.»</span>
            </div>
        </div>
    </div>

    <article>
        <div class="row">
            <div class="small-3 columns">
                <a href="#" class="product-link">
                    <div class="image-product"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/watch-last.jpg" alt=""></div>
                    <span class="article-subtitle">Oyster perpetual</span>
                    <span class="article-title">Oyster perpetual</span>
                    <button class="custom-button-yo" id="left-disappear">Découvrir</button>
                </a>
            </div>
            <div class="small-3 columns">
                <a href="#" class="product-link">
                    <div class="image-product"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/watch-last.jpg" alt=""></div>
                    <span class="article-subtitle">Oyster perpetual</span>
                    <span class="article-title">Oyster perpetual</span>
                    <button class="custom-button-yo" id="left-disappear">Découvrir</button>
                </a>
            </div>
            <div class="small-3 columns">
                <a href="#" class="product-link">
                    <div class="image-product"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/watch-last.jpg" alt=""></div>
                    <span class="article-subtitle">Oyster perpetual</span>
                    <span class="article-title">Oyster perpetual</span>
                    <button class="custom-button-yo" id="left-disappear">Découvrir</button>
                </a>
            </div>
            <div class="small-3 columns">
                <a href="#" class="product-link">
                    <div class="image-product"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/watch-last.jpg" alt=""></div>
                    <span class="article-subtitle">Oyster perpetual</span>
                    <span class="article-title">Oyster perpetual</span>
                    <button class="custom-button-yo" id="left-disappear">Découvrir</button>
                </a>
            </div>
        </div>
    </article>

    <a href="#" class="custom-button-reverse" style="margin-top:30px;">Tout découvrir</a>

</section>

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
            <div class="in" style="background-image:url(<?php echo $image[0]; ?>)">
                <div class="texte">
                    <div class="inset">
                        <h3><?php the_title(); ?></h3>
                        <span><?php the_excerpt(); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <?php endwhile;?>
    </div>

</section>

<!-- Les plus vendus
=========================== -->

<section class="bestseller">
    <div class="title">
        <h3>Les plus vendus</h3>
    </div>
    <div class="row">
        <div class="small-4 small-centered columns">
            <div class="description">
                <span>Découvrez nos dernières montres qui n'attendent que d'être à votre poignet</span>
                <hr>
                <span class="citation">« La différence entre le style et la mode est la qualité.»</span>
            </div>
        </div>
    </div>

    <article>
        <div class="row">
            <div class="small-3 columns">
                <div class="article-in">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/watch-last.jpg" alt="">
                    <span class="article-subtitle">Oyster perpetual</span>
                    <span class="article-title">Oyster perpetual</span>
                    <a href="#" class="custom-button-reverse" id="yesplease">Découvrir</a>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="article-in">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/watch-last.jpg" alt="">
                    <span class="article-subtitle">Oyster perpetual</span>
                    <span class="article-title">Oyster perpetual</span>
                    <a href="#" class="custom-button-reverse" id="yesplease">Découvrir</a>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="article-in">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/watch-last.jpg" alt="">
                    <span class="article-subtitle">Oyster perpetual</span>
                    <span class="article-title">Oyster perpetual</span>
                    <a href="#" class="custom-button-reverse" id="yesplease">Découvrir</a>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="article-in">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/watch-last.jpg" alt="">
                    <span class="article-subtitle">Oyster perpetual</span>
                    <span class="article-title">Oyster perpetual</span>
                    <a href="#" class="custom-button-reverse" id="yesplease">Découvrir</a>
                </div>
            </div>
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
        <div class="small-4 columns small-centered">
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
