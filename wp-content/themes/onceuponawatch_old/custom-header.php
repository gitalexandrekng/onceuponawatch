<section class="custom-header">

    <!-- Montre -->
    <div class="containz" style="width:500px;height:500px;top:30px" id="maybehide">
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

    <!-- Informations de langues -->
    <div class="infos">
        <ul class="left-infos">
            <li><a href="#">FR</a></li>
            <li><a href="#">Besoin d'aide ?</a></li>
        </ul>
        <ul class="right-infos">
            <li><?php if (is_user_logged_in()){ echo '<a href="' . wp_logout_url( site_url( '/' ) ) .'">Se déconnecter</a>'; } else { ?><a href="#openLogin" class="non">S'identifier</a><?php } ?></li>
            <?php if (!is_user_logged_in()){ ?><li><a href="<?php echo bloginfo('home')?>/inscription">Inscription</a></li><?php } ?>
            <?php if (is_user_logged_in()){ ?><li><a href="<?php echo bloginfo('home')?>/mon-compte/">Mon compte</a></li><?php } ?>
            <li><a href="#openBasket" class="non openBasket">Panier</a></li>
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
            </div>
        </div>
    </div>

    <!-- Image -->
    <div class="wrapper">
        <div class="header-image-container">
            <div class="in">
                <div class="searchbar"><?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?></div>
                <div class="owl-carousel sloganz sloganz-slide">
                    <div class="item">Finesse</div>
                    <div class="item">Eminence</div>
                    <div class="item">Qualité</div>
                </div>
                <!--<div class="scrollsvpcontain">
                    <div class="scrollsvp">
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</section>

<!-- Woocommerce
================== -->

<?php include('custom-boutique.php'); ?>
