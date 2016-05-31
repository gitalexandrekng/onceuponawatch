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
        <div class="right"></div>
    </article>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
