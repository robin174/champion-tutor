<div class="row justify-content-center">
	<div class="col-12 col-lg-6 order-2 order-lg-1">
		<div class="unit--content-video">
		    <h2><?php the_sub_field('video_title'); ?></h2>
		    <p><?php the_sub_field('video_content'); ?></p>
		    <p><strong><?php the_sub_field('video_cta'); ?></strong></p>
		    <?php if( get_sub_field('video_button') ): ?>
			    <a class="button" href="<?php the_sub_field('video_button_link'); ?>"><i class="fak fa-use-ct-crown"></i><?php the_sub_field('video_button_text'); ?></a>
		    <?php endif; ?>
		</div>
	</div>
	<div class="col-12 col-lg-6 order-1 order-lg-2">
		<figure>
			<!-- Placeholder for now -->
			<img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/ct-vimeo-v1.jpg">
		</figure>
		<?php /*
			<iframe src="https://player.vimeo.com/video/<?php the_field('home_vimeo_id'); ?>" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
		*/ ?>
	</div> 
</div>