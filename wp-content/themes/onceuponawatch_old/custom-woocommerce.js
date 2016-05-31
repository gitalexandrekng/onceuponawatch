// Pour le hover des images

$('.shopping li.product').hover(function(){
    $(this).find('img').css('transform', 'translatey(-10px)');
}, function(){
    $(this).find('img').css('transform', 'translatey(0)')
})

    $(document).ready(function(){
        if ( $('.shopping').length ) {
            $('.wrapper').remove();
            $('.inboutique').show().after($('.widget_price_filter'));
            $('.inboutique .fade').prepend($('.page-title'), '<hr>')
            $('.widget_product_categories, .widget_layered_nav').addClass('inlinefiltres');
            $('.widget_price_filter').css({display:'none', maxWidth:'1200px', margin:'auto auto 50px auto', listStyleType:'none', textAlign:'center'});
            $('li.product').each(function(){
                $(this).addClass('customproduit')
                $(this).hover(function(){
                    $(this).find('.add_to_cart_button').css({marginLeft:'0px', opacity:'1'})
                }, function(){
                    $(this).find('.add_to_cart_button').css({marginLeft:'-250px', opacity:'0'})
                })
            })
            $('li.product .star-rating').remove()
            $('li.product .add_to_cart_button').addClass('customadding')
            //$('#maybehide').hide();

            if ($('.product_title').length ) {
                $('#maybehide').show();

                $('h1').addClass('custom-title-produit');
                $('.inboutique').remove();
                $('p.price').css('text-align', 'left')
                $('.shopping').css({backgroundColor:'#FFF', minWidth:'100%', padding:'50px 0px',}).removeClass('small-12 large-12 columns');
                //$('button').css({borderRadius:'0px', height:'39px', background:'black'});
                $('button').addClass('hoveringadd');
                $('.woocommerce-product-rating').remove();

                $('h1').after($('.brandz').show().append($('.product_meta a')))
                $('.product_meta').hide()

                // S.E.O
                $('.custom-header').after($('.filariane').show());

                // bouton produits relatifs
                $('.add_to_cart_button').addClass('buttonrelatifs')

                // Pour afficher après la fiche produit
                $('div.row:eq(3)').after($('.lesinformations'))

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
