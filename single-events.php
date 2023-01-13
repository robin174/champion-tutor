<?php
/**
* The template for displaying a single event
* @package championtutor
*/
get_header(); ?>

	<section class="org--page-default">
		<div class="container">
			<div class="row justify-content-center">
				<?php get_template_part('template-parts/unit-event-upcoming'); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>