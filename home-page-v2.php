<?php
/*
Template Name: Home Page v2
*/
?>

<?php get_header(); ?>
<section class="hero" style="background-image: url('<?php the_field('hero_background'); ?>');">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h1>Look Your Best</h1>
				<h2>Top rated hairstylists and makeup artists <br class="hidden-xs hidden-sm"/>come directly to you.</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-9">
				<?php get_template_part('book'); ?>
			</div>
		</div>
		</div>
	</div>
</section>
<section class="logos darkPink">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<img class="hidden-xs" src="<?php bloginfo('template_directory'); ?>/library/images/logo-bar-desktop.jpg" alt="Marie Claire logo, People logo, Vanity Fair logo, Nylon logo, Los Angeles Times logo">
				<img class="visible-xs img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/logo-bar-mobile.jpg" alt="Marie Claire logo, People logo, Vanity Fair logo, Nylon logo, Los Angeles Times logo">
			</div>
		</div>
	</div>
</section>

<section class="features" id="features">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="push">Hair and Makeup <br class="visible-xs">for Any Occasion</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 text-center">
				<a href="?p=7"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/individuals-service.jpg" alt=""></a>
				<h3>Individuals</h3>
				<p>Full makeup and hair styling in the comfort<br class="hidden-xs hidden-sm"> of your home, office or hotel.</p>
				<a href="#" class="btn btn-primary">Book Now</a> <a href="?p=7" class="btn btn-default">Learn more</a>
			</div>
			<div class="col-sm-4 text-center">
				<a href="?p=805"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/groups-service.jpg" alt=""></a>
				<h3>Groups</h3>
				<p>Perfect for a night out on the town,<br class="hidden-sm"> corporate events or photo shoots.</p>
				<a href="#" class="btn btn-primary">Book Now</a> <a href="?p=805" class="btn btn-default">Learn more</a>
			</div>
			<div class="col-sm-4 text-center">
				<a href="?p=26"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/library/images/wedding-service.jpg" alt=""></a>
				<h3>Weddings</h3>
				<p>Full service appointments for weddings,<br class="hidden-sm"> rehearsals, bridal showers and engagements.</p>
				<a href="#" class="btn btn-primary">Book Now</a> <a href="?p=26" class="btn btn-default">Learn more</a>
			</div>
			</div>
		</div>
	</div>
</section>

<section class="testimonials pink">
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
					<div class="col-sm-6 col-md-4 text-center testimonial">
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
				<a href="sign-up" class="btn btn-lg btn-primary">Book Now</a>
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

<section class="app pink">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1 text-right hidden-xs">
				<img src="<?php bloginfo('template_directory'); ?>/library/images/iphone.jpg" class="phone" alt="">
			</div>
			<div class="col-sm-4">
				<h2>Download the beGlammed App</h2>
				<form action="">
					<div class="form-group">
						<label for="mobile">Enter your phone number and we'll text you a link.</label>
						<input class="form-control input-lg" type="tel" id="mobile" placeholder="(555) 555-5555">
					</div>
					<button class="btn btn-lg btn-primary btn-block">Text me a download link</button>
				</form>
				<div class="row">
					<div class="col-xs-6">
						<a href="https://itunes.apple.com/us/app/beglammed/id907363128?mt=8" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/app-store-badge.jpg" class="img-responsive" alt=""></a>
					</div>
					<div class="col-xs-6">
						<a href="https://play.google.com/store/apps/details?id=com.beglammed.beglammed&hl=en" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/google-play-badge.jpg" class="img-responsive" alt=""></a>
					</div>
				</div>
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

		// Toggle alert when book button is clicked
		$('a.btn-primary').click(function(e){
			e.preventDefault();
			alert('Take them to booking flow');
		});

		// Toggle alert when "Text me a download link" button is clicked
		$('.app .btn-primary').click(function(e){
			e.preventDefault();
			alert('Send form data to Twilio');
		});

	});
			</script>

			<?php get_footer(); ?>