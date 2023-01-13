<?php
/**
* Template Name: CT Staying Safe
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

		<?php if(have_rows('staying_safe')): // Group: Staying Safe ?>
			<?php while(have_rows('staying_safe')): the_row(); ?>
				<div class="design--left">
					<section class="block-content type--bg50-pink" style="background: linear-gradient(to left, rgba(246,195,202,0.33) 33%, rgba(246,195,202,0.33) 33%, #ffffff 33%, #ffffff 33%, #ffffff 100%); margin: 50px 0;">
						<div class="container">
							<div class="row">
								<div class="col-12 col-md-6 order-2 order-md-1">
									<div class="unit--content-story">
										<h2><?php the_sub_field('staying_safe_title'); ?></h2>
										<div><?php the_sub_field('staying_safe_text'); ?></div>

										<div>
											<?php if (get_sub_field('staying_safe_cta')): ?>
											<p><strong><?php the_sub_field('staying_safe_cta'); ?></strong></p>
											<?php else: ?>
												<section class="type--bg-white">
													<a class="button" href="#"><i class="fak fa-use-ct-crown"></i>Find out more</a>
												</section>
											<?php endif; ?>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6 order-1 order-md-2">
									<figure>
										<img class="mw-100" src="<?php the_sub_field('staying_safe_image'); ?>">
									</figure>
								</div>
							</div>
						</div>
					</section>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>

<?php get_footer(); ?>