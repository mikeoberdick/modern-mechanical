<?php /* Template Name: Construction Services */ ?>

<?php get_header(); ?>

<div id = "construction-services" class="wrapper">
	<main class="site-main" id="main">
	
	<?php get_template_part('template-parts/page-header'); ?>
	<div class="container">
		<div class="row mb-5">
			<div class="col-sm-12">
				<h2><?php echo the_field('construction_services_title', 'option'); ?></h2>
				<p><?php echo the_field('construction_services_description', 'option'); ?></p>
				<?php $image = get_field('construction_services_image', 'option'); ?>
				<img class = "d-none d-md-block float-right pl-3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
				<?php if( have_rows('construction_services', 'option') ): ?>
				<?php while( have_rows('construction_services', 'option') ): the_row(); 

				// vars
				$name = get_sub_field('service_name');
				$description = get_sub_field('service_description');
				?>

				<i class="fa fa-caret-right" aria-hidden="true"></i><h3 class = "service_name"><?php echo $name; ?></h3>
				<p class = "service_para"><?php echo $description; ?></p>
				<?php endwhile; ?>
				<?php endif; ?>
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->

		<div id="certifications">
			<div class="row">
				<div class="col-sm-12">
					<h2>Safety Training & Certifications</h2>
					<p>List of certification &amp; training MMS technicians have completed:</p>	
				</div><!-- .col-sm-12 -->
			</div><!-- .row -->
			
			<div class="row">
				<?php $certifications = get_field('certifications', 'option');

				//create array from new lines in text area
				$certs = preg_split('/\r\n|[\r\n]/', $certifications);

				//Set the counter for rows
				$i = 0;

				//Print the unordered list
				foreach ( $certs as $cert ) :
				//If the $i can be divided by 3 evenly then output a closing row
					if ($i % 3 == 0) {
						echo '</div><!-- .row --><div class = "row">';
					}
				    echo "
				    <div class = 'col-md-4 cert_name mb-3'>
				    	<div class = 'certification_wrapper'>
				    		<h3 class = 'h5 mb-0'>$cert</h3>
				    	</div>
				    </div>";
				    $i++;
				endforeach;
				?>
			</div><!-- .row -->		
		</div><!-- #certifications -->
		
	</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>