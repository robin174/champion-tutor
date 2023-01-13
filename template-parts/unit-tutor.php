<div class="col-10 col-sm-6 col-lg-4 col-xl-3">
	<section class="unit--content-tutor type--bg-white">
			<figure class="figure--headshot">
				<?php the_post_thumbnail('normal', array('class' => 'attachment-post-thumbnail img-fluid')); ?>
			</figure>
		<div>
			<?php /*
			<div class="col-12 col-md-4">
				<?php if (has_post_thumbnail() ) { ?>
					<figure>
	    				<?php the_post_thumbnail('normal', array('class' => 'attachment-post-thumbnail img-fluid')); ?>
	    				<figcaption>
							<!-- Credit 3rd party image -->
						</figcaption>
	    			</figure>
				<?php } else { ?>
					<figure>
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/ct-image-coming-soon-v4.png" alt="Image coming soon">
					</figure>
				<?php }; ?>
			</div>
			*/ ?>
			<h3><?php the_title(); ?></h3>
			<h4 class="ut--uc"><?php the_field('title_university'); ?></h4>
			<p><?php the_field('text_introduction'); ?></p>
			<div>
				<?php if(have_rows('text-bullet_list')): // Mental Health ?>
					<ul class="bullet--tutor">
						<?php while(have_rows('text-bullet_list')): the_row(); ?>
							<li><?php the_sub_field('bullet_point'); ?></li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</section>
</div>