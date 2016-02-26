<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-11 col-md-12">
				<div class="row">
					<div class="col-sm-3 col-md-3 hidden-xs hidden-sm">
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
							<div class="row visible-xs">
								<div class="col-sm-12">
									<?php footer_bucket_1(); ?>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
										<?php the_content(); ?>
									</article> <!-- end article -->
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
<script>
	jQuery(document).ready(function($){

		// Fade hero functionality
		$('.hero').addClass('active');

		// Affix Sidebar
		/*$(window).scroll(function() {
			if ($(window).scrollTop() >= 160) {
				$('#sidebar').addClass('affix');
			} else {
				$('#sidebar').removeClass('affix');
			}
		});*/

		setTimeout(function(){
			$('.hero .page-title').addClass('active');
		}, 600);

		if (window.location.hash == "#productmarketingmanager") {
			$('#field_position2').val('Product Marketing Manager').addClass('active');
		} else if (window.location.hash == "#seniorsales") {
			$('#field_position2').val('Senior Sales Rep').addClass('active');
		}

		// Affix functionality
		/*$('.hero').bind('inview', function (event, visible) {
      if (visible == true) {
        // element is now visible in the viewport
       $('.well').removeClass('affix');
          
      } else {
      	// element is no longer visible in the viewport
        $('.well').addClass('affix');
      }
    });*/

	});
</script>
<?php get_footer(); ?>