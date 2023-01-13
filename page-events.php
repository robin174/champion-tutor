<?php
/**
* Template Name: CT Events
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
    	<section class="org--page-default">
    		<div class="container">
    			<div class="row justify-content-center">
    				<div class="col-11 col-md-12">
                        <section>
                            <h2>Upcoming Events</h2>
                                <?php $today = date('Ymd');
                                $args = array (
                                    'post_type' => 'events',
                                    'post_status' => 'publish', // only show published events
                                    'orderby' => 'meta_value', // order by date
                                    'meta_key' => 'date_picker', // your ACF Date & Time Picker field
                                    'meta_value' => $today, // Use the current time from above
                                    'meta_compare' => '>=', // Compare today's datetime with our event datetime
                                    'order' => 'ASC',
                                    );
                                $query = new WP_Query( $args );
                                if ( $query->have_posts() ) :
                                while ( $query->have_posts() ) : $query->the_post(); ?>
                                    <?php get_template_part('template-parts/unit-event-upcoming'); ?>
                                <?php wp_reset_postdata();
                                endwhile; else : ?>
                                	<p class="emph"><i class="fa-solid fa-triangle-exclamation"></i>There are currently no upcoming events to show.</p>
                                <? endif; ?>
                        </section>
                        <hr class="unit-hr">
                        <section>
                            <h2>Recent Events</h2>
                                <?php 
                                $today = date('Ymd');
                                $today = date('Ymd', mktime(0, 0, 0, date("m"), date("d")-1, date("Y"))); // less one day to show day after event date
                                $args = array (
                                    'post_type' => 'events',
                                    'post_status' => 'publish', // only show published events
                                    'posts_per_page' => 5, // only show recent 5 events
                                    'orderby' => 'meta_value', // order by date
                                    'meta_key' => 'date_picker', // your ACF Date & Time Picker field
                                    'meta_value' => $today, // Use the current time from above
                                    'meta_compare' => '<=', // Compare today's datetime with our event datetime
                                    'order' => 'DESC',
                                    );
                                $query = new WP_Query( $args );
                                if ( $query->have_posts() ) :
                                while ( $query->have_posts() ) : $query->the_post(); ?>
                                    <?php get_template_part('template-parts/unit-event-recent'); ?>
                                <?php wp_reset_postdata();
                                endwhile; else : ?>
                                	<p class="emph"><i class="fa-solid fa-triangle-exclamation"></i>There are currently no recent events to show.</p>
                                <? endif; ?>
                        </section>
    		    	</div>
    			</div>
    		</div>
    	</section>
    </section>

<?php get_footer(); ?>