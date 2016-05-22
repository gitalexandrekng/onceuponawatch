<section class="custom-header">

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
                <div class="scrollsvpcontain">
                    <div class="scrollsvp"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Woocommerce
================== -->

<?php include('custom-boutique.php'); ?>
