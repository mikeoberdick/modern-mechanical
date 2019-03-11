<?php /* Template Name: Project Gallery */ ?>

<?php get_header(); ?>

<div id="project-gallery" class="wrapper">
	<main class="site-main" id="main">
		<?php get_template_part('template-parts/page-header'); ?>
		<div id = "catNavigation" class="container-fluid">
			<div class="row">
		
		<!-- Desktop Project Categories for Sorting -->
		<div class="col-sm-12 text-center mb-3 controls d-none d-sm-block">
			<button class = "btn btn-outline-primary catButton" type="button" data-filter=".all">All Projects</button>
				<?php $terms = get_terms( array ('taxonomy'=> 'project-category') ); // Get all terms for the project categories ?>
    		<?php foreach ( $terms as $term ) { ?>
    		<button class = "btn btn-outline-primary catButton" type="button" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
        	<?php } ?>
		</div><!-- .controls -->

		<!-- Mobile Project Category Dropdown for Sorting -->
		<div class="col-sm-12 text-center mb-3 controls d-block d-sm-none">
			<div class="dropdown">
			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</button>
			  	<div class="dropdown-menu fade" aria-labelledby="dropdownMenuButton">
			  		<div id = "dropdownInner">
				  		<a class="dropdown-item catButton" data-filter=".all">All Projects</a>
				  	<?php foreach ( $terms as $term ) { ?>
				    	<a class="dropdown-item catButton" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
			    	<?php } ?>
			    </div><!-- #dropdownInner -->
			  </div><!-- .dropdown-menu -->
			</div><!-- .dropdown -->
		</div><!-- .controls -->

		<div id="catCurrentlyShown">
			<h5>Currently Viewing <span id = "currentCat">All Projects</span></h5>
		</div>

	</div><!-- .row -->
</div><!-- .container -->

<div id = "projects" class = "container">
	<div class="row">
		<?php $custom_query_args = array( 'post_type' => 'projects', 'posts_per_page' => -1 );
		$custom_query = new WP_Query( $custom_query_args ); ?>

		<?php $i = 0; ?>
			
		<?php if ( $custom_query->have_posts() ) : while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

		<?php $taxonomy = 'project-category';
		$tax_terms = wp_get_post_terms($post->ID, $taxonomy, array("fields" => "all")); ?>

	<div class = "project mix col-lg-6 col-md-4 all <?php foreach( $tax_terms as $tax_term ): ?><?php echo $tax_term->slug; ?> <?php endforeach; ?>">
		<article <?php post_class(); ?>>
			<h3><?php the_title(); ?></h3>
	    </article>
	    <a href = "<?php the_permalink(); ?>">view project</a>
	</div><!-- .project -->

		<?php 
			$i++;
			endwhile;
		?>

		<?php
		    wp_reset_postdata(); // reset the query 
		else:
		    echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
		endif;
		?>
	</div><!-- .row -->
</div><!-- #miu-projects .container-fluid -->

</div><!-- .row -->

</div><!-- .container-fluid -->
<?php get_footer(); ?>