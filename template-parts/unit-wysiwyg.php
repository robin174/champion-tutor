<div class="row justify-content-center">
	<div class="col-12 col-md-12">
		<h2 class="text-center"><?php the_sub_field('content_heading_title');?></h2>
	</div>
	<?php if(get_sub_field('select_columns') == 'one'): ?><!-- 1 column -->
		<div class="col-12 col-md-10">
			<section class="unit--content-wysiwyg">
				<?php the_sub_field('add_wys_content-one'); ?>
			</section>
		</div>
	<?php elseif(get_sub_field('select_columns') == 'two'): ?><!-- 2 columns -->
		<div class="col-12 col-md-5">
			<section class="unit--content-wysiwyg">
				<?php the_sub_field('add_wys_content-one'); ?>
			</section>
		</div>
		<div class="col-12 col-md-5">
			<section class="unit--content-wysiwyg">
				<?php the_sub_field('add_wys_content-two'); ?>
			</section>
		</div>
	<?php endif; ?>
</div>