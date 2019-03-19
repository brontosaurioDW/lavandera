$(document).ready(function() {
	// Menu mobile
	$( ".burgerx" ).click(function() {
		$(this).toggleClass( "fa-times", "fa-bars" );
		$(this).toggleClass( "fa-bars", "fa-times" );
	});

	// Discografia
	Discografia();
});

$(window).on('resize', function(event) {
	event.preventDefault();

	// Discografia
	Discografia();
});

// Sticky header
$(window).scroll(function() {
    var sticky = $('header'),
        scroll = $(window).scrollTop();

    if (scroll >= 75) sticky.addClass('fixed');
	else sticky.removeClass('fixed');
});

// Discografia
function Discografia() {
	if ($(window).width() < 992) {
		$('.js-show-disc').each(function(index, el) {
			var discInfo 	= $(el).find('.disc-info-wrapper .disc-img');
			var discSongs 	= $(el).find('.disc-info-detail');
			var closeSongs 	= $(discSongs).find('.js-close-detail');

			$(discInfo).on('click',  function(event) {
				event.preventDefault();
				$(discSongs).slideToggle(500);
			});

			$(closeSongs).on('click',  function(event) {
				event.preventDefault();
				$(discSongs).slideUp(500);
			});
		});
	} else {
		$('.js-show-disc').each(function(index, el) {
			/*var discInfo 	= $(el).find('.disc-info-wrapper .disc-img');
			var discSongs 	= $(el).find('.disc-info-detail');
			var closeSongs 	= $(discSongs).find('.js-close-detail');

			$(discInfo).on('click',  function(event) {
				event.preventDefault();
				$(discSongs).slideToggle(500);
			});

			$(closeSongs).on('click',  function(event) {
				event.preventDefault();
				$(discSongs).slideUp(500);
			});*/
		});
	}
}