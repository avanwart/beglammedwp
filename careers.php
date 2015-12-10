<?php
/*
Template Name: Careers
*/
?>

<?php get_header(); ?>
<section class="about careers">
	<div class="container">
		<div class="row">
			<div class="col-lg-11 col-md-12">
				<div class="row">
					<div class="col-sm-12 col-md-3 hidden-xs hidden-sm">
						<div class="well">
							<?php
								get_sidebar();
							?>
						</div>
					</div>
					<div class="col-sm-12 col-md-9 main-content">
						<div class="card">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
								$url = $thumb['0'];
							?>
							<header style="background-image: url(<?=$url?>);">
								<div class="overlay">
									<h1 class="page-title"><?php the_title(); ?></h1>
								</div>
							</header>
							<div class="row visible-xs visible-sm">
								<div class="col-sm-12">
									<?php footer_bucket_1(); ?>
								</div>
							</div>
							<div class="inner">
								<?php the_content(); ?>
								<div class="text-center">
									<hr>
								</div>
								<div class="row">
									<div class="col-sm-12 text-center">
										<h2 class="flat">Great Benefits</h2>
									</div>
								</div>
				        <div class="row">
				          <div class="col-sm-4 text-center">
				              <h3>401k</h3>
				              <p>Monthly contributions toward your retirement fund..</p>
				          </div>
				          <div class="col-sm-4 text-center">
				              <h3>Health Insurance</h3>
				              <p>Little to no copay and low deductibles.</p>
				          </div>
				          <div class="col-sm-4 text-center">
				              <h3>Paid Time Off</h3>
				              <p>We offer 3 weeks paid vacation each year.</p>
				          </div>
				        </div>
				        <div class="row">
				          <div class="col-sm-4 text-center">
				              <h3>Gym Membership</h3>
				              <p>Full access to fitness equipment, exercise classes, pool and more.</p>
				          </div>
				          <div class="col-sm-4 text-center">
				              <h3>Company Events</h3>
				              <p>Each quarter we take a day off to do something fun together.</p>
				          </div>
				          <div class="col-sm-4 text-center">
				              <h3>Yearly Bonuses</h3>
				              <p>We make sure to reward our people for hard work.</p>
				          </div>
				        </div>
				        <div class="text-center"><hr></div>
				        <div class="row">
				        	<div class="col-sm-12 text-center">
				        		<h2>Open Positions</h2>
				        	</div>
				        </div>
				        <div class="row">
									<div class="col-sm-12">
										<!-- Get Jobs Repeater custom fields from this Page -->
										<?php if(get_field('jobs')): ?>
											<div class="panel-group" id="accordion">
											<!-- open the loop -->
											<?php while(has_sub_field('jobs')): ?>
												<div class="panel panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_sub_field('id'); ?>" class="collapsed">
																<i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-minus"></i>	<?php the_sub_field('job_title'); ?>
															</a>
														</h4>
													</div>
													<div id="collapse<?php the_sub_field('id'); ?>" class="panel-collapse collapse">
														<div class="panel-body">
															<?php the_sub_field('job_description'); ?>
						                  <div class="text-center">
						                  	<a class="btn btn-lg btn-primary" href="<?php the_sub_field('apply_link'); ?>" class="button">View job description <i class="glyphicon glyphicon-chevron-right"></i></a>
						                  </div>
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
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.inview.min.js"></script>
<script>
	jQuery(document).ready(function($){

		// Fade hero functionality
		$('.hero').addClass('active');

		// Affix Sidebar
		$(window).scroll(function() {
			if ($(window).scrollTop() >= 160) {
				$('#sidebar').addClass('affix');
			} else {
				$('#sidebar').removeClass('affix');
			}
		});
	});
</script>

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