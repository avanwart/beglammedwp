<?php
/*
Template Name: Pricing
*/
?>

<?php get_header(); ?>
<div class="pricing">
	<?php /* <section class="hero">
		<div class="container">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 text-center">
				<h1>Get Started Now for $0</h1>
				<h2>Try it now, free for 14 days.</h2>
				<a href="<?php bloginfo('url'); ?>/sign-up" class="btn btn-lg btn-primary">Free 14 Day Trial <i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
	</section> */ ?>

	<section class="plans">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2>Simple Pricing.</h2>
					<p class="intro">Try it free for 14 days.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
					<div class="row">
						<div class="col-sm-4">
							<div class="card">
								<h2>Monthly</h2>
								<h3>$300/mo.</h3>
								<a href="<?php bloginfo('url'); ?>/sign-up?plan=monthly" class="btn btn-primary btn-lg">Get Started <i class="glyphicon glyphicon-chevron-right"></i></a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card">
								<div class="save">Save<br>33%</div>
								<h2>Yearly</h2>
								<h3>$200/mo.</h3>
								<a href="<?php bloginfo('url'); ?>/sign-up?plan=annual" class="btn btn-primary btn-lg">Get Started <i class="glyphicon glyphicon-chevron-right"></i></a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card">
								<h2>Enterprise</h2>
								<h3><small>5+ user accounts</small></h3>
								<a href="<?php bloginfo('url'); ?>/enterprise-accounts" class="btn btn-primary btn-lg">Contact Us <i class="glyphicon glyphicon-chevron-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		<section class="providers motif">
			<div class="container">
				<div class="row">
					<div class="col-sm-9 col-md-6 col-md-offset-1">
						<h2>Special Features For Providers</h2>
						<ul>
							<li>Create customized health questionnaires and intake forms</li>
							<li>Set your availability for video consultations</li>
							<li>Set patient goals and monitor their progress</li>
							<li>Collect credit card payments for video consultations</li>
							<li>Send HIPAA compliant chat messages to your patients </li>
							<li>Maintain clinical notes during a video call and view past session notes</li>
						</ul>
					</div>		
					
				</div>
			</div>
		</section>
	</div>

<script>
	jQuery(document).ready(function($){

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