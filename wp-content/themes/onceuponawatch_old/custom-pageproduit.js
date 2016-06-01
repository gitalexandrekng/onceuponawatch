if ($('.degageheader').length){

    // Remove
    $('.wrapper, .inboutique').remove();


    // AddClass
    $('.theboutique').addClass('fullwidth small-collapse');
    $('.cart .single_add_to_cart_button').addClass('custom-button hvr-bounce-to-top').removeClass('alt button');
    $('input#submit').removeClass('submit').removeAttr('id').addClass('custom-button-button')
    $('.shop_attributes').addClass('row')

    //price
    $('.themarque h5').append($('.posted_in a'));
    $('.thetitre').append($('.product_title'))
    $('.describeme').append($('#tab-description p'))
    $('.addd').append($('.cart'))
    $('.photoz').append($('.thumbnails'))
    $('.leftz').append($('.attachment-shop_single'))
    $('.moreinfos .in').append($('.shop_attributes'))
    $('.clientsavis .in').append($('#reviews'))
    $('.prices a').prepend($('.summary .price .amount'))
    $('.produitsautre .in').append($('ul.products'))

    $('.prices a').on('click', function(e){
        e.preventDefault()
        $('.tva').toggle('slow')
    })

    //Remove
    $('div.type-product').remove();

    //effects
    $('.zoom').hover(function(){
        $(this).css('transform', 'scale(1.1)')
    }, function(){
        $(this).css('transform', 'scale(1)')
    })

    $('.prodrela').hover(function(){
        $(this).find('.discover').css({opacity:'1', bottom:'0'})
        $(this).find('.photoproduit').css({opacity:'0.6'})
        $(this).find('.titre').css({opacity:'1', top:'30px'})
    }, function(){
        $(this).find('.discover').css({opacity:'0', bottom:'-50px'})
        $(this).find('.photoproduit').css({opacity:'1'})
        $(this).find('.titre').css({opacity:'0', top:'0'})
    })
}
