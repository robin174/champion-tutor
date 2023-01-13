<?php
/**
* Template Name: CT Home
* @package championtutor
*/
get_header(); ?>

	<section class="templ--page-main">

		<!-- Banner advert -->
		<section style="background-color: #f6c3ca;">
			<div class="container">
				<div class="row justify-content-center">

					<?php if( have_rows('banner_advert') ): ?>
    					<?php while( have_rows('banner_advert') ): the_row(); ?>

							<div class="col-10">
								<?php if (get_sub_field('banner_link')) { ?>
									<figure>
										<a href="<?php the_sub_field('banner_link'); ?>" target="_blank">
											<img class="mw-100" style="box-shadow: 0 0 15px rgba(0,0,0,0.4);" src="<?php the_sub_field('banner_image'); ?>">
										</a>
									</figure>
								<?php } else { ?>
									<figure>
										<img class="mw-100" src="<?php the_sub_field('banner_image'); ?>">
									</figure>
								<?php } ?>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>
		</section>

		<section class="block--content type--bg-white">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="text-center">~&nbsp;New for Autumn 2022&nbsp;~</h2>
					</div>
					<div class="col-6">
						<h3>Spotlight assessments</h3>
						<p>As educationalists and tutors we are always assessing-measuring progress and setting goals for our children and young people. However, assessment is really a science and I have recently found the best tool for assessing your child’s English and Maths attainment-or current achievement- as well as their ability and potential.</p>
						<p>It’s called Spotlight, and it sheds light on what is achievable for your child through a two-hour online assessment, consisting of four short tests, and it gives you a really powerful indication of where they are at and where they should be heading academically.</p>
						<p>The online tests feed into a personal report that you get a few days later, along with a thirty minute online video feedback session from a Spotlight expert, all of whom have been headteachers. Their experience will allow them to support you as you seek answers to your own questions.</p>
						<p>This gives a valuable roadmap for your next steps, goals and areas to focus, all of which will be summarised and presented to you in a Next Steps document.</p>
						<p style="margin-bottom:30px;">I was recently introduced to the Spotlight team and had my twin daughters (aged 9) assessed and I got so much out of it. This assessment meant that they were benchmarked against their age group nationwide, both state and private, and more importantly, have concrete knowledge of what they can achieve and what we should be dong to fulfil that potential.</p>
						<a class="button"href="mailto:sarah@champion-tutor.co.uk?subject=Spotlight enquiry"><i class="fak fa-use-ct-crown"></i>Email for more information</a>
					</div>
					<div class="col-6">
						<h3>Counselling</h3>
						<p>Champion are proud to have teamed with a small number of exceptional counsellors who will offer face-to-face (dependent on location) and online sessions.</p> 
						<p style="margin-bottom:30px;">1 in 6 children aged 5-16 were identified as having a probable mental health problem in July 2021, a huge increase from 1:9 in 2017. That is 5 in every classroom.</p>
						<a class="button" href="mailto:sarah@champion-tutor.co.uk?subject=Counselling enquiry"><i class="fak fa-use-ct-crown"></i>Email for more information</a>
					</div>
				</div>
			</div>
		</section>

		<!-- 	
			1. Update discount section with image/colour
			2. Add one more secton (could be the new stuff - counselling?)
			3. Add some spacing to sections
			4. Sort contact page / and functionality. Airtable functionality started
		-->

		<section class="block--content type--bg-lightblue">
			<div class="container">
				<div class="row justify-content-center">

					<?php if( have_rows('marketing_quotes') ): ?>
    					<?php while( have_rows('marketing_quotes') ): the_row(); ?>

    						<h2 class="text-center"style="margin-bottom: 30px;"><?php the_sub_field('m_quote_header'); ?>...</h2>

    						<?php $total_rows = count(get_sub_field('m_quote')); ?>
							<?php if( have_rows('m_quote') ): ?><!-- repeater -->
								<?php while( have_rows('m_quote') ): the_row(); ?>
									
									<?php if($total_rows == ('1')) { ?>
								
										<div class="col-12 col-md-8">
											<?php get_template_part('template-parts/unit-home-quote'); ?>
										</div>
									<?php } elseif($total_rows == ('2')) { ?>
							
										<div class="col-12 col-md-6">
											<?php get_template_part('template-parts/unit-home-quote'); ?>
										</div>
									<?php } ?>

								<?php endwhile; ?>
							<?php endif; ?>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>
		</section>

		<section class="mol--page-main">
			<?php get_template_part('template-parts/unit-page-sections'); ?>
		</section>

	</section>

<?php get_footer(); ?>