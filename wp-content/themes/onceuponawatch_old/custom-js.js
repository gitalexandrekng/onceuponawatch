$('.annonces-container').owlCarousel({
	loop:true,
	nav:true,
	items:1,
	animateOut: 'fadeOut',
	autoplay:true,
	loop:true,
	autoplayTimeout:5000,
	nav:false
})

$('.promozions').owlCarousel({
	loop:true,
	nav:true,
	items:1,
	animateOut: 'fadeOut',
	autoplay:true,
	loop:true,
	autoplayTimeout:5000,
	nav:false
})

$('.sloganz-slide').owlCarousel({
	animateOut: 'slideOutDown',
    animateIn: 'flipInX',
    items:1,
    margin:30,
    stagePadding:30,
    smartSpeed:450,
	autoplayTimeout:2500,
	loop:true,
	autoplay:true,
})

	$('.appear').ready(function(){
		setTimeout(function(){
			$('.appear').removeClass('animated fadeInUp').css('opacity', '1');
		}, 2000);
	});

	$('.wrapper').css('height', $( window ).height() - ($('.header-containz').innerHeight() + 20));

	$('.annonces-container .item').css('height', $( window ).height() / 2);

	$('a.add_to_cart_button').addClass('non');

	$('.star-rating').css('margin', 'auto');

	$('body').on('click', "a:not('.non')", function(){
		$('.appear').addClass('animated fadeOutUpBig');
	});

	$('.shopping a').addClass('non');
	$('.inboutique a').addClass('non');

	$('.wpcf7-submit').addClass('custom-button');
	$('.wpcf7-text').addClass('input-group-field')

	$('.login-submit #wp-submit').addClass('custom-button-reverse');

	var lanavigation = $(".navigation-header");

	lanavigation.on('inview', function(event, isInView) {
		if (isInView) {
			$('.fixed-navi').css({opacity : "0", top : "-100px"})
		} else {
			$('.fixed-navi').css({opacity : "1", top : "0px"});
		}
	});

	$(".intransparent").on('inview', function(event, isInView) {
		if (isInView) {
			$('.video-bg').show();
		} else {
			$('.video-bg').hide();
		}
	});

	// Li rechercher
	$('.fixed-navi #menu-headmenu-1').append('<li><a href="#" class="openSearchbutton non"><i class="fa fa-search"></i></a></li><li><a href="#openBasket"><i class="fa fa-shopping-basket"></i>Panier</a></li>')

	// OPEN rechercher
	$(".openSearchbutton").on('click', function(e){
		e.preventDefault();
		$('.rechercherrr').toggle('slow')
	})

	// Aperçu des articles du journal

	$('.inzer').hover(function(){
		$(this).find('.fadeyo').css('bottom', '0');
	}, function(){
		$(this).find('.fadeyo').css('bottom', '-250px');
	});

	// Image produit

	$('.product-link').hover(function(){
		$(this).find('img').css('transform', 'translatey(-10px)');
		$(this).find('#left-disappear').css({opacity : "1", margin : "0px 0px 0px 0px"})
	}, function(){
		$(this).find('img').css('transform', 'translatey(0)');
		$(this).find('#left-disappear').css({opacity : "0", margin : "0px 0px 0px -300px"})
	});
