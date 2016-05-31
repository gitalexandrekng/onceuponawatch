<?php
/*
Template Name: testboutique
*/
get_header(); ?>

<div class="insane" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>

    <div class="degageheader"></div>

    <div class="breadfond">
        <div class="fade">Hello > Hello > Hello</div>
    </div>

    <header class="headproduit">
        <div class="fade">
            <h2>Je suis une rolex</h2>
        </div>
    </header>

    <article class="incontent">
        <div class="radial"></div>
        <div class="prod">
            <div class="marque"><h5>Rolex</h5></div>
            <div class="titprod"><h2>Je suis une rolex</h2></div>
        </div>
        <div class="left">
            <img src="http://localhost:8888/onceuponawatch/wp-content/uploads/2016/05/montre4-1.jpg" alt="">
        </div>
        <div class="right">
            <div class="inno">
                <h4 class="titledescription">Des matériaux précieux</h4>
                <div class="describeme">L’esthétique des Oyster Perpetual leur confère une place à part, comme symboles d’un style classique et universel. Leurs dimensions, leurs fonctionnalités sont intemporelles, solidement ancrées dans l’esprit pionnier qui caractérise Rolex depuis ses origines. La simplicité de l’original.</div>
                <div class="price">Prix : 2372€</div>
                <div class="addd">
                    <div class="row small-collapse">
                        <div class="small-2 columns">
                            <input type="text">
                        </div>
                        <div class="small-10 columns">
                            <a href="" class="custom-button">Ajouter au panier</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <article class="photoz">
        <div class="row fullwidth small-collapse">
            <div class="large-3 medium-6 columns">
                <div class="inphoto" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/hands.jpg)"></div>
            </div>
            <div class="large-3 medium-6 columns">
                <div class="inphoto" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/header.jpg)"></div>
            </div>
            <div class="large-3 medium-6 columns">
                <div class="inphoto" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/visuel2.jpg)"></div>
            </div>
            <div class="large-3 medium-6 columns">
                <div class="inphoto" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/walpp.jpg)"></div>
            </div>
        </div>
    </article>

    <article class="moreinfos">
        <h4>Plus d'informations</h4>
    </article>

    <article class="photofull">
    </article>

    <article class="clientsavis">
        <div class="in">
            <h4>Avis clients</h4>
        </div>
    </article>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
