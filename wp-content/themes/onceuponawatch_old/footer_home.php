<!-- Excellence bandeau
======================= -->

<section class="excellence-band">
    <div class="fade">
        <div class="thetitle">
            <div class="title">
                <h3>Nos marques</h3>
            </div>
        </div>
    </div>
</section>

<!-- Video playing
============================ -->

<div class="intransparent">
    <div class="hellohello">
        <div class="text-center">
            <img style="opacity:0.9" src="<?php echo get_stylesheet_directory_uri()?>/text.svg" alt="" />
        </div>
    </div>
    <div class="intransparent-after">
        <div style="width:50%;margin:auto;opacity:0.8;font-size:118px;font-family:'Montserrat'">
            ONCE UPON<br>A WATCH
        </div>
    </div>
</div>

<!-- Another section
============================= -->

<section class="another">

    <div class="jesuisletitre">
        <div class="containz">
            <article class="clock">
                <div class="seconds-container">
                    <div class="seconds"></div>
                </div>
                <div class="circle-container">
                    <div class="circle-one"></div>
                    <div class="circle-two"></div>
                </div>
                <div class="circle-petit-container">
                    <div class="circle-petit-one"></div>
                </div>
                <div class="circle-petit-petit-container"></div>
            </article>
        </div>
        <div class="thetitle">
            <div class="title">
                <h3>Avis clients</h3>
            </div>

            <div class="row">
                <div class="small-4 small-centered columns">
                    <div class="description">
                        <span>Ils nous font confiance et le font savoir !.<br>Donnez vous aussi votre avis</span>
                        <hr>
                        <span class="citation">« La différence entre le style et la mode est la qualité.»</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:30px;">
        <div class="small-4 columns">
            <div class="photo"><img src="http://images.j-14.com/uploads/posts/image/78599/camila-cabello-ikwydls.jpg" alt=""></div>
            <div class="thename">Cara Delevingne</div>
            <div class="theavis">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles.</p>
                <!--<p style="text-align:right"><a href="#">http://caradelevingne.com</a></p>-->
            </div>
        </div>
        <div class="small-4 columns">
            <div class="photo"><img src="http://images.j-14.com/uploads/posts/image/78599/camila-cabello-ikwydls.jpg" alt=""></div>
            <div class="thename">Camila Cabillo</div>
            <div class="theavis">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles.</p>
                <!--<p style="text-align:right"><a href="#">http://caradelevingne.com</a></p>-->
            </div>
        </div>
        <div class="small-4 columns">
            <div class="photo"><img src="http://www.rapghetto.com/uploads/151249/sx/nekfeu-mal-aime_48088.jpg" alt=""></div>
            <div class="thename">Nekfeu</div>
            <div class="theavis">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles.</p>
                <!--<p style="text-align:right"><a href="#">http://caradelevingne.com</a></p>-->
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:30px;text-align:center;" id="jedonnemonavis">
        <div class="small-6 small-centered columns">
            <h5>Donnez vous aussi votre avis !</h5>
            <?php if (is_user_logged_in()){ ?>
                <form action="#">
                    <textarea name="" id="avisclients"></textarea>
                    <div class="text-center"><input type="submit" class="custom-button-reverse" value="Envoyer"></div>
                </form>
            <?php } else { ?>
                Il faut être connecté pour pouvoir donner votre avis.
            <?php } ?>
        </div>
    </div>
</section>

<!-- newsletter
======================== -->

<section class="newsletter">

    <div class="text-center">
        <h3>Restez informés</h3>
    </div>
    <div class="row" style="text-align:center;">
        <div class="small-4 small-centered columns">
            <div class="description">
                <span>Ca serait dommage de rater la montre de votre vie, alors inscrivez votre adresse e-mail pour vous tenir informés.</span>
                <hr>
                <span class="citation">« La différence entre le style et la mode est la qualité.»</span>
            </div>
        </div>
    </div>

    <!-- nletter -->
    <div class="row">
        <div class="small-6 small-centered columns">
            <form action="" id="form-newsletter">
                <input type="text" id="newsletter" placeholder="Votre e-mail">
                <input type="submit" id="newsletter-submit" value="S'inscrire">
            </form>
        </div>
    </div>

    <!-- Reseraux socuix -->
    <div class="row">
        <div class="small-6 small-centered columns">
            <div class="text-center">
                <ul class="socialmedia" style="margin-top:30px;">
                    <li><a href="#"><i class="fa fa-facebook fa-3x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram fa-3x"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest fa-3x"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Avis clients
========================= -->

<section class="footer-infos">

    <div class="row">
        <div class="small-6 columns">
            <div class="reassurance">
                <div class="row">
                    <div class="small-12 columns">
                        <div class="row">
                            <div class="small-3 columns">
                                <div class="theimage">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/delivery.svg" alt="">
                                    <span>Livraison<br>rapide</span>
                                </div>
                            </div>
                            <div class="small-3 columns">
                                <div class="theimage">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/phone.svg" alt="">
                                    <span>Assistance<br>24h/24</span>
                                </div>
                            </div>
                            <div class="small-3 columns">
                                <div class="theimage">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/gift.svg" alt="">
                                    <span>Cadeau<br>offert</span>
                                </div>
                            </div>
                            <div class="small-3 columns">
                                <div class="theimage">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/free.svg" alt="">
                                    <span>Retour<br>gratuit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="payments">
                <div class="text-center">
                    <h4>Paiement sécurisé</h4>
                    <ul>
                        <li><img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/payments/1.jpg" alt=""></li>
                        <li><img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/payments/2.jpg" alt=""></li>
                        <li><img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/payments/3.jpg" alt=""></li>
                        <li><img src="<?php echo get_stylesheet_directory_uri() ?>/images/icons/payments/4.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="small-12 columns">
            <div class="text-center">
                <ul class="inzoo">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">C.G.U</a></li>
                    <li><a href="#">Livraisons et remboursements</a></li>
                    <li><a href="#">Confidentialité et cookies</a></li>
                    <li><a href="#">À propos</a></li>
                </ul>
            </div>
        </div>
    </div>

</section>

<!-- Le footer
=========================== -->

<section class="footer-tqt">
    <div class="row">
        <div class="small-6 small-centered columns">
            ©Copyright 2016 - Once upon a watch <br>
            Created by Alexandre Kong - <a href="#">Mentions légales</a>
        </div>
    </div>
</section>
