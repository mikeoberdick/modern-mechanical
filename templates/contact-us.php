<?php /* Template Name: Contact Us */ ?>

<?php get_header(); ?>

<div class="wrapper" id="page-wrapper">
	<main class="site-main" id="main">
	
	<?php get_template_part('template-parts/page-header'); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php echo do_shortcode('[ninja_form id=1]'); ?>
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>