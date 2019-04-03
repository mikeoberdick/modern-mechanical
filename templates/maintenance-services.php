<?php /* Template Name: Maintenance Services */ ?>

<?php get_header(); ?>

<div id = "maintenance-services" class="wrapper">
	<main class="site-main" id="main">
	
	<?php get_template_part('template-parts/page-header'); ?>
	<div class="container">
		<div id = "section1" class="row">
			<div class="col-sm-12">
				<h2 class = "mb-4">
					<?php echo the_field('maintenance_services_title', 'option'); ?>
				</h2>
				<p id = "serviceCopy">
					<?php echo the_field('maintenance_services_description', 'option'); ?>
				</p>
			</div><!-- .col-sm-12 -->
		</div><!-- .row -->

		<div id="services" class = "mb-5">
			<div class="row mb-3">
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
						echo '</div><!-- .row --><div class = "row mb-3">';
					}
				    echo "
				    <div class = 'col-sm-4 service-item-wrapper'>
					    	<i class='fa fa-check' aria-hidden='true'></i>
					    	<span>$item</span>
					    </div><!-- .service-wrapper -->";
				    $i++;
				endforeach;
				?>

			</div><!-- .row -->		
		</div><!-- #services -->
	</div><!-- .container -->

	<div id="section3" class = "mb-5">
		<div class="container">
			<h2 class = "mt-3">Comprehensive Preventative Maintenance</h2>
			<p>Comprehensive Preventative Maintenance (CPM) will ensure that your mechanical systems operate at maximum efficiency, provide the desired indoor temperature and humidity conditions, and proper indoor air quality. Also, CPM will prolong the useful life of your systems and will greatly minimize equipment failures.</p>

			<p>Modern Mechanical Services provides preventative maintenance and service for educational facilities, health care facilities, factories, data centers, commercial buildings, offices and institutional facilities.</p>

			<p>Our factory trained service technicians are available 24 hours a day, 7 days a week.</p>
		</div><!-- .container -->
	</div><!-- #section3 -->

	<div id="certifications" class = "mb-5">
		<div class="container">
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
		</div><!-- .container -->
	</div><!-- #certifications -->
	
	<div id="section4">
		<div class="row">
			<div id = "backflowCopy" class="col-md-6 offset-md-6">
				<h3>NOW OFFERING BACKFLOW TESTING SERVICES!</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis dolores sapiente, facere est obcaecati, fuga incidunt perspiciatis harum dolore officiis natus nulla reiciendis aut recusandae dolorem quisquam vitae rerum omnis?</p>
				<a href = '<?php echo bloginfo('url'); ?>/contact'><button role = 'button' class = 'btn btn-primary btn-lg'>SCHEDULE NOW</button></a>
			</div><!-- #backflowCopy -->
		</div><!-- .row -->
	</div><!-- #section4 -->
</main><!-- #main -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>