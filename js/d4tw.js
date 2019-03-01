jQuery(document).ready(function( $ ) {

//Automatically generate filler content height to ensure footer is on bottom of the page
$('#js-heightControl').css('height', $(window).height() - $('html').height() +'px');

//Homepage Press Slider
$('#projectSlider').owlCarousel({
	items: 4,
	margin: 45,
	loop: true,
	dots: false
});

});