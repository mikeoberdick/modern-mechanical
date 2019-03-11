<?php /* Template Name: Maintenance Services */ ?>

<?php get_header(); ?>

<div id = "maintenance-services" class="wrapper" id="page-wrapper">
	<main class="site-main" id="main">
	
	<?php get_template_part('template-parts/page-header'); ?>
	<div class="container">
		<div id = "section1" class="row">
			<div class="col-sm-12">
				<h2><?php echo the_field('maintenance_services_title', 'option'); ?></h2>
				<p><?php echo the_field('maintenance_services_description', 'option'); ?></p>
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->
		<div id="section2">
			<div class="row">
				<?php $services = get_field('maintenance_services', 'option');

				//Remove the extra space after the comma
				$services = str_replace( ', ', ',', $services );

				//Convert the string to array using the comma as the delimiter
				$items = explode( ',' , $services );

				//Set the counter for rows
				$i = 0;

				//Print the unordered list
				foreach ( $items as $item ) :
				//If the $i can be divided by 3 evenly then output a closing row
					if ($i % 3 == 0) {
						echo '</div><!-- .row --><div class = "row">';
					}
				    echo "
				    <div class = 'col-md-4 service_name mb-3'>
				    	<div class = 'service_wrapper'>
				    		<h3 class = 'h5 mb-0'>$item</h3>
				    	</div>
				    </div>";
				    $i++;
				endforeach;
				?>
			</div><!-- .row -->		
		</div><!-- #services -->
		<div id="section3">
			<h2 class = "mt-3">Comprehensive Preventative Maintenance</h2>
			<p>Comprehensive Preventative Maintenance (CPM) will ensure that your mechanical systems operate at maximum efficiency, provide the desired indoor temperature and humidity conditions, and proper indoor air quality. Also, CPM will prolong the useful life of your systems and will greatly minimize equipment failures.</p>

			<p>Modern Mechanical Services provides preventative maintenance and service for educational facilities, health care facilities, factories, data centers, commercial buildings, offices and institutional facilities.</p>

			<p>Our factory trained service technicians are available 24 hours a day, 7 days a week.</p>
		</div>
	</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>