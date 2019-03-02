jQuery(document).ready(function( $ ) {

//Automatically generate filler content height to ensure footer is on bottom of the page
$('#js-heightControl').css('height', $(window).height() - $('html').height() +'px');

//Homepage Press Slider
$('#projectSlider').owlCarousel({
	items: 4,
	margin: 45,
	nav: true,
	navText: ["<img src='/wp-content/themes/wp-understrap/img/slider_nav_prev.png'>","<img src='/wp-content/themes/wp-understrap/img/slider_nav_next.png'>"],
	loop: true,
	dots: false
});

});