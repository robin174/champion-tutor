<!-- Flexible content -->
<?php while(has_sub_field('section_blocks')): // flexible content ?>

	<?php if(get_row_layout() == 'section_test_01'): // Section test 01 ?>
		<?php if(get_sub_field('select_background_colour') == 'white'): ?>
			<!-- Background: White -->
			<section class="block--content type--bg-white">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10">
							<p><?php the_sub_field('text_sample'); ?></p>
						</div>
					</div>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'pink') && (get_sub_field('add_background_image') == false )) : ?>
			<!-- Background: Pink -->
			<section class="block--content type--bg-pink">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10">
							<p><?php the_sub_field('text_sample'); ?></p>
						</div>
					</div>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'pink') && (get_sub_field('add_background_image') == true )) : ?>
			<section class="block--content type--bg-pink" style="background-image:linear-gradient(rgba(246,195,202,0.8),rgba(246,195,202,0.8)), url(<?php the_sub_field('file_background_image');?>);">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10">
							<h1><?php the_sub_field('text_sample'); ?></h1>
						</div>
					</div>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'darkblue') && (get_sub_field('add_background_image') == false )) : ?>
			<!-- Background: Dark blue -->
			<section class="block--content type--bg-darkblue">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10">
							<p><?php the_sub_field('text_sample'); ?></p>
						</div>
					</div>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'darkblue') && (get_sub_field('add_background_image') == true )) : ?>
			<!-- Background: Dark blue + image -->
			<section class="block--content type--bg-darkblue" style="background-image:linear-gradient(rgba(25,37,55,0.8),rgba(25,37,55,0.8)), url(<?php the_sub_field('file_background_image');?>);color:#fff;">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10">
							<h1><?php the_sub_field('text_sample'); ?></h1>
						</div>
					</div>
				</div>
			</section>
		<?php elseif(get_sub_field('select_background_colour') == 'lightblue'): ?>
			<!-- Background: Light blue -->
			<section class="block--content type--bg-lightblue">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10">
							<p><?php the_sub_field('text_sample'); ?></p>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>
	<?php endif; ?>


	<?php if(get_row_layout() == 'section_wysiwyg'): // Section - WYSIWYG ?>
		<?php if(get_sub_field('select_background_colour') == 'white'): ?>
			<section class="block--content type--bg-white">
				<div class="container">
					<?php get_template_part('template-parts/unit-wysiwyg'); ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'pink') && (get_sub_field('add_background_image') == false )) : ?>
			<section class="block--content type--bg-pink">
				<div class="container">
					<?php get_template_part('template-parts/unit-wysiwyg'); ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'pink') && (get_sub_field('add_background_image') == true )) : ?>
			<section class="block--content type--bg-pink" style="background-image:linear-gradient(rgba(246,195,202,0.8),rgba(246,195,202,0.8)), url(<?php the_sub_field('file_background_image');?>);">
				<div class="container">
					<?php get_template_part('template-parts/unit-wysiwyg'); ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'darkblue') && (get_sub_field('add_background_image') == false )) : ?>
			<section class="block--content type--bg-darkblue">
				<div class="container">
					<?php get_template_part('template-parts/unit-wysiwyg'); ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'darkblue') && (get_sub_field('add_background_image') == true )) : ?>
			<section class="block--content type--bg-darkblue" style="background-image:linear-gradient(rgba(25,37,55,0.8),rgba(25,37,55,0.8)), url(<?php the_sub_field('file_background_image');?>);">
				<div class="container">
					<?php get_template_part('template-parts/unit-wysiwyg'); ?>
				</div>
			</section>
		<?php elseif(get_sub_field('select_background_colour') == 'lightblue'): ?>
			<section class="block--content type--bg-lightblue">
				<div class="container">
					<?php get_template_part('template-parts/unit-wysiwyg'); ?>
				</div>
			</section>
		<?php endif; ?>
	<?php endif; ?>


	<?php if(get_row_layout() == 'section_video'): // Section - Video ?>
		<?php if(get_sub_field('select_background_colour') == 'white'): ?>
			<section class="block--content-video type--bg-white">
				<div class="container">
					<?php get_template_part('template-parts/unit-video'); ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'pink') && (get_sub_field('add_background_image') == false )) : ?>
			<section class="block--content-video type--bg-pink">
				<div class="container">
					<?php get_template_part('template-parts/unit-video'); ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'pink') && (get_sub_field('add_background_image') == true )) : ?>
			<section class="block--content-video type--bg-pink" style="background-image:linear-gradient(rgba(246,195,202,0.8),rgba(246,195,202,0.8)), url(<?php the_sub_field('file_background_image');?>);">
				<div class="container">
					<?php get_template_part('template-parts/unit-video'); ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'darkblue') && (get_sub_field('add_background_image') == false )) : ?>
			<section class="block--content-video type--bg-darkblue">
				<div class="container">
					<?php get_template_part('template-parts/unit-video'); ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'darkblue') && (get_sub_field('add_background_image') == true )) : ?>
			<section class="block--content-video type--bg-darkblue" style="background-image:linear-gradient(rgba(25,37,55,0.8),rgba(25,37,55,0.8)), url(<?php the_sub_field('file_background_image');?>);">
				<div class="container">
					<?php get_template_part('template-parts/unit-video'); ?>
				</div>
			</section>
		<?php elseif(get_sub_field('select_background_colour') == 'lightblue'): ?>
			<section class="block--content-video type--bg-lightblue">
				<div class="container">
					<?php get_template_part('template-parts/unit-video'); ?>
				</div>
			</section>
		<?php endif; ?>
	<?php endif; ?>


	<?php if(get_row_layout() == 'section_offer'): // Section - Offer ?>
		<?php if(get_sub_field('select_background_colour') == 'white'): ?>
			<section class="block--content-thin type--bg-white">
				<div class="container">
					<?php get_template_part('template-parts/unit-offer'); ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'pink') && (get_sub_field('add_background_image') == false )) : ?>
			<section class="block--content-thin type--bg-pink" style="background-color:#f6c3ca;">
				<div class="container">
					<?php get_template_part('template-parts/unit-offer'); ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'pink') && (get_sub_field('add_background_image') == true )) : ?>
			<section class="block--content-thin type--bg-pink" style="background-image:linear-gradient(rgba(246,195,202,0.8),rgba(246,195,202,0.8)), url(<?php the_sub_field('file_background_image');?>);">
				<div class="container">
					<?php get_template_part('template-parts/unit-offer'); ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'darkblue') && (get_sub_field('add_background_image') == false )) : ?>
			<section class="block--content-thin type--bg-darkblue">
				<div class="container">
					<?php get_template_part('template-parts/unit-offer'); ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'darkblue') && (get_sub_field('add_background_image') == true )) : ?>
			<section class="block--content-thin type--bg-darkblue" style="background-image:linear-gradient(rgba(25,37,55,0.8),rgba(25,37,55,0.8)), url(<?php the_sub_field('file_background_image');?>);">
				<div class="container">
					<?php get_template_part('template-parts/unit-offer'); ?>
				</div>
			</section>
		<?php elseif(get_sub_field('select_background_colour') == 'lightblue'): ?>
			<section class="block--content-thin type--bg-lightblue">
				<div class="container">
					<?php get_template_part('template-parts/unit-offer'); ?>
				</div>
			</section>
		<?php endif; ?>
	<?php endif; ?>


	<?php if(get_row_layout() == 'section_testimonials'): // Section - Testimonial ?>
		<?php if(get_sub_field('select_background_colour') == 'white'): ?>
			<!-- Background: White -->
			<section class="block--content type--bg-white">
				<div class="container">
					<?php $post_object = get_sub_field('content_testimonial');
						if( $post_object ):
						$post = $post_object;
						setup_postdata( $post ); ?>
							<?php get_template_part('template-parts/unit-testimonial'); ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'pink') && (get_sub_field('add_background_image') == false )) : ?>
			<!-- Background: Pink -->
			<section class="block--content type--bg-pink">
				<div class="container">
					<?php $post_object = get_sub_field('content_testimonial');
						if( $post_object ):
						$post = $post_object;
						setup_postdata( $post ); ?>
							<?php get_template_part('template-parts/unit-testimonial'); ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'pink') && (get_sub_field('add_background_image') == true )) : ?>
			<section class="block--content type--bg-pink" style="background-image:linear-gradient(rgba(246,195,202,0.8),rgba(246,195,202,0.8)), url(<?php the_sub_field('file_background_image');?>);">
				<div class="container">
					<?php $post_object = get_sub_field('content_testimonial');
						if( $post_object ):
						$post = $post_object;
						setup_postdata( $post ); ?>
							<?php get_template_part('template-parts/unit-testimonial'); ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'darkblue') && (get_sub_field('add_background_image') == false )) : ?>
			<!-- Background: Dark blue -->
			<section class="block--content type--bg-darkblue">
				<div class="container">
					<?php $post_object = get_sub_field('content_testimonial');
						if( $post_object ):
						$post = $post_object;
						setup_postdata( $post ); ?>
							<?php get_template_part('template-parts/unit-testimonial'); ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>
				</div>
			</section>
		<?php elseif((get_sub_field('select_background_colour') == 'darkblue') && (get_sub_field('add_background_image') == true )) : ?>
			<!-- Background: Dark blue + image -->
			<section class="block--content type--bg-darkblue" style="background-image:linear-gradient(rgba(25,37,55,0.8),rgba(25,37,55,0.8)), url(<?php the_sub_field('file_background_image');?>);">
				<div class="container">
					<?php $post_object = get_sub_field('content_testimonial');
						if( $post_object ):
						$post = $post_object;
						setup_postdata( $post ); ?>
							<?php get_template_part('template-parts/unit-testimonial'); ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>
				</div>
			</section>
		<?php elseif(get_sub_field('select_background_colour') == 'lightblue'): ?>
			<!-- Background: Light blue -->
			<section class="block--content type--bg-lightblue">
				<div class="container">
					<?php $post_object = get_sub_field('content_testimonial');
						if( $post_object ):
						$post = $post_object;
						setup_postdata( $post ); ?>
							<?php get_template_part('template-parts/unit-testimonial'); ?>
						<?php wp_reset_postdata(); ?>
						<?php endif; ?>
				</div>
			</section>
		<?php endif; ?>
	<?php endif; ?>

<?php endwhile; ?>