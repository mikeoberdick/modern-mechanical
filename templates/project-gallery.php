<?php /* Template Name: Project Gallery */ ?>

<?php get_header(); ?>

<div id="project-gallery" class="wrapper">
	<main class="site-main" id="main">
		<?php get_template_part('template-parts/page-header'); ?>
		<div id = "catNavigation" class="container-fluid">
			<div class="row">
				
				<!-- Desktop Project Categories for Sorting -->
				<div class="col-sm-12 text-center mb-3 controls">
					<button class = "btn btn-outline-primary catButton" type="button" data-filter=".all">All Projects</button>
						<?php $terms = get_terms( array ('taxonomy'=> 'project-category') ); // Get all terms for the project categories ?>
		    		<?php foreach ( $terms as $term ) { ?>
		    		<button class = "btn btn-outline-primary catButton" type="button" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
		        	<?php } ?>
				</div><!-- .controls -->
			</div><!-- .row -->
		</div><!-- .container-fluid -->

		<div class = "container">
			<div class="row">
				<div id="catCurrentlyShown" class = "mb-3 col-sm-12">
					<h5>Currently Viewing <span id = "currentCat">All Projects</span></h5>
				</div>
			</div><!-- .row -->
			
			<div id="projects">
				<?php $custom_query_args = array(
					'post_type' => 'projects',
					'posts_per_page' => -1
				);
				$custom_query = new WP_Query( $custom_query_args );
				if ( $custom_query->have_posts() ) : while( $custom_query->have_posts() ) : $custom_query->the_post();
				$taxonomy = 'project-category';
				$tax_terms = wp_get_post_terms($post->ID, $taxonomy, array("fields" => "all")); ?>
				
				<div class = "project mix all <?php foreach( $tax_terms as $tax_term ): ?><?php echo $tax_term->slug; ?> <?php endforeach; ?>">
					<article <?php post_class(); ?>>
						<?php
							$gallery = get_field('photos');
							$img = $gallery[0];
						?>
						<img class = "project_featured_image" src = "<?php echo $img['sizes']['project-thumb']; ?>">
						<div class = "project_overlay">
							<h5><?php the_field('name'); ?></h5>
							<div class = "d-none d-lg-block"><?php echo project_excerpt(); ?></div>
							<button class = "btn btn-primary"><a href = "<?php the_permalink(); ?>">View Project</a></button>
						</div>
				    </article>
				</div><!-- .project -->
				<?php endwhile; wp_reset_postdata(); endif; ?>
			</div><!-- #projects -->
		</div><!-- .container -->
	</main>
</div><!-- .wrapper -->
<?php get_footer(); ?>