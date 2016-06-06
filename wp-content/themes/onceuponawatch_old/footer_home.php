<!-- Excellence bandeau
======================= -->

<section class="excellence-band" style="display:none;">
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
        <div id="ouww">
            ONCE UPON<br>A WATCH
        </div>
    </div>
</div>

<!-- Another section
============================= -->

<section class="another">

    <div class="jesuisletitre">
        <div class="thetitle">
            <div class="title">
                <h3>Avis clients</h3>
            </div>

            <div class="row">
                <div class="large-8 medium-10 small-centered columns">
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
        <div class="large-4 columns">
            <div class="photo"><img src="http://images.j-14.com/uploads/posts/image/78599/camila-cabello-ikwydls.jpg" alt=""></div>
            <div class="thename">Cara Delevingne</div>
            <div class="theavis">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles.</p>
                <!--<p style="text-align:right"><a href="#">http://caradelevingne.com</a></p>-->
            </div>
        </div>
        <div class="large-4 columns">
            <div class="photo"><img src="http://images.j-14.com/uploads/posts/image/78599/camila-cabello-ikwydls.jpg" alt=""></div>
            <div class="thename">Camila Cabillo</div>
            <div class="theavis">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles.</p>
                <!--<p style="text-align:right"><a href="#">http://caradelevingne.com</a></p>-->
            </div>
        </div>
        <div class="large-4 columns">
            <div class="photo"><img src="http://images.j-14.com/uploads/posts/image/78599/camila-cabello-ikwydls.jpg" alt=""></div>
            <div class="thename">Nekfeu</div>
            <div class="theavis">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles.</p>
                <!--<p style="text-align:right"><a href="#">http://caradelevingne.com</a></p>-->
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:30px;text-align:center;" id="jedonnemonavis">
        <div class="large-6 small-10 small-centered columns">
            <h5>Donnez vous aussi votre avis !</h5>
            <?php if (is_user_logged_in()){ ?>
                <form action="#">
                    <textarea name="" id="avisclients"></textarea>
                    <div class="text-center"><input type="submit" class="custom-button" value="Envoyer"></div>
                </form>
            <?php } else { ?>
                Il faut être connecté pour pouvoir donner votre avis.
            <?php } ?>
        </div>
    </div>
</section>
