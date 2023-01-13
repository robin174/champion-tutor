<?php
/**
* Template Name: CT FAQs
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
				<div class="row">
					<div class="col-12 col-md-8">
						<?php while(has_sub_field('faq_section')): ?>

							<?php if(get_row_layout() == 'faq_detail'): ?>
								<section class="block--content-faq">
									<h2><?php the_sub_field('section_title'); ?></h2>
									<?php if( have_rows('question_answer') ): ?>
		    							<?php while( have_rows('question_answer') ) : the_row(); ?>
											<div class="unit--content-faq" style="margin-bottom:20px;">
							                    <h3><i class="fa-solid fa-lg fa-comment-question"></i><?php the_sub_field('repeater_question'); ?></h3>
							                    <?php the_sub_field('repeater_answer'); ?>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								</section>
						 	 <?php endif; ?>

						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</section>
				
	</section>

<?php get_footer(); ?>