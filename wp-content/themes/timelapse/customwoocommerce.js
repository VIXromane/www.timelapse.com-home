// var linkproduct = $( ".product a" ).attr( "href" );

// $('.add_to_cart_button').addClass('custombutton');
// $('.product').append($('.fondgris'));
// $('.product').append('<a class="linkproduct" href="' + linkproduct + '"></a>')

// $('.add_to_cart_button').addClass('etat-dispo');

$('.produit').hover(function(){
	$(this).find('.custombutton').css('opacity', '1');
	$(this).find('.ajax_add_to_cart').css('opacity', '1');
	$(this).find('.fondgris-home').css('opacity', '1');	
	$(this).find('h3').css('opacity', '0');
	$(this).find('.price').css('opacity', '0');
	$(this).find('.mycat').css('opacity', '0');
}, function(){
	$(this).find('.custombutton').css('opacity', '0');
	$(this).find('.ajax_add_to_cart').css('opacity', '0');

	$(this).find('.fondgris-home').css('opacity', '0');
	$(this).find('h3').css('opacity', '<1></1>');
	$(this).find('.price').css('opacity', '<1></1>');
	$(this).find('.mycat').css('opacity', '<1></1>');

})

$('.link-add-product').on('click', function(e){

})

$('.bouton-add').on('click', function(){
	$(this).find('.produitajoute').show().addClass('animated fadeIn')
})


// $('li').hover(function(){
// 	$(this).find('.custombutton').css('opacity', '1');
// 	$(this).find('.fondgris-home').css('opacity', '1');	
// 	$(this).find('h3').css('opacity', '0');
// 	$(this).find('.price').css('opacity', '0');
// 	$(this).find('.mycat').css('opacity', '0');
// }, function(){
// 	$(this).find('.custombutton').css('opacity', '0');
// 	$(this).find('.fondgris-home').css('opacity', '0');
// 	$(this).find('h3').css('opacity', '<1></1>');
// 	$(this).find('.price').css('opacity', '<1></1>');
// 	$(this).find('.mycat').css('opacity', '<1></1>');

// })