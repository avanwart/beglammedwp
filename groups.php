<?php
/*
Template Name: Groups
*/
?>

<?php get_header(); ?>	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
	$url = $thumb['0'];
?>
<section class="groups hero" style="background-image: url(<?=$url?>); background-size: cover; background-position: center center">
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="groups hero form">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2>Share the Gift of Beauty</h2>
				<p class="intro">Get 20% off when you book for a group of 4 or more</p>
			</div>
			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
				<p>Let’s face it, whether it’s a powder room run or a night with friends, us ladies tend to travel in packs! Queue beGlammed. We’re here not only to make getting ready a lot easier, but also more FUN! Whether you want to host a beGlammed party for a group of your closest friends, or have a team of stylists on-site at one of your events, there are so many ways to beGlammed together! Inquire about our group discounts!</p>
				<form action="" class="form">
					<div class="form-group">
						<div class="input-group">
							<select name="location" id="location" class="form-control special">
								<option value="">Location</option>
								<option value=""></option>
								<option value=""></option>
								<option value=""></option>
								<option value=""></option>
							</select>
							<select name="date" id="date" class="form-control special">
								<option value="">Date</option>
								<option value=""></option>
								<option value=""></option>
								<option value=""></option>
								<option value=""></option>
							</select>
							<select name="time" id="time" class="form-control special">
								<option value="">Time</option>
								<option value=""></option>
								<option value=""></option>
								<option value=""></option>
								<option value=""></option>
							</select>
							<div class="input-group-btn">
								<button class="btn btn-primary btn-block">Book an Appointment</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
</div>
<section class="groups features" id="services">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2>Book Your Next Event With Us</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1">
				<div role="tabpanel">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#groups" aria-controls="groups" role="tab" data-toggle="tab">Groups</a></li>
						<li role="presentation" class="two"><a href="#events" aria-controls="events" role="tab" data-toggle="tab">Events</a></li>
						<li role="presentation" class="three"><a href="#tutorials" aria-controls="tutorials" role="tab" data-toggle="tab">Beauty Tutorials</a></li>
						<li role="presentation" class="three"><a href="#photos" aria-controls="photos" role="tab" data-toggle="tab">Film, Fashion &amp; Photos</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="groups">
							<div class="row">
								<div class="col-sm-6">
									<h3>Ladies Night Out</h3>
									<p>Grab a group of your closest girlfriends, some champagne, and prepare to be pampered! </p>
									<p>The best part? You get 20% off if you book for a group of four or more. Just call or email us ahead of time to ensure the discount is applied!</p>
									<a href="#" class="btn btn-lg btn-primary btn-block">Book Now</a>
								</div>
								<div class="col-sm-6">
									<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/group-pic.jpg" alt="Selfie style photo of lovely ladies with hair and makeup smiling">
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="events">
							<div class="row">
								<div class="col-sm-6">
									<h3>Bring Beauty to All of Your Guests</h3>
									<p>Birthday parties, corporate events, sweet sixteens – have a party like no other! Our beauty pop-ups add to the atmosphere of any event by providing on-site hair and makeup services. We love customizing the services we offer to fit individual themes!</p>
									<p>Make your party one to remember!</p>
									<a href="#" class="btn btn-lg btn-primary btn-block">Book Now</a>
								</div>
								<div class="col-sm-6">
									<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/events-pic.jpg" alt="Selfie style photo of lovely ladies with hair and makeup smiling">
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tutorials">
							<div class="row">
								<div class="col-sm-6">
									<h3>Learn to beGlammed at Home</h3>
									<p>Learn pro beauty tips! Book beGlammed certified stylists and makeup artists for beauty tutorials to learn how to beGlammed for any occasion.</p>
									<p>Want to learn how to create a specific look?  No problem. Let us know what type of look you’re trying to create and we’ll match you with the right expert beauty professional in your area.  Beauty tutorials can be booked for individuals or for a group.</p>
									<a href="#" class="btn btn-lg btn-primary btn-block">Book Now</a>
								</div>
								<div class="col-sm-6">
									<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/tutorial-pic.jpg" alt="Selfie style photo of lovely ladies with hair and makeup smiling">
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="photos">
							<div class="row">
								<div class="col-sm-6">
									<h3>beGlammed on Set</h3>
									<p>Book a beGlammed beauty professional for a photography/film shoot or fashion event. beGlammed stylists and makeup artists in our  Glamorous tier have extensive industry experience, a portfolio of published work and high profile and/or celebrity clientele.</p>
									<a href="#" class="btn btn-lg btn-primary btn-block">Book Now</a>
								</div>
								<div class="col-sm-6">
									<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/film-pic.jpg" alt="Selfie style photo of lovely ladies with hair and makeup smiling">
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<p class="text-center">Would you like to be contacted regarding your group inquiry?  Fill out the <a href="<?php bloginfo('url'); ?>/group-inquiry">group inquiry form &raquo;</a></p>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>
<script>
	jQuery(document).ready(function($){
		
	});
</script>

<?php get_footer(); ?>