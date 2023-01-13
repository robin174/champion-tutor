<?php
/**
* Template Name: CT Simple PB
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
		<section class="org--page-simple">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-8">
							<?php get_template_part('template-parts/unit-simple-pb'); ?>

							<?php if(is_page('terms-conditions') || is_page('privacy-policy') || is_page('cookie-policy')): ?>
						        <p class="last-updated">
						        	<br>
						            ---<br>
						            This page was last updated: <?php the_modified_date(); ?>
						        </p>
						    <?php endif; ?>

					    </div>
					</div>
				</div>
			</section>
		
	</section>

<?php get_footer(); ?>