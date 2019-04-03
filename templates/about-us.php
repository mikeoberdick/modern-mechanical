<?php /* Template Name: About Us */ ?>

<?php get_header(); ?>

<div id	= "aboutUs" class="wrapper">
	<main class="site-main" id="main">
	
	<?php get_template_part('template-parts/page-header'); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>