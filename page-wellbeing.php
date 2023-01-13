<?php
/**
* Template Name: CT Wellbeing
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

		<?php if(have_rows('mental_health')): // Group: Mental Health ?>
			<?php while(have_rows('mental_health')): the_row(); ?>
				<div class="design--left">
					<section class="block-content type--bg50-pink" style="background: linear-gradient(to left, rgba(246,195,202,0.33) 33%, rgba(246,195,202,0.33) 33%, #ffffff 33%, #ffffff 33%, #ffffff 100%); margin: 50px 0;">
						<div class="container">
							<div class="row">
								<div class="col-12 col-md-6 order-2 order-md-1">
									<div class="unit--content-story">
										<h2><?php the_sub_field('mental_health_title'); ?></h2>
										<div><?php the_sub_field('mental_health_text'); ?></div>

										<div>
											<?php if (get_sub_field('mental_health_cta')): ?>
												<p><strong><?php the_sub_field('mental_health_cta'); ?></strong></p>
											<?php else: ?>
												<section class="type--bg-white">
													<a class="button" href="http://localhost:10043/contact/"><i class="fak fa-use-ct-crown"></i>Get started</a>
												</section>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6 order-1 order-md-2">
									<figure>
										<img class="mw-100" src="<?php the_sub_field('mental_health_image'); ?>">
									</figure>
								</div>
							</div>
						</div>
					</section>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php if(have_rows('our_encouragement')): // Group: Encouragment ?>
			<?php while(have_rows('our_encouragement')): the_row(); ?>

				<section class="block--content-values">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-12 col-md-9">
								<section class="unit-encouragement">
									<h3 class="text-center"><?php the_sub_field('encouragement_title'); ?></h3>
								</section>
							</div>
						</div>
						<div class="row">
							<?php while(have_rows('encouragement_repeater')): the_row(); ?>
								<div class="col-6 col-lg-3">
									<section class="unit-content-encouragement h-md-100 d-block">
										<i class="fak fa-lg fa-use-ct-crown"></i>
										<p><?php the_sub_field('encouragement_text'); ?></p>
									</section>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				</section>

			<?php endwhile; ?>
		<?php endif; ?>

		<!-- Background: Dark blue + image -->
		<?php if(have_rows('support_students')): // Group: Support Students ?>
			<?php while(have_rows('support_students')): the_row(); ?>
			<section class="block--content-inspiration type--bg-darkblue" style="background-image:linear-gradient(rgba(25,37,55,0.8),rgba(25,37,55,0.8)), url(<?php the_sub_field('support_students_bg_image');?>);color:#fff;">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-9">
							<h2><?php the_sub_field('support_students_title'); ?></h2>
							<div><?php the_sub_field('support_students_text'); ?></div>
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