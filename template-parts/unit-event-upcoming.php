<section class="unit--content-event type--bg-white">
	<div class="row">
		<div class="col-12 col-md-4">
			<?php if (has_post_thumbnail() ) { ?>
				<figure>
    				<?php the_post_thumbnail('normal', array('class' => 'attachment-post-thumbnail img-fluid')); ?>
    				<?php if(get_field('image_credit')): ?>
	    				<figcaption>
	    					Credit:&nbsp;<?php the_field('image_credit'); ?>
						</figcaption>
					<?php endif; ?>
    			</figure>
			<?php } else { ?>
				<figure>
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/ct-image-coming-soon-v4.png" alt="Image coming soon">
				</figure>
			<?php }; ?>
		</div>
		<div class="col-12 col-md-8">
			<h2><?php the_title(); ?></h2>
			<h4>
				<?php if (get_field('title_location')): ?>
					<i class="fa-solid fa-lg fa-map-pin"></i>&nbsp;&nbsp;<?php the_field('title_location'); ?>&nbsp;&nbsp;&nbsp;
				<?php endif; ?>
				<i class="fa-solid fa-lg fa-calendar-days"></i>&nbsp;&nbsp;<?php the_field('date_picker'); ?></h4>
			<p><?php the_field('text_introduction'); ?></p>
			<?php if (get_field('url_more_info')): ?>
				<a class="button" target="_blank" href="<?php the_field('url_more_info')?>" style="margin-right: 10px;">
					<i class="fa-solid fa-lg fa-info-circle"></i>For more information
				</a>
			<?php endif; ?>
			<?php if (get_field('url_tickets')): ?>
				<a class="button" target="_blank" href="<?php the_field('url_tickets')?>">
					<i class="fa-solid fa-lg fa-shopping-basket"></i>Buy tickets
				</a>
			<?php endif; ?>
		</div>
	</div>
</section>