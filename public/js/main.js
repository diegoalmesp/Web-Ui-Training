/*
 * Front JS files
 */

$(function() {
	var articulo = $('.d-articulo-portada h4'),
		title = $('.title');

	/*
	 * This draws a green asterisk at the
	 * right of the article title
	 */
	$(articulo).mouseenter(function() {
		$(this).append('<span class="aster">*</span>');
	})
	$(articulo).mouseleave(function() {
		$('.aster').remove();
	});

	/*
	 * This fades Out and In the main title
	 * at the left of the navbar
	 */
	
	$(title).mouseenter(function() {
		$(this).fadeOut(1000);
	})
	$('.header-container').mouseleave(function() {
		$(title).fadeIn(500);
	});

	/*
	 * Drop the shadows of the articles
	 * on mouse over and restore them on
	 * on mouse out
	 */
	$('section.d-articulo-portada').mouseenter(function() {
		$(this).removeClass('sombra');
	})
	$('.d-articulo-portada').mouseleave(function() {
		$(this).addClass('sombra');
	});

	/*
	 * Animation test
	 */
	$('.d-articulo-portada').mouseenter(function() {
		$(this).find('h4').css('position', 'fixed').animate({
			top: '10px',
			left: '30%',
			fontSize: '4em',
		}).addClass('sombra-y-bordes');
	})
	$('.d-articulo-portada').mouseleave(function() {
		$(this)
			.find('h4')
			.css('position', 'static')
			.css('font-size', '1em')
			.removeClass('sombra-y-bordes')
	});
});