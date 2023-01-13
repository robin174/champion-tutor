<section>
	<?php while(has_sub_field('simple_page_builder')): // flexible content ?>
		<?php if(get_row_layout() == 'spb_heading_h2'): // Subheading: h2 ?>
			<h2 class="spb__h2"><?php the_sub_field('heading_h2');?></h2>
		<?php endif; ?>

		<?php if(get_row_layout() == 'spb_heading_h3'): // Subheading: h2 ?>
			<h3 class="spb__h3"><?php the_sub_field('heading_h3');?></h3>
		<?php endif; ?>

		<?php if(get_row_layout() == 'spb_paragraph_intro'): // Paragraph Introduction ?>
			<p class="spb__paragraph-intro"><?php the_sub_field('paragraph_intro'); ?>
		<?php endif; ?>

		<?php if(get_row_layout() == 'spb_paragraph'): // Paragraph ?>
			<?php the_sub_field('paragraph'); ?>
		<?php endif; ?>
		
		<?php if(get_row_layout() == 'spb_bullet_list'): // Bullet List  ?>
            <section>
                 <?php if( get_sub_field('spb_bullet_intro') ): ?>
                    <p class="spb__bullet-intro"><?php the_sub_field('spb_bullet_intro'); ?></p>
                <?php endif; ?>
                
                <?php 
                $values = get_sub_field('spb_bullet_points');
                if ($values){ 
                echo '<ul class="spb__bullet">';
                foreach($values as $value){
                    echo '<li class="">'.$value['spb_item_point'].'</li>'; 
                }
                echo '</ul>';
                } ?>

                <?php if( get_sub_field('spb_bullet_outro') ): ?>
                    <p class="spb__bullet-outro"><?php the_sub_field('spb_bullet_outro'); ?></p>
                <?php endif; ?>
            </section>
	    <?php endif; ?>

	    <?php if(get_row_layout() == 'spb_number_list'): // Bullet List  ?>
            <section>
                 <?php if( get_sub_field('spb_number_intro') ): ?>
                    <p class="spb__number-intro"><?php the_sub_field('spb_number_intro'); ?></p>
                <?php endif; ?>
                
                <?php 
                $values = get_sub_field('spb_number_points');
                if ($values){ 
                echo '<ul class="spb__number">';
                foreach($values as $value){
                    echo '<li class="">'.$value['spb_number_point'].'</li>'; 
                }
                echo '</ul>';
                } ?>

                <?php if( get_sub_field('spb_number_outro') ): ?>
                    <p class="spb__number-outro"><?php the_sub_field('spb_bullet_outro'); ?></p>
                <?php endif; ?>
            </section>
	    <?php endif; ?>
	<?php endwhile; ?>
</section>