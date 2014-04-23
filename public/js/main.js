/*
 * Diego Almirón
*/

$(function(){
	$('.d-articulo-portada h4').mouseenter(function(){
		$(this).append('<span class="aster">*</span>');
	})
	$('.d-articulo-portada h4').mouseleave(function(){
		$('.aster').remove();
	});
});
