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
