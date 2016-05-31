if ($('.degageheader').length){

    // Remove
    $('.wrapper, .inboutique').remove();


    // AddClass
    $('.theboutique').addClass('fullwidth small-collapse');
    $('.cart .single_add_to_cart_button').addClass('custom-button hvr-bounce-to-top').removeClass('alt button');
    $('input#submit').removeClass('submit').removeAttr('id').addClass('custom-button-button')

    //price
    //$('.marque h5').append($('.posted_in a'));
    //$('.titprod').append($('.product_title'))
    $('.themarque h5').append($('.posted_in a'));
    $('.thetitre').append($('.product_title'))
    $('.describeme').append($('#tab-description p'))
    $('.addd').append($('.cart'))
    $('.photoz').append($('.thumbnails'))
    $('.leftz').append($('.attachment-shop_single'))
    $('.moreinfos .in').append($('.shop_attributes'))
    $('.clientsavis .in').append($('#reviews'))
    $('.prices').append($('.summary .price .amount'))
    $('.produitsautre .in').append($('ul.products'))

    //Remove
    $('div.type-product').remove();

    //effects
    $('.zoom').hover(function(){
        $(this).css('transform', 'scale(1.1)')
    }, function(){
        $(this).css('transform', 'scale(1)')
    })
}
