// Pour le hover des images

$('.shopping li.product').on('mouseenter', function(){
    $(this).find('img').css('transform', 'scale(1.1)');
})

$('.shopping li.product').on('mouseleave', function(){
    $(this).find('img').css('transform', 'scale(1)');
})

    $(document).ready(function(){
        if ( $('.shopping').length ) {
            $('.wrapper').remove();
            $('.inboutique').show().after($('.widget_price_filter'));
            $('.widget_product_categories, .widget_layered_nav').addClass('inlinefiltres');
            $('.widget_price_filter').css({maxWidth:'1200px', margin:'auto auto 50px auto', listStyleType:'none', textAlign:'center'});

            if ($('.product_title').length ) {
                $('h1').addClass('custom-title-produit');
                $('.inboutique').remove();
                $('p.price').css('text-align', 'left')
                $('.shopping').css({backgroundColor:'#FFF', minWidth:'100%', padding:'20px',}).removeClass('small-12 large-12 columns');
                $('button').removeClass('').css({borderRadius:'0px', height:'39px'});
                $('.woocommerce-product-rating').remove();

                // Pour afficher après la fiche produit
                $("div.row:eq(3)").after($('.lesinformations'))

                // Montrer les blocs

                $('.divtwo').show(function(){
                    $('.divtwoin').append($('#tab-additional_information .shop_attributes'));
                })

                $('.yaprobleme').show()

                $('.divthree').show(function(){
                    $('.divthreefade').append($('#reviews'));
                    $('a').addClass('non');
                    $('.comment-reply-title').css('margin-top', '50px')
                })
                $('.divthree h2').remove();
                $('.woocommerce-tabs').hide();

                $('.cart').after($('#tab-description p').css('text-align', 'left'))

                $('.photosplus').append($('.thumbnails'));

                if($('.related').length){
                    $('.produitsrelatifs').show(function(){
                        $('h2').remove();
                        $('.produitsrelatifsin').append($('.related'))
                    })
                }
            }
        }

        if( $('.myaccount_user').length){
            $('header.title').after($("a.edit").css({display:'block', width:'100%', textAlign: 'center'}))
        }

        if( $('.removeheader').length){
            $('.wrapper').remove();
        }
    })
