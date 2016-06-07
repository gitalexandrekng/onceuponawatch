$('#annonces-container').owlCarousel({
	loop:true,
	nav:true,
	items:1,
	animateOut: 'fadeOut',
	autoplay:true,
	loop:true,
	autoplayTimeout:5000,
	nav:false,
});

$('.promozions').owlCarousel({
	loop:true,
	items:1,
	animateOut: 'fadeOut',
	autoplay:true,
	loop:true,
	autoplayTimeout:5000,
	nav:false
})

$('#bestsellz').owlCarousel({
	loop:true,
	items:1,
	animateOut: 'fadeOut',
    animateIn: 'fadeIn',
	autoplay:false,
	loop:true,
	nav:false
})

$('.sloganz-slide').owlCarousel({
	animateOut: 'slideOutDown',
    animateIn: 'flipInX',
    items:1,
    margin:30,
    stagePadding:30,
    smartSpeed:450,
	autoplayTimeout:5000,
	loop:true,
	autoplay:true,
})

	$('.appear').ready(function(){
		setTimeout(function(){
			$('.appear').removeClass('animated fadeInUp').css('opacity', '1');
		}, 2000);
	});

	$('ul#menu-headmenu-2').append('<li><a href="#" class="ouvresmoi non"><i class="fa fa-search"></i></a></li>')
	$('.ouvresmoi').on('click', function(){
		$('.searchbar').toggle('slow')
	})

	//$('.wrapper').css('height', $( window ).height() - ($('.header-containz').innerHeight() + 20));

	$('#annonces-container').hover(function(){
		$(this).find('.inz').css('transform', 'scale(1.1)')
	}, function(){
		$(this).find('.inz').css('transform', 'scale(1)')
	})

	//$('.annonces-container .item').css('height', $( window ).height() / 2);
	$('#annonces-container .item').css('height', $( window ).height() / 2);

	$('a.add_to_cart_button').addClass('non');

	$('.star-rating').css('margin', 'auto');

	$('body').on('click', "a:not('.non')", function(){
		$('body').addClass('animated fadeOutUpBig');
	});

	$('.shopping a').addClass('non');
	$('.inboutique a').addClass('non');

	$('.wpcf7-submit').addClass('custom-button');
	$('.wpcf7-text').addClass('input-group-field')

	$('.login-submit #wp-submit').addClass('custom-button').removeClass('button-primary')

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

	$('.wc-forward').remove()

	$('.butz').hover(function(){
		$(this).find('.icon').css({height:'60px', width:'60px'})
		$(this).find('.zea').css({color:'#000', borderColor:'#e3e3e3'})
	}, function(){
		$(this).find('.icon').css({height:'50px', width:'50px'})
		$(this).find('.zea').css({color:'#646464', borderColor:'#FFF'})
	})

	// Li rechercher
	$('.fixed-navi #menu-headmenu-1').append('<li><a href="#" class="openSearchbutton non"><i class="fa fa-search"></i></a></li><li><a href="http://localhost:8888/onceuponawatch/panier/"><i class="fa fa-shopping-basket"></i>Panier</a></li>')

	// OPEN rechercher
	$(".openSearchbutton").on('click', function(e){
		e.preventDefault();
		$('.rechercherrr').toggle('slow')
	})

	// Aperçu des articles du journal

	$('.inzer').hover(function(){
		$(this).find('.fadeyo').css({
			opacity:'1',
		});

		$(this).find('.zertitle').css({
			opacity:'0',
			marginTop:'-100px',
		})
	}, function(){
		$(this).find('.fadeyo').css({
			opacity:'0',
		});

		$(this).find('.zertitle').css({
			opacity:'1',
			marginTop:'0',
		})
	});

	// Image produit

	$('.last-articles .product-link').hover(function(){
		$(this).find('img').css('transform', 'translatey(-10px)');
		$(this).find('#left-disappear').css({opacity : "1", margin : "0px 0px 0px 0px"})
	}, function(){
		$(this).find('img').css('transform', 'translatey(0)');
		$(this).find('#left-disappear').css({opacity : "0", margin : "0px 0px 0px -300px"})
	});

	$('.listingproduit .product-link').hover(function(){
		$(this).find('img').css('transform', 'translatey(-10px)');
		$(this).find('#left-disappear').css({opacity : "1", margin : "0px 0px 0px 0px"})
	}, function(){
		$(this).find('img').css('transform', 'translatey(0)');
		$(this).find('#left-disappear').css({opacity : "0", margin : "0px 0px 0px -300px"})
	});

	$('#featured-hero').remove()
	$('table.shop_table').removeClass('shop_table')

	//bestseel

	$('.singleproduct').hover(function(){
		$(this).find('.decouvrir').css({opacity:'1', marginLeft:'0px'})
		$(this).find('.overflowed').css('transform', 'scale(1.1)')
	}, function(){
		$(this).find('.decouvrir').css({opacity:'0', marginLeft:'-200px'})
		$(this).find('.overflowed').css('transform', 'scale(1)')
	})

	$('.bestseller .bestq').hover(function(){
		$(this).find('.btnmore').css({
			opacity:'1',
			bottom:'0',
		})
	}, function(){
		$(this).find('.btnmore').css({
			opacity:'0',
			bottom:'-50px',
		})
	})

	// custom button
	$('.custom-button, .custom-button-reverse').addClass('hvr-bounce-to-top')
