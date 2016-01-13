<?php
/*
Template Name: Membership
*/
?>

<?php get_header(); ?>	

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
	$url = $thumb['0'];
?>
<section class="membership hero" style="background-image: url(<?=$url?>); background-size: cover; background-position: center center">
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
<section class="membership benefits white">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2>Get More beGlammed in Your Life </h2>
			</div>
		</div>
	</div>
</section>
<section class="membership look">
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
				<p class="medium">Would you like a bridal consultant to contact you? Fill out our <a href="#">bridal inquiry form &raquo;</a></p>
			</div>
		</div>
	</div>
</section>
<section class="membership variety pink">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2 class="flat">Perfect for the Entire Bridal Party</h2>
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
	</div>
</section>
<section class="membership services">
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
						<p><?php the_sub_field('service_description'); ?><br/>Duration: <?php the_sub_field('service_duration'); ?><br/>starting at <?php the_sub_field('service_starting_price'); ?></p>
						<a href="#" class="btn btn-primary">Book Now</a>
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
						<p><?php the_sub_field('service_description'); ?><br/>Duration: <?php the_sub_field('service_duration'); ?><br/>starting at <?php the_sub_field('service_starting_price'); ?></p>
						<a href="#" class="btn btn-primary">Book Now</a>
					</div>
				</article> <!-- end article -->
			</div>
		<?php endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<section class="membership faq ash">
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

	});
</script>

<?php get_footer(); ?>