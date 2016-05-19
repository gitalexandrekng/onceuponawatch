// Pour le hover des images

$('.shopping li.product').on('mouseenter', function(){
    $(this).find('img').css('transform', 'scale(1.1)');
})

$('.shopping li.product').on('mouseleave', function(){
    $(this).find('img').css('transform', 'scale(1)');
})

/*$(document).ready(function() {
    if ($('.shopping').length){
        alert('Sur le shop !');
        $("li#premier ~ li").show();
    }*/

    $(document).ready(function(){
        if ( $('.shopping').length ) {
            $('.wrapper').remove();
            $('.inboutique').show().after($('.widget_price_filter'));
            $('.widget_product_categories, .widget_layered_nav').addClass('inlinefiltres');
            $('.widget_price_filter').css({maxWidth:'1200px', margin:'auto auto 50px auto', listStyleType:'none', textAlign:'center'});
            $('.ui-widget-header').css('background-color', '#d7eefa');
            $('.ui-slider-range').css('background-color', 'blue');

            if ($('.product_title').length ) {
                //$('.inboutique').after($('h1'));
                $('h1').addClass('custom-title-produit');
                $('.tabs li').addClass('custom-li').removeClass('additional_information_tab description_tab reviews_tab');
                $('h2').addClass('custom-h2');
                //$('img.wp-post-image').after($('h1'));
                $('.inboutique').remove();
                //$( "div.row:first" ).removeClass('row');
                $('p.price').css('text-align', 'left')
                $('.shopping').css({backgroundColor:'#FFF', minWidth:'100%', padding:'20px',}).removeClass('small-12 large-12 columns');
                $('button').removeClass('').css({borderRadius:'0px', height:'39px'});
                //$('.cart').after($('.woocommerce-product-rating'))
                $('.woocommerce-product-rating').remove();
                //$('.cart').after($('.woocommerce-tabs'))
                $('#tab-description h2').replaceWith($('.descriptionduproduit').show());
                $('#tab-additional_information h2').replaceWith($('.informationscomplementaires').show());
            }

            // Custom button $('.price_slider_amount .button').addClass('custom-button-reverse').removeClass('button');
            //$('.inboutique').after($('.widget_price_filter'));
            //$('.widget_product_categories').before('<div class="inlinefiltres">');
            //$('.widget_layered_nav').after('</div>');
        }
    })
