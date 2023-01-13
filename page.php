<?php
/**
* The template for displaying all pages.
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


				<?php /*
				<h1><?php the_title();?></h1>
				<p>How do we update the navigation - we need 2x separate version.</p>
				<!-- A transparent white block / full width at 50-70% would work well on the background -->
				<a class="button atm--button-main" href="/labs">
					<span>Discover more</span><i class="fas fa-arrow-right"></i>
				</a>
				*/ ?>

		<?php if(is_page('terms-conditions') || is_page('privacy-policy') || is_page('cookie-policy')): ?>
			<section class="org--page-default">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-10">
					        <p class="last-updated">
					        	<br>
					            ---<br>
					            This page was last updated: <?php the_modified_date(); ?>
					        </p>
					    </div>
					</div>
				</div>
			</section>
		<?php endif; ?>

</section>

<?php get_footer(); ?>