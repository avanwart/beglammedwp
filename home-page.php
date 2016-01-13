<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<section class="hero">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h1>Look Your Best</h1>
				<h2>Top rated beauty professionals <br class="hidden-xs"/>come directly to you.</h2>
			</div>
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
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
	</div>
</section>
<section class="logos lightGrey">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<img class="hidden-xs" src="<?php bloginfo('template_directory'); ?>/library/images/logo-bar-desktop.jpg" alt="Marie Claire logo, People logo, Vanity Fair logo, Nylon logo, Los Angeles Times logo">
				<img class="visible-xs img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/logo-bar-desktop.jpg" alt="Marie Claire logo, People logo, Vanity Fair logo, Nylon logo, Los Angeles Times logo">
			</div>
		</div>
	</div>
</section>

<section class="features" id="features">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="push">Beauty for Any Occasion</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 text-center">
				<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/individuals-service.jpg" alt="">
				<h3>Individuals</h3>
				<p>Full makeup and hair styling in the comfort of your home, office or hotel.</p>
				<a href="#" class="btn btn-primary">Book Now</a> <a href="?p=7" class="btn btn-default">Learn more</a>
			</div>
			<div class="col-sm-4 text-center">
				<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/groups-service.jpg" alt="">
				<h3>Groups</h3>
				<p>Perfect for a night out on the town, corporate events or photo shoots.</p>
				<a href="#" class="btn btn-primary">Book Now</a> <a href="?p=805" class="btn btn-default">Learn more</a>
			</div>
			<div class="col-sm-4 text-center">
				<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/wedding-service.jpg" alt="">
				<h3>Weddings</h3>
				<p>Full service appointments for weddings, rehearsals, bridal showers and engagements.</p>
				<a href="#" class="btn btn-primary">Book Now</a> <a href="?p=26" class="btn btn-default">Learn more</a>
			</div>
			</div>
		</div>
	</div>
</section>

<section class="testimonials ash">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Our Clients <i class="glyphicon glyphicon-heart"></i> beGlammed</h2>
			</div>
		</div>
		<!-- Get Testimonials Custom Fields from the Page -->
		<?php if(get_field('testimonials')): ?>
			<div class="row">
				<!-- open the Repeater loop -->
				<?php while(has_sub_field('testimonials')): ?>
					<div class="col-sm-4 text-center testimonial">
						<img class="thumbnail img-circle" src="<?php the_sub_field('headshot'); ?>" alt="">
						<blockquote>
							&ldquo;<?php the_sub_field('quote'); ?>&rdquo; <small><?php the_sub_field('name'); ?>,	<em><?php the_sub_field('city'); ?></em></small>
						</blockquote>
					</div>
				<?php endwhile; ?>
				<!-- close the Repeater loop -->
			</div>
		<?php endif; ?>
		<!-- End of Testimonials dynamic content -->
		<div class="row">
			<div class="col-sm-12 text-center">
				<p><a href="?p=759">More testimonials &raquo;</a></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="sign-up" class="btn btn-primary">Book Now</a>
			</div>
		</div>
	</div>
</section>

<section class="faq motif">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<h1 class="push">Frequently Asked Questions</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<!-- Get FAQ Repeater custom fields from this Page -->
				<?php if(get_field('faq')): ?>
					<div class="panel-group" id="accordion">
						<!-- open the loop -->
						<?php while(has_sub_field('faq')): ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_sub_field('id'); ?>" class="collapsed">
											<i class="glyphicon glyphicon-triangle-right"></i><i class="glyphicon glyphicon-triangle-bottom"></i>	<?php the_sub_field('question'); ?>
										</a>
									</h4>
								</div>
								<div id="collapse<?php the_sub_field('id'); ?>" class="panel-collapse collapse">
									<div class="panel-body">
										<?php the_sub_field('answer'); ?>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						<!-- close the loop -->
					</div>
				<?php endif; ?>
				<!-- end of Repeater custom fields and dynamic content -->
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p class="text-center">
					Don't see your question here?  <a href="?p=28">More FAQs &raquo;</a>
				</p>
			</div>
		</div>
	</div>
</section>

<section class="app ash">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1 text-right">
				<img src="<?php bloginfo('template_directory'); ?>/library/images/iphone.jpg" class="phone" alt="">
			</div>
			<div class="col-sm-4">
				<h2>beGlammed for iOS &amp; Android</h2>
				<form action="">
					<div class="form-group">
						<label for="mobile">Enter your number and we'll text you a link</label>
						<input class="form-control input-lg" type="tel" id="mobile" placeholder="203-322-2345">
					</div>
					<button class="btn btn-lg btn-primary btn-block">Text me a link</button>
				</form>
				<img src="<?php bloginfo('template_directory'); ?>/library/images/app-badges.jpg" class="img-responsive" alt="">
			</div>
		</div>
	</div>
</section>

<script>
	jQuery(document).ready(function($){

		// If there's a carousel on the page, activate it
		$('.carousel').carousel();

		// Input mask - Restrict count, formatting, numbers only
		$.extend($.inputmask.defaults, {
			'placeholder': " "
		});
		$('input[type="tel"]').focus(function(){
			$(this).inputmask("(999) 999-9999");
		});

		// Activate toolips
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		});

		// Initialize accordion UI and open the first accordion panel
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');

		// Smooth Scroll Functionality
		$('.scroll, .scroll a').smoothScroll({
			offset: 0,
			easing: 'swing'
		});


		// Find out what browser they're using
		var userAgent = window.navigator.userAgent;

		// If ipad or iphone, do something
		if (userAgent.match(/iPad/i) || userAgent.match(/iPhone/i)) {
			
		}
		// Use below if not iPad or iPhone
		else {
			
		}

	});
			</script>

			<?php get_footer(); ?>