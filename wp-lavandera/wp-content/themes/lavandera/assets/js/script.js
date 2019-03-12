$(document).ready(function() {
	// Menu mobile
	$( ".burgerx" ).click(function() {
		$(this).toggleClass( "fa-times", "fa-bars" );
		$(this).toggleClass( "fa-bars", "fa-times" );
	});
});

// Sticky header
$(window).scroll(function() {
    var sticky = $('header'),
        scroll = $(window).scrollTop();

    if (scroll >= 75) sticky.addClass('fixed');
	else sticky.removeClass('fixed');
});