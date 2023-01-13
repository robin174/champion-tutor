<?php
/**
* Template Name: CT Contact
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
		
		<section class="org--page-default type--bg-white">
			<section style="background-color: #efefef; padding: 50px 0;"><!-- check how other sections are made-->
	    		<div class="container" >
	    			<div class="row justify-content-center"><!-- parent tag, check in Capsule -->
						<div class="col-12 col-md-6">
							<!-- Capsule CRM form, https://champion-tutor.capsulecrm.com/ -->
							<form class="mol--form-capsule" action="https://service.capsulecrm.com/service/newlead" accept-charset="UTF-8" method="post">
								<!-- <input type="hidden" name="DEVELOPER" value="TRUE"> -->
								<input type="hidden" name="FORM_ID" value="da7eca6e-f83f-43cb-b0b8-eaf43032b541">
								<input type="hidden" name="COMPLETE_URL" value="https://www.champion-tutor.co.uk/">
								<section>
									<h3><i class="fak fa-use-ct-crown"></i>About you</h3>
									<div class="form-row">
										<label class="form-label">First name</label><input placeholder="First name" class="form-control" type="text" name="FIRST_NAME">
									</div>
									<div class="form-row">
										<label class="form-label">Last name</label><input placeholder="Last name" class="form-control" type="text" name="LAST_NAME">
									</div>
									<div class="form-row">
										<label class="form-label">Email address</label><input placeholder="Email address" class="form-control" type="email" name="EMAIL">
									</div>
								</section>
								<section>
									<h3><i class="fak fa-use-ct-crown"></i>Your child</h3>
									<div class="form-row">
										<label class="form-label">First name</label><input placeholder="Child's first name" class="form-control" type="text" name="CUSTOMFIELD[first_name_child]">
									</div>
									<div class="form-row">
										<label class="form-label">Last name</label><input placeholder="Child's last name" class="form-control" type="text" name="CUSTOMFIELD[last_name_child]">
									</div>
								</section>
								<section>
									<h3><i class="fak fa-use-ct-crown"></i>Your enquiry</h3>
									<div class="form-row form-group">
										<label class="form-label">How can we help?</label><input type="textarea" name="NOTE" class="form-control" rows="4" placeholder="Your enquiry"></textarea>
									</div>
									<!-- 
									<div class="form-row">
										<label class="form-label">How can we help?</label><input class="form-control" type="text" name="NOTE">
									</div>
									-->
								</section>
								<button class="button" type="submit">Submit</button>
								<!-- check the above as no longer an input -->
							</form>
							<!-- Thank you page for COMPLETE_URL -->
						</div>
					</div>
				</div>
			</section>
			<?php /*
			<hr>
			<section style="background-color: #eeeeee;">
				<div class="container">
	    			<div class="row justify-content-center">
						<div class="col-12 col-md-8">
							<h4>If you are a tutor? (tutor tag), add sections</h4>
						</div>
					</div>
				</div>
			</section>
			*/ ?>
		</section>

		<section class="mol--page-main">
			<?php get_template_part('template-parts/unit-page-sections'); ?>
		</section>
	</section>

<?php get_footer(); ?>