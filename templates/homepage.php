<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<div class="wrapper" id="page-wrapper">
	<main class="site-main" id="main">

		<?php $image = get_field('hero_image', 'option'); ?>
<div id = "heroSection" tabindex="-1" style = "background-image: url('<?php echo $image['url']; ?>')">
	<?php if( have_rows('hero_image_services', 'option') ): ?>
		<ul id = "heroServices" class = "list-unstyled">
		<?php while( have_rows('hero_image_services', 'option') ): the_row(); ?>
			<li><?php the_sub_field('service'); ?></li>
		<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</div><!-- #heroSection -->

<div id = "section2" class="container">
	<div class="row">
		<div id = "left" class="col-sm-6">
			<h1 class = "h2"><?php the_field('cta_headline', 'option'); ?></h1>
	</div><!-- .col-sm-6 -->
		<div id = "right" class="col-sm-6">
			<p><?php the_field('cta_copy', 'option'); ?><i class="ml-3 fa fa-caret-right" aria-hidden="true"></i> <span><a href = "/about-us">Learn More</a></span></p>
		</div><!-- .col-sm-6 -->
	</div><!-- .row -->
</div><!-- .container -->

<div id="section3">
	<div class="container">
		<h3 class = "mb-5 text-center text-uppercase font-weight-bold text-white">Latest Projects</h3>
		
		<?php
			$args = array(
				'post_type' => 'projects',
				'posts_per_page' => '10'
			);
			
			$custom_query = new WP_Query( $args ); ?>

			<?php if ( $custom_query->have_posts() ) : ?>
		<div id = "projectSlider" class = "owl-carousel owl-theme">
			<?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
				<div class = "project-slide">
					<?php
						$gallery = get_field('photos');
						$img = $gallery[0];
					?>
					<img src = "<?php echo $img['sizes']['slider-thumb']; ?>">
					<h5 class = "text-white"><?php the_field('name'); ?></h5>
				</div>
			<?php endwhile; ?>

			<?php wp_reset_postdata(); endif; ?>

		</div><!-- #projectSlider -->
		<div class="mt-3 text-center">
			<a href = '<?php echo bloginfo('url'); ?>/project-gallery'><button role = 'button' class = 'btn btn-primary btn-lg yellow-btn'>View Projects</button></a>
		</div>
	</div><!-- .container -->
</div><!-- #section3 -->

<div id="section4">
	<div class="container-fluid">
		<h3 class = "mb-5 text-center text-uppercase font-weight-bold">Members Of</h3>
		<?php 
		$images = get_field('memberships', 'option');
		$size = 'full'; // (thumbnail, medium, large, full or custom size)

		if( $images ): ?>
    		<ul id="membershipLogos" class = "list-unstyled">
        		<?php foreach( $images as $image ): ?>
            		<li>
            			<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
            		</li>
        		<?php endforeach; ?>
    		</ul><!-- #membershipLogos -->
		<?php endif; ?>
	</div><!-- .container -->
</div><!-- #section4 -->

</main><!-- #main -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>