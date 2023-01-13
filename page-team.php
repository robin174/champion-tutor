<?php
/**
* Template Name: CT Team
* @package championtutor
*/
get_header(); ?>

	<section class="templ--page-main">
		<?php if(get_field('include_page_introduction')): ?>
			<section class="org--page-introduction" style="background-color: #f6c3ca;">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-10">
							<h1><?php the_title();?></h1>
							<p><?php the_field('page_introduction'); ?></p>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>
		<section class="mol--page-main">
			<?php  
				$args=array( 
					'post_type' => 'teams',
					'order' => 'ASC',
					'post_status' => 'publish',
				);

				$my_counter = 0;
				$my_query = new WP_Query($args);
				if( $my_query -> have_posts()) : while($my_query->have_posts()) : $my_query -> the_post(); $counter++; ?>

				    <!-- check if counter is odd or even -->
				    <?php if( $counter % 2 == 0 ) : ?> <!-- it's even -->
				    	<div class="team--right">
				    		<?php get_template_part('template-parts/unit-team-right'); ?>
				    	</div>
				    <?php else: ?> <!-- it's odd -->
				    	<div class="team--left">
				    		<?php get_template_part('template-parts/unit-team-left'); ?>
				    	</div>
				    <?php endif; ?>

				<?php endwhile; 
			wp_reset_postdata(); endif; ?>
		<section>
	</section>

<?php get_footer(); ?>