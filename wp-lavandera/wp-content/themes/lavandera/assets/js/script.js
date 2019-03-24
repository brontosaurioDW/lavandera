$(document).ready(function() {
	// Menu mobile
	$( ".burgerx" ).click(function() {
		$(this).toggleClass( "fa-times", "fa-bars" );
		$(this).toggleClass( "fa-bars", "fa-times" );
	});

	// Discografia
	Discografia();

	// Video Biografia
	VideoBiografia();

	// Media
	Media();
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
		$('.disc-list .js-show-disc').first().addClass('active');

		$('.js-show-disc').each(function(index, el) {
			$(el).on('click', function() {
				$('.js-show-disc').removeClass('active');
				$(this).addClass('active');

				var idDelClick = $(this).data('disc-id');

				$('.js-preview-disc').each(function(index, el) {
					var idDeLaSidebar = $(el).data('disc-id');		
					var elDeLaSidebar = $(el);			

					if (idDeLaSidebar == idDelClick) {	
						$('.js-preview-disc').hide();	

						$(elDeLaSidebar).fadeIn('fast');
					}
				});
			});
		});
	}
}

// Biografía
function VideoBiografia() {
	var videoPlay	 	= $('.js-play');
	var videoBiografia 	= $('.js-video-bio');
	var videoIframe	 	= $(videoBiografia).find('iframe');

	$(videoPlay).one('click', function(event) {
		event.preventDefault();
		
		$(this).hide();
		$(videoBiografia).show();

		var symbol = $(videoIframe)[0].src.indexOf("?") > -1 ? "&" : "?";
		$(videoIframe)[0].src += symbol + "autoplay=1";
	});
}

// Media
function Media() {
	if ($(window).width() > 991) {
		$('.media-list > li').first().find('.img-wrapper').addClass('active');

		$('.media-list > li .img-wrapper').each(function(index, el) {
			$(el).on('click', function(e) {
				e.preventDefault();
				$('.media-list > li .img-wrapper').removeClass('active');
				$(this).addClass('active');

				var idDelClick = $(this).data('id-foto');			
				console.log(idDelClick);

				$('.js-preview-foto').each(function(index, el) {
					var idDeLaSidebar = $(el).data('id-foto');		
					var elDeLaSidebar = $(el);			

					if (idDeLaSidebar == idDelClick) {	
						$('.js-preview-foto').hide();	
						console.log(idDeLaSidebar);

						$(elDeLaSidebar).fadeIn('fast');
					}
				});
			});
		});
	}
}