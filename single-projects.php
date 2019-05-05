<?php get_header(); ?>

<div id="single-project" class="wrapper">
	<main class="site-main" id="main">
		<?php get_template_part('template-parts/page-header'); ?>
		
		<div class="container">
			<div id = "section1" class="row">
				<div class="col-md-6">
					<h3><?php the_field('name'); ?></h3>
					<span class = "d-block h5 mb-3 text-dark"><?php the_field('location'); ?></span>
					<p><?php the_field('description'); ?></p>
				</div><!-- .col-md-6 -->
				<div class="offset-md-1 col-md-5">
					<div class="row">
						<div class="col-md-6">
							<h5 class = "text-uppercase">Phase</h5>
							<p><?php the_field('phase'); ?></p>
							<h5 class = "text-uppercase">Delivery Method</h5>
							<p><?php the_field('delivery_method'); ?></p>
						</div><!-- .col-md-6 -->
						<div class="col-md-6">
							<h5 class = "text-uppercase">Budget</h5>
							<p><?php the_field('budget'); ?></p>
							<h5 class = "text-uppercase">Size</h5>
							<p><?php the_field('size'); ?></p>
						</div><!-- .col-md-6 -->	
					</div><!-- .row -->
				</div><!-- .col-md-6 -->
			</div><!-- #section1 -->
			<?php edit_post_link( ); ?>
			<div id = "section2" class="container">
				<div class="row mt-5">
					<?php $images = get_field('photos'); ?>
					<?php $imgNumber = count($images); ?>
					<?php if ($imgNumber >= 4) { ?>
						<div id = "singleProjectSlider" class = "mb-3 owl-carousel owl-theme">
							<?php foreach( $images as $image ): ?>
							<?php $size = 'project-thumb'; ?>
							<?php $img = $image['sizes'][ $size ]; ?>
							<div class = "project-slide">
							<img src="<?php echo $img; ?>" alt="<?php echo $image['alt']; ?>" />
							</div>
					 	<?php endforeach; ?>
						</div><!-- #singleProjectSlider -->
					<?php } else { ?>					
						<div id="singleImageContainer" class = "d-flex w-100 justify-content-center">
							<?php foreach( $images as $image ): ?>
							<?php $size = 'project-thumb'; ?>
							<?php $img = $image['sizes'][ $size ]; ?>
							<div class = "single-image mr-3">
								<img src="<?php echo $img; ?>" alt="<?php echo $image['alt']; ?>" />
							</div>
						<?php endforeach; ?>
					</div><!-- .single-image -->	
					<?php } ?>
				</div><!-- .row -->
			</div><!-- #section2 -->

			<div id="section3" class="row mt-3">
				<div class="col-sm-12 text-center">
					<a href="<?php echo bloginfo('url'); ?>/project-gallery">
						<i class="fa fa-th" aria-hidden="true"></i>
						<h5>BACK TO PROJECTS</h5>
					</a>
				</div>
			</div><!-- #section3 -->
		</div><!-- .container -->
	</main>
</div><!-- .wrapper -->
<?php get_footer(); ?>