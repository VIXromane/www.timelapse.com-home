var linkproduct = $( ".product a" ).attr( "href" );

$('.add_to_cart_button').addClass('custombutton');
$('.product').append($('.fondgris'));
$('.product').append('<a class="linkproduct" href="' + linkproduct + '"></a>')

$('.product').hover(function(){
	$(this).find('.custombutton').css('opacity', '1');
	$(this).find('.fondgris').css('opacity', '1');
	$(this).find('h3').css('opacity', '0');
}, function(){
	$(this).find('.custombutton').css('opacity', '0');
	$(this).find('.fondgris').css('opacity', '0');
	$(this).find('h3').css('opacity', '<1></1>');
})