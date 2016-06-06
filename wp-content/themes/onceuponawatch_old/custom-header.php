<section class="custom-header">

    <!-- menu burger -->
    <div class="burgermenu">
        <a href="#openMenu" class="non"><i class="fa fa-bars fa-lg"></i>Menu</a>
    </div>

    <!-- Montre -->
    <div class="containz contzresp" id="maybehide" style="display:none;">
        <article class="clock">
            <div class="seconds-containerz">
                <div class="secondsz"></div>
            </div>
            <div class="circle-container">
                <div class="circle-one"></div>
                <div class="circle-two"></div>
                <div class="circle-three"></div>
                <div class="circle-four"></div>
            </div>
            <div class="circle-petit-container">
                <div class="circle-petit-one"></div>
                <div class="circle-petit-two"></div>
                <div class="circle-petit-three"></div>
            </div>
            <div class="circle-petit-petit-container"></div>
        </article>
    </div>

    <!-- HEADER containz
    ========================= -->
    <div class="header-containz">

        <!-- Informations de langues -->
        <div class="infos">
            <ul class="left-infos">
                <li><a href="#">FR</a></li>
                <li><a href="#">Besoin d'aide ?</a></li>
            </ul>
            <ul class="right-infos">
                <li><?php if (is_user_logged_in()){ echo '<a href="' . wp_logout_url( site_url( '/' ) ) .'"><i class="fa fa-sign-out"></i>Se déconnecter</a>'; } else { ?><a href="#openLogin" class="non"><i class="fa fa-sign-in"></i>S'identifier</a><?php } ?></li>
                <?php if (!is_user_logged_in()){ ?><li><a href="<?php echo bloginfo('home')?>/inscription"><i class="fa fa-check"></i>Inscription</a></li><?php } ?>
                <?php if (is_user_logged_in()){ ?><li><a href="<?php echo bloginfo('home')?>/mon-compte/"><i class="fa fa-user"></i>Mon compte</a></li><?php } ?>
                <li><a href="<?php echo WC()->cart->get_cart_url(); ?>" class="non openBasket"><i class="fa fa-shopping-basket"></i>Panier <span class="total"><?php echo sprintf (_n( '(%d)', '(%d)', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></span></a></li>
            </ul>
        </div>

        <!-- Titre -->
        <div id="title-header">
            <span class="in-title"><a href="<?php echo bloginfo('home'); ?>">Once upon a Watch</a></span>
            <span class="subtitle">A chaque montre son histoire</span>
        </div>

        <!-- Navigation -->
        <div class="navigation-header">
            <div class="navigation-container">
                <div class="in-navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'headmenu' ) ); ?>

                    <!-- SEARCH BAR
                    ====================== -->
                    <div class="searchbar">
                        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Image -->
    <div class="wrapper">
        <div class="header-image-container">

            <div class="in">
                <div class="zzzer">

                    <!-- ANNONCES -->
                    <div class="annonces">
                        <div id="annonces-container" class="owl-carousel owl-theme">

                            <?php
                            $args = array('post_type' => 'annonces');
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();
                            ?>

                            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                            	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                            <?php endif; ?>

                            <div class="item">
                                <div class="inz" style="background-image:url(<?php echo $image[0]; ?>)"></div>
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
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
