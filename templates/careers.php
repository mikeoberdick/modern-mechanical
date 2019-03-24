<?php /* Template Name: Careers */ ?>

<?php get_header(); ?>

<div id	= "careers" class="wrapper">
	<main class="site-main" id="main">
	
	<?php get_template_part('template-parts/page-header'); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Now Hiring</h2>
				<p>Modern Mechanical Systems is currently seeking the following licensed tradespersons:</p>
				<?php if( have_rows('jobs', 'option') ): ?>
					<div id = "jobs">
				<?php while( have_rows('jobs', 'option') ): the_row(); 
				// vars
				$title = get_sub_field('job_name');
					?>
					<h5 class = "job_title mb-3">
						<?php echo $title; ?>
					</h5><!-- .job_title -->
				<?php endwhile; ?>
				</div><!-- #jobs -->
				<?php endif; ?>
				<p>*Currently all our apprenticeship’s positions are unavailable.</p>
				<p>Applications must be filled out at our office located at:</p>
				<p>Modern Mechanical Systems<br>
				519 Cooke St.<br>
				Farmington, CT 06032<br>
				860-677-2222</p>

			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>