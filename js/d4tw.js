jQuery(document).ready(function( $ ) {

//Automatically generate filler content height to ensure footer is on bottom of the page
$('#js-heightControl').css('height', $(window).height() - $('html').height() +'px');

//Homepage Press Slider
$('#projectSlider').owlCarousel({
	items: 4,
	margin: 45,
	nav: true,
	navText: ["<img src='./wp-content/themes/wp-understrap/img/slider_nav_prev.png'>","<img src='./wp-content/themes/wp-understrap/img/slider_nav_next.png'>"],
	loop: true,
	dots: false
});

//Project Gallery page pagination "Now Showing..."
$( ".catButton" ).click(function() {
$( "span#currentCat" ).text( jQuery(this).text() );
});

//Project Gallery set height of project overlay to match the project title plus padding
var paddingTop = $('.project_overlay').css( "padding-top" );
var paddingBot = $('.project_overlay').css( "padding-bottom" );
$('.project_overlay h5').each(function() {
	var headerHeight = $(this).height();
	var totalHeight = parseInt(paddingTop, 10) + parseInt(paddingBot, 10) + parseInt(headerHeight, 10);
	$(this).parent().css('height', totalHeight+'px');
});

//Single Project Slider
$('#singleProjectSlider').owlCarousel({
	items: 3,
	margin: 45,
	nav: true,
	navText: ["<img src='http://dev.designs4theweb.com/modern_mechanical/wp-content/themes/wp-understrap/img/slider_nav_prev.png'>","<img src='http://dev.designs4theweb.com/modern_mechanical/wp-content/themes/wp-understrap/img/slider_nav_next.png'>"],
	loop: true,
	dots: false
});

//Add fixed class to nav on page scroll
$(function() {
    //caches a jQuery object containing the header element
    var nav = $(".wrapper-navbar");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 182) {
            nav.addClass('fixed');
        } else {
            nav.removeClass('fixed');
        }
    });
});



});