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
            $('.ui-slider-range').css('background-color', 'blue')

            //$('.inboutique').after($('.widget_price_filter'));
            //$('.widget_product_categories').before('<div class="inlinefiltres">');
            //$('.widget_layered_nav').after('</div>');
        }
    })
