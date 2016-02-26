<?php
/*
Template Name: Testimonials
*/
?>

<?php get_header(); ?>	

<section class="about testimonials">
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

							<div class="row visible-xs">
								<div class="col-sm-12">
									<?php footer_bucket_1(); ?>
								</div>
							</div>
							
							<?php if(get_field('testimonials')): ?>

							<?php while(has_sub_field('testimonials')): ?>
								<br>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'row testimonial clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								
								<div class="logo col-sm-4 text-center">
									<img src="<?php the_sub_field('headshot'); ?>" alt="" class="img-thumbnail img-responsive"><br>
								</div>

								<div class="col-sm-8">
									<blockquote><span>&ldquo;</span><?php the_sub_field('quote'); ?> <small><?php the_sub_field('name'); ?><em><?php the_sub_field('city'); ?></em></small></blockquote>
								</div>
								
							</article> <!-- end article -->
							<?php endwhile; endif; ?>

							<?php wp_reset_postdata(); ?>
							
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
		
	});
</script>

<?php get_footer(); ?>