/*
 * Diego Almirón
 */

$(function() {
	$('.d-articulo-portada h4').mouseenter(function() {
		$(this).append('<span class="aster">*</span>');
	})
	$('.d-articulo-portada h4').mouseleave(function() {
		$('.aster').remove();
	});

	$('ul li:has(ul)').hover(function() {
		$(this).find('.d-menu-escondido').css('display', 'block');
	},
	function() {
		$(this).find('.d-menu-escondido').css('display', 'none');
	});
});

// $(function() {
// 	$('.d-menu-escondido').hover( // cada ul que tenga un li con un ul de hijo
// 		function(e)
// 		{
// 			$(this).find('ul').css({display: "block"});
// 		},
// 		function(e)
// 		{
// 			$(this).find('ul').css({display: "none"});
// 		}
// 	);
// });