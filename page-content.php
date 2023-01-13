<?php
/**
* Template Name: CT Content Sections
* @package championtutor
*/
get_header(); ?>

	<section class="templ--page-main">
		<?php if(is_page('wellbeing')): ?>
			<?php if(have_rows('mental_health')): // Mental Health ?>
				<?php while(have_rows('mental_health')): the_row(); ?>
					<div class="design--left">
						<section class="block-content type-bg50-pink" style="background: linear-gradient(to left, rgba(246,195,202,0.33) 33%, rgba(246,195,202,0.33) 33%, #ffffff 33%, #ffffff 33%, #ffffff 100%); margin: 50px 0;">
							<div class="container">
								<div class="row">
									<div class="col-12 col-md-6 order-2 order-md-1">
										<div class="unit--content-story">
											<h2><?php the_sub_field('mental_health_title'); ?></h2>
											<div><?php the_sub_field('mental_health_text'); ?></div>
											<div><p><strong><?php the_sub_field('mental_health_cta'); ?></strong></p></div>
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
		<?php endif; ?>

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
			<?php get_template_part('template-parts/unit-page-sections'); ?>
		</section>
	</section>

<?php get_footer(); ?>