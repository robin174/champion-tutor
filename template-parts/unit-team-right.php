<section class="block-content type-bg50-pink" style="background: linear-gradient(to right, rgba(246,195,202,0.33) 33%, rgba(246,195,202,0.33) 33%, #ffffff 33%, #ffffff 33%, #ffffff 100%); margin: 50px 0;">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<figure>
					<img class="mw-100" src="<?php the_field('headshot'); ?>">
				</figure>
			</div>
			<div class="col-12 col-md-6">
				<div class="unit--content-team">
					<h3><?php the_title(); ?></h3>
					<h4 class="ut--uc"><?php the_field('title_role'); ?></h4>
					<div>
						<?php the_field('text_biography'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>