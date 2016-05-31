<section class="inboutique">
    <div class="fade">
        <?php dynamic_sidebar( 'filtres-woocommerce' ); ?>
    </div>
</section>

<div class="filariane">
    <div class="fade">
        <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('');
        } ?>
    </div>
</div>

<?php /*<div class="brandz"></div>

<div class="lesinformations">

    <!-- TQT-->
    <div class="divone"></div>

    <!-- Informations complémentaires
    ==================================== -->
    <div class="divtwo">
        <div class="photosplus"></div>
        <div class="jesuisletitre">
            <div class="thetitle">
                <div class="title">
                    <h3>Informations complémentaires</h3>
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
            </div>
        </div>
        <div class="divtwoin"></div>
    </div>

    <!-- Reviews
    ================= -->
    <div class="divthree">
        <div class="divthreefade">
            <div class="jesuisletitre">
                <div class="thetitle">
                    <div class="title">
                        <h3>L'avis des clients</h3>
                    </div>
                    <div class="row">
                        <div class="small-4 small-centered columns" style="margin-bottom:50px;">
                            <div class="description">
                                <span>Ces personnes ont été satisfaites, et pourquoi pas vous ?</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hello -->

    <div class="yaprobleme">
        <div class="in">
            <div class="inzeed">
                <div class="title">
                    <h3>Produits relatifs</h3>
                </div>
                <div class="row">
                    <div class="small-4 small-centered columns">
                        <div class="description">
                            <span>Cet article vous a plus ? Celle-ci seraient également susceptibles de vous plaire, et même plus !</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Produits relatifs
    ====================-->

    <div class="produitsrelatifs">
        <div class="produitsrelatifsin"></div>
    </div>

    <!-- Probleme
    ==================== -->

</div> ?>
