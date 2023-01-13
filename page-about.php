<?php
/**
* Template Name: CT About
* @package championtutor
*/
get_header(); ?>

	<section class="templ--page-main">
		<?php if(get_field('include_page_introduction')): ?>
			<section class="org--page-introduction">
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
		
		<?php if(have_rows('our_story')): // Our Story ?>
			<?php while(have_rows('our_story')): the_row(); ?>
				<div class="design--left">
					<section class="block-content type-bg50-pink" style="background: linear-gradient(to left, rgba(246,195,202,0.33) 33%, rgba(246,195,202,0.33) 33%, #ffffff 33%, #ffffff 33%, #ffffff 100%); margin: 50px 0;">
						<div class="container">
							<div class="row">
								<div class="col-12 col-md-6 order-2 order-md-1">
									<div class="unit--content-story">
										<h2><?php the_sub_field('our_story_title'); ?></h2>
										<div><?php the_sub_field('our_story_text'); ?></div>
										<div><p><strong><?php the_sub_field('our_story_cta'); ?></strong></p></div>
										<section class="type--bg-white">
											<a class="button" href="https://www.champion-tutor.co.uk/contact/"><i class="fak fa-use-ct-crown"></i>Get started</a>
										</section>
									</div>
								</div>
								<div class="col-12 col-md-6 order-1 order-md-2">
									<figure>
										<img class="mw-100" src="<?php the_sub_field('our_story_image'); ?>">
									</figure>
								</div>
							</div>
						</div>
					</section>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php if(have_rows('our_values')): // Our Values ?>
			<section class="block--content-values">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2>Our Values</h2>
						</div>
						<?php while(have_rows('our_values')): the_row(); ?>
							<div class="col-12 col-lg">
								<section class="unit-content-value h-md-100 d-block">
									<i class="fak fa-lg fa-use-ct-crown"></i>
									<h4><?php the_sub_field('value_title'); ?></h4>
									<p><?php the_sub_field('value_text'); ?></p>
								</section>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<!-- Background: Dark blue + image -->
		<?php if(have_rows('our_inspiration')): // Inspiration ?>
			<?php while(have_rows('our_inspiration')): the_row(); ?>
			<section class="block--content-inspiration type--bg-darkblue" style="background-image:linear-gradient(rgba(25,37,55,0.8),rgba(25,37,55,0.8)), url(<?php the_sub_field('our_inspiration_bg_image');?>);color:#fff;">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-10">
							<h2><?php the_sub_field('our_inspiration_title'); ?></h2>
							<div><?php the_sub_field('our_inspiration_text'); ?></div>
							<i class="fak fa-2x fa-use-ct-crown"></i>
						</div>
					</div>
				</div>
			</section>
			<?php endwhile; ?>
		<?php endif; ?>

		<section class="mol--page-main">
			<?php get_template_part('template-parts/unit-page-sections'); ?>
		</section>
	</section>

<?php get_footer(); ?>