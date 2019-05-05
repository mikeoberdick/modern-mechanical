<?php /* Template Name: Safety */ ?>

<?php get_header(); ?>

<div id	= "safety" class="wrapper">
	<main class="site-main" id="main">
	
	<?php get_template_part('template-parts/page-header'); ?>
	<div class="container">
		<div id = "section1" class="row mb-5">
			<div class="col-sm-12">
				<h2>Safety at Modern Mechanical</h2>
				<p>Modern Mechanical Systems has been a member of this association for over 40 years with continuing efforts in safety and political advocacy for the Merit Shop Salute.</p>
				<div class="row mb-5">
					<div class="col-sm-6">
						<img class = "img-fluid d-block mx-auto mb-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/step_award.png">	
					</div><!-- .col-sm-6 -->
					<div class="col-sm-6">
						<p>Established in 1989, ABC’s Safety Training Evaluation Process (STEP) was developed and written by contractors, for contractors. Participating ABC member firms measure their safety processes and policies on 20 key components through a detailed questionnaire with the goal of implementing or enhancing safety programs that reduce jobsite incident rates.</p>
						
					</div><!-- .col-sm-6 -->
				</div><!-- .row -->
				
					<h5 class = "mb-3 display-5">The following are a few award levels we have achieved through this program offered by CT ABC:</h5>
					<div id = "award1" class = "award">
						<div class = "award-year">2019</div>
						<div class = "award-name">Diamond Level STEP Award</div>
					</div><!-- .award -->

					<div id = "award2" class = "award">
						<div class = "award-year">2018</div>
						<div class = "award-name">Gold Level STEP Award</div>
					</div><!-- .award -->

					<div id = "award3" class = "award">
						<div class = "award-year">2017</div>
						<div class = "award-name">Gold Level STEP Award</div>
					</div><!-- .award -->

					<div id = "award4" class = "award">
						<div class = "award-year">2016</div>
						<div class = "award-name">Silver Level STEP Award</div>
					</div><!-- .award -->
			</div><!-- .col-sm-12 -->
		</div><!-- #section1 -->

		<div id = "section2" class="row mb-5">
			<div id = "abc" class="col-md-3">
				<img id = "abcLogo" class = "img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/abc_logo.png" alt="ABC Connecticut Chapter">
			</div><!-- .col-sm-3 -->
			<div class="col-md-9">
				<h3>Associated Builders and contractors, Inc.</h3>
				<p class = "mb-0 abc-copy">The company's objective is to ensure that all work on the project job site is performed in a safe manner conforming and complying with all applicable safety and health regulations and standards.  We are dedicated to our safety program characterized by proactive safety management, jobsite hazard awareness (JHA) and specific safety development.</p>
			</div><!-- .col-sm-9 -->
		</div><!-- #section2 -->
	</div><!-- .container -->

	<div id = "section3Wrapper" class = "mb-5">
		<div class="container">
			<div id = "section3" class="row">
				<div id = "left">
					<p class = "text-white">The foundations of Modern Mechanical Systems Safety Program</p>
				</div><!-- #left -->
				<div id = "right">
					<div class = "foundation-wrapper">
						<i class="fa fa-caret-right" aria-hidden="true"></i>
						<span>Project specific safety plan</span>	
					</div>
					
					<div class = "foundation-wrapper">
						<i class="fa fa-caret-right" aria-hidden="true"></i>
						<span>Weekly Tool box Talks</span>	
					</div>
					
					<div class = "foundation-wrapper">
						<i class="fa fa-caret-right" aria-hidden="true"></i>
						<span>Documented safety audits (weekly site visits)</span>
					</div>
					
					<div class = "foundation-wrapper">
						<i class="fa fa-caret-right" aria-hidden="true"></i>
						<span>Job Hazard Analysis (JHA)</span>
					</div>
					
					<div class = "foundation-wrapper">
						<i class="fa fa-caret-right" aria-hidden="true"></i>
						<span>New employee safety orientation</span>
					</div>
					
					<div class = "foundation-wrapper">
						<i class="fa fa-caret-right" aria-hidden="true"></i>
						<span>Mandatory safety training</span>
					</div>
					
					<div class = "foundation-wrapper">
						<i class="fa fa-caret-right" aria-hidden="true"></i>
						<span>Company safety manual</span>
					</div>
				</div><!-- #right -->
			</div><!-- row -->
		</div><!-- .container -->
	</div><!-- #section3Wrapper -->

	<div class="container">
		<div id="section4" class="row">
			<div class="col-md-6 mb-3 mb-md-0">
				<h3>OSHA Regulations</h3>
				<p> Our safety training includes the following requirements, is project specific and updated to conform to the latest regulations set forth by OSHA.</p>
				<ul>
					<li>OSHA Construction Safety Training (OSHA 10 minimum)</li>
					<li>Confined Space Entry (Including permit required)</li>
					<li>Arc/Flash Training (NFPA 70E) or electrical safety (NFPA 70E)</li>
					<li>Lock-Out/Tag-Out</li>
					<li>HAZCOM (Hazardous Communications)</li>
				</ul>
			</div><!-- .col-md-6 -->
			<div class="col-md-6">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/osha.png" alt="OSHA">
			</div><!-- .col-md-6 -->
		</div><!-- #section4 -->
	</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #page-wrapper -->

<?php get_footer(); ?>