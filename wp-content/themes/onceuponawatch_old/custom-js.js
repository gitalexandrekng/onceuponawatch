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

	$('.appear').ready(function(){
		setTimeout(function(){
			$('.appear').removeClass('animated fadeInUp').css('opacity', '1');
		}, 2000);
	});

	$('.wrapper').css('height', $( window ).height() - 220);

	$('.annonces-container .item').css('height', $( window ).height());

	/*$('.annonces-container').hover(function(){
		$('.annonces-container .in').css('transform', 'scale(1.1)');
	}, function(){
		$('.annonces-container .in').css('transform', 'scale(1)')
	})*/

	$('a.add_to_cart_button').addClass('non');

	$('.star-rating').css('margin', 'auto');

	$('body').on('click', "a:not('.non')", function(){
		$('.appear').addClass('animated fadeOutUp');
	});

	$('.shopping a').addClass('non');
	$('.inboutique a').addClass('non');

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

	// Aperçu des articles du journal

	$('.inzer').hover(function(){
		$(this).find('.fadeyo').css('bottom', '0');
	}, function(){
		$(this).find('.fadeyo').css('bottom', '-250px');
	});

	// Image produit

	$('.product-link').hover(function(){
		$(this).find('img').css('transform', 'scale(1.1)');
		$(this).find('#left-disappear').css({opacity : "1", margin : "0px 0px 0px 0px"})
	}, function(){
		$(this).find('img').css('transform', 'scale(1)');
		$(this).find('#left-disappear').css({opacity : "0", margin : "0px 0px 0px -300px"})
	});
