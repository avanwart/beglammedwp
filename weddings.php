<?php
/*
Template Name: Weddings
*/
?>

<?php get_header(); ?>	

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
	$url = $thumb['0'];
?>
<section class="weddings hero" id="book" style="background-image: url(<?=$url?>); background-size: cover; background-position: center center">
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-7 text-center">
					<h1 class="page-title"><?php the_title(); ?></h1>
					<p class="intro">Top-rated beauty professionals create the perfect look<br class="hidden-xs"/>for your wedding, wherever you are.  </p>
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
<section class="weddings benefits ash">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 text-center">
				<img class="icon" src="<?php bloginfo('template_directory'); ?>/library/images/relax-icon2.png" alt="">
				<h3>Eliminate Stress</h3>
				<p>Let our beauty professionals come to you while you relax in your home or hotel</p>
			</div>
			<div class="col-sm-4 text-center">
				<img class="icon" src="<?php bloginfo('template_directory'); ?>/library/images/clipboard-icon.png" alt="">
				<h3>Free Consultation</h3>
				<p>Trial hair and makeup when you book any bridal service</p>
			</div>
			<div class="col-sm-4 text-center">
				<img class="icon" src="<?php bloginfo('template_directory'); ?>/library/images/trophy-icon.png" alt="">
				<h3>Top Beauty Professionals</h3>
				<p>Work with our hand-picked beauty experts</p>
			</div>
		</div>
	</div>
</section>
<section class="weddings look">
	<div class="container">
		<div class="row visible-xs visible-sm">
			<div class="col-sm-12">
				<?php footer_bucket_2(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2>We Create the Perfect Look for Your Wedding Day </h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 bucket text-right"><img src="<?php bloginfo('template_directory'); ?>/library/images/wedding-model-1.jpg" class="img-responsive" alt=""></div>
			<div class="col-sm-4 bucket"><img src="<?php bloginfo('template_directory'); ?>/library/images/wedding-model-2.jpg" class="img-responsive" alt=""></div>
			<div class="col-sm-4 bucket"><img src="<?php bloginfo('template_directory'); ?>/library/images/wedding-model-3.jpg" class="img-responsive" alt=""></div>
		</div>
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="#" class="btn btn-lg btn-primary">Book Now</a>
				<br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 text-center">
				<p class="medium">Would you like a bridal consultant to contact you? Fill out our <a href="<?php bloginfo('url'); ?>/?p=852">bridal inquiry form &raquo;</a></p>
			</div>
		</div>
	</div>
</section>
<section class="weddings variety pink">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2 class="flat">Beauty for the Entire Bridal Party</h2>
				<p>Get 15% off your bridal appointment when you book for 3 or more bridesmaids.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 bucket text-center">
				<img src="<?php bloginfo('template_directory'); ?>/library/images/wedding-model-4.jpg" class="" alt="">
				<h3>Flower Girls</h3>
			</div>
			<div class="col-sm-4 bucket text-center">
				<img src="<?php bloginfo('template_directory'); ?>/library/images/wedding-model-5.jpg" class="middle" alt="">
				<h3>Bridesmaids</h3>
			</div>
			<div class="col-sm-4 bucket text-center">
				<img src="<?php bloginfo('template_directory'); ?>/library/images/wedding-model-6.jpg" class="" alt="">
				<h3>Wedding Party</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="#book" class="scroll btn btn-lg btn-primary">Book Now</a>
			</div>
		</div>
	</div>
</section>
<section class="weddings services">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2>Bridal Services</h2>
			</div>
		</div>

		<!-- Hair Services -->
		<div class="row">
		<?php if(get_field('hair_services')): ?>
		<?php while(has_sub_field('hair_services')): ?>
			<div class="col-sm-6 bucket">
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'row clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<div class="col-sm-12 col-md-10 col-md-offset-1">
						<h3><?php the_sub_field('service_name'); ?></h3>
						<p><?php the_sub_field('service_description'); ?><br/><?php the_sub_field('service_duration'); ?>, <?php the_sub_field('service_starting_price'); ?></p>
						<a href="#book" class="scroll btn btn-primary">Book Now</a>
					</div>
				</article> <!-- end article -->
			</div>
		<?php endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>
		</div>
		
		<!-- Makeup Services -->
		<div class="row">
		<?php if(get_field('makeup_services')): ?>					
		<?php while(has_sub_field('makeup_services')): ?>
			<div class="col-sm-6 bucket">
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'row clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<div class="col-sm-12 col-md-10 col-md-offset-1">
						<h3><?php the_sub_field('service_name'); ?></h3>
						<p><?php the_sub_field('service_description'); ?><br/><?php the_sub_field('service_duration'); ?>, <?php the_sub_field('service_starting_price'); ?></p>
						<a href="#book" class="scroll btn btn-primary">Book Now</a>
					</div>
				</article> <!-- end article -->
			</div>
		<?php endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<section class="weddings faq ash">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2>Wedding Frequently Asked Questions</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-8 col-md-offset-2">
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
	</div>
</section>

						
							
<?php endwhile; endif; ?>

</section>

<script>
	jQuery(document).ready(function($){
		
		// Initialize accordion UI and open the first accordion panel
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');

		// Smooth scroll functionality
		$('.scroll, .scroll a').smoothScroll({
			offset: 0,
			easing: 'swing'
		});

	});
</script>

<?php get_footer(); ?>