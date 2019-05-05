<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="js-heightControl" style="height: 0;">&nbsp;</div>

<?php if ( is_active_sidebar( 'footer_1') || is_active_sidebar( 'footer_2') || is_active_sidebar( 'footer_3') || is_active_sidebar( 'footer_4') ) { ?>

<div id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

	<div id = "footerWidgets" class = "row">

		<div id = "widget1" class = "col-lg-5 col-sm-12">
			<?php dynamic_sidebar('footer_1'); ?>
		</div>
		
		<div id = "widget2" class = "offset-lg-4 col-lg-3 col-sm-12">
			<?php dynamic_sidebar('footer_2'); ?>
		</div>

	</div><!-- #footerWidgets -->

	</div><!-- .container -->

	<?php } ?>

	<div id = "bottomFooter" class = "container-fluid">
		<div class="row">
			<div class="col-md-12">
				<footer class="site-footer text-center" id="colophon">
					<div class="site-info">
						<span>Just another <a target = "_blank" href = "https://wordpress.org/">WordPress</a> website by <a <a target = "_blank" href = "http://www.designs4theweb.com">Designs 4 The Web</a></span>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!--col end -->
		</div><!-- row end -->
	</div><!-- .container-fluid -->
</div><!-- wrapper end -->

</div><!-- #page-wrapper -->

<?php wp_footer(); ?>

<?php if ( is_page( 'project-gallery' ) ) { ?>
	<script>
	    var containerEl = document.querySelector('#projects');
	    var mixer = mixitup(containerEl, {
    	load: {
        	filter: '.all'
    	}
});
	</script>
	<?php } ?>

</body>

</html>
