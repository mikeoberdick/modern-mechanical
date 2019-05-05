<?php /* Template Name: Contact Us */ ?>

<?php get_header(); ?>

<div id="contact-us" class="wrapper">
	<main class="site-main" id="main">
	
	<?php get_template_part('template-parts/page-header'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-7 mb-3 mb-md-0">
				<iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJm24OUrGx54kR2jhlq-hi_bE&key=AIzaSyCg1bqYBCTrTA8jXvK4xYmmkasZhf_iYPs" allowfullscreen></iframe>
			</div>
			<div class="col-md-5">
				<h5 class = "text-uppercase">Address</h5>
				<p><?php the_field('address_1', 'option'); ?><br/><?php the_field('address_2', 'option'); ?></p>
				<h5 class = "text-uppercase">Phone</h5>
				<p><?php the_field('phone', 'option'); ?></p>
				<h5 class = "text-uppercase">Fax</h5>
				<p><?php the_field('fax', 'option'); ?></p>
			</div>
			<div class="col-sm-12 mt-5">
				<h2 class = "mb-3">Get In Touch</h2>
				<?php echo do_shortcode('[ninja_form id=1]'); ?>
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>