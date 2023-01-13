<?php
/**
* Template Name: CT Tutors
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

		<section class="org--page-default">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12">
						<h2><?php the_field('introducing_tutors')?></h2>
					</div>
					<!-- like events, we should be able to sort these via a meta-field in the post e.g. price (dropping the pound sign and using numbers (and then alpabetical)) -->
					<?php
			            $args=array(
			 				'post_type' => 'tutors',
							'post_status' => 'publish',
			            );
			            $my_query = null;
			            $my_query = new WP_Query($args);
			            if( $my_query->have_posts() ) {
			            while ($my_query->have_posts()) : $my_query->the_post(); ?>
			            	<?php get_template_part('template-parts/unit-tutor'); ?>
			            <?php endwhile; }
			        wp_reset_query();  // Restore global post data stomped by the_post().
			        ?>
			        <div class="col-12">
						<hr>
						Tutor CTA
					</div>
				</div>
			</div>
		</section>
		
		<section class="mol--page-main">
			<?php get_template_part('template-parts/unit-page-sections'); ?>
		</section>
	</section>


<?php get_footer(); ?>