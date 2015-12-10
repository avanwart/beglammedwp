<?php
/*
Template Name: Product
*/
?>

<?php get_header(); ?>
<div class="product">
	<section class="hero">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="text-center">HIPAA Compliant <br class="visible-sm"/>Telehealth Software</h1>
					<h2 class="text-center">Monitor patients diet and lifestyle with wearable devices <br class="visible-sm"/>and mobile applications.</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-8 col-md-offset-2 text-center">
					<ul>
						<li><i class="glyphicon glyphicon-ok"></i> HIPAA Compliant Video Consultations</li>
						<li><i class="glyphicon glyphicon-ok"></i> Access to wearable device data such as Fitbit in real time</li>
						<li><i class="glyphicon glyphicon-ok"></i> Easy scheduling and payment collection with Stripe</li>
						<li><i class="glyphicon glyphicon-ok"></i> Review medical records and test results</li>
						<li><i class="glyphicon glyphicon-ok"></i> Share your screen and make comments</li>
						<li><i class="glyphicon glyphicon-ok"></i> Brand your telehealth portal with your practice’s logo</li>
					</ul>
					<a href="<?php bloginfo('url'); ?>/sign-up?plan=monthly" class="btn btn-lg btn-primary">Free 14 Day Trial <i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</section>
	<section class="app">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0">
							<div class="video-wrapper">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/CvVCI14fxjE?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
							<h2 class="text-center">The Fruit Street App</h2>
							<ul>
								<li>Patients can easily track their physical activity levels using wearable devices and view their Fitbit data (coming soon)</li>
								<li>The user dashboard provides patients with a snapshot of number of steps taken, hours slept, calories burned, heart rate, blood pressure and blood glucose</li>
								<li>Easily create a food diary and take notes alongside your images </li>
								<li>View goals your healthcare provider sets for you (coming soon)</li>
								<li>Conduct a video consultation with your healthcare provider (coming soon)</li>
							</ul>
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
	<section class="patients">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4 text-center">
					<img src="<?php bloginfo('template_directory'); ?>/library/images/patient2.jpg" class="img-responsive img-thumbnail" alt="">
				</div>
				<div class="col-sm-8 col-md-6">
					<h2>Special Features For Patients</h2>
					<ul>
						<li>Sync your Fitbit accounts and share the data with your healthcare provider</li>
						<li>Upload medical tests from multiple sources for your records</li>
						<li>Take pictures of your food and receive feedback from your healthcare provider</li>
						<li>View goals that your healthcare provider sets for you</li>
						<li>Send and receive HIPAA compliant chat messages </li>
					</ul>
					<a href="<?php bloginfo('url'); ?>/sign-up" class="btn btn-lg btn-primary">Free 14 Day Trial <i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>			
			</div>
		</div>
	</section>
</div>	
		
<script>
	jQuery(document).ready(function($){

		

	});
</script>

<?php get_footer(); ?>