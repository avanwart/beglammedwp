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
								<div role="tabpanel">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs halfs" role="tablist">
										<li role="presentation" class="active"><a href="#stylists" aria-controls="stylists" role="tab" data-toggle="tab">Hair Stylists &amp; Makeup Artists</a></li>
										<li role="presentation" class="two"><a href="#corporate" aria-controls="corporate" role="tab" data-toggle="tab">In-house Positions</a></li>
									</ul>
									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="stylists">
											<div class="row">
												<div class="col-sm-12">
													<p><strong>Interested in becoming a hair stylist or makeup artist for beGlammed?</strong></p>
													<p>Join a world-class team of beauty professionals and enjoy flexible hours, while working among the best in the industry! We’re always looking for excellent hair stylists and makeup artists to join our team in all cities across the U.S., especially in Austin, Phoenix, or the San Francisco area. We encourage you to apply!</p>
													<div class="text-center"><a href="<?php bloginfo('url'); ?>/?p=824" class="btn btn-primary">Apply Now</a></div>
												</div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane" id="corporate">
											<div class="row">
												<div class="col-sm-12">
													<p>We’re looking for talented individuals who want to be a part of creating something extraordinary. Working at beGlammed is like joining a family, and there are tremendous opportunities to grow our organization across the country. We don’t have any openings available at this point in time but please check back in the near future for updates. </p>
												</div>
											</div>
										</div>
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