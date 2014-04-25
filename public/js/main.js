/*
 * Front JS files
 */

$(function() {
	$('.d-articulo-portada h4').mouseenter(function() {
		$(this).append('<span class="aster">*</span>');
	})
	$('.d-articulo-portada h4').mouseleave(function() {
		$('.aster').remove();
	});

	// $('ul li:has(ul)').hover(function() {
	// 	$(this).find('ul').css('display', 'block');
	// },
	// function() {
	// 	$(this).find('ul').css('display', 'none');
	// });
});