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
		
		<section>
			<!-- Capsule CRM form, https://champion-tutor.capsulecrm.com/ -->
			<form action="https://service.capsulecrm.com/service/newlead" accept-charset="UTF-8" method="post">
				<input type="hidden" name="FORM_ID" value="da7eca6e-f83f-43cb-b0b8-eaf43032b541">
				<input type="hidden" name="COMPLETE_URL" value="https://www.champion-tutor.co.uk/">
				First name: <input type="text" name="FIRST_NAME">
				Last name: <input type="text" name="LAST_NAME">
				Email: <input type="email" name="EMAIL">
				Note: <input type="text" name="NOTE">
				<input type="submit" value="Submit">
			</form>
			<!-- Thank you page for COMPLETE_URL -->
		</section>

		<section class="mol--page-main">
			<?php get_template_part('template-parts/unit-page-sections'); ?>
		</section>
	</section>

<?php get_footer(); ?>