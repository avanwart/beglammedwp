<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>	

<section class="about services">
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
									<?php footer_bucket_2(); ?>
								</div>
							</div>
							
							<br class="hidden-xs">
							
							<div class="row">
								<div class="col-sm-12 text-center">
									<h2>Hair Services</h2>
									
								</div>
							</div>
							<?php if(get_field('hair_services')): ?>
							
							<?php while(has_sub_field('hair_services')): ?>
							
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'row clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<div class="col-sm-12 col-md-10 col-md-offset-1">
									<h3><?php the_sub_field('service_name'); ?></h3>
									<p><?php the_sub_field('service_description'); ?><br/><?php the_sub_field('service_duration'); ?>, <?php the_sub_field('service_starting_price'); ?></p>
									<a href="#" class="btn btn-primary">Book Now</a>
								</div>
							</article> <!-- end article -->

							<?php endwhile; endif; ?>

							<?php wp_reset_postdata(); ?>

							<!-- divider -->
							<div class="text-center"><hr/></div>
							
							<div class="row">
								<div class="col-sm-12 text-center">
									<h2>Makeup Services</h2>
								</div>
							</div>
							<?php if(get_field('makeup_services')): ?>
							
							<?php while(has_sub_field('makeup_services')): ?>
							
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'row clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<div class="col-sm-12 col-md-10 col-md-offset-1 ">
									<h3><?php the_sub_field('service_name'); ?></h3>
									<p><?php the_sub_field('service_description'); ?><br/><?php the_sub_field('service_duration'); ?>, <?php the_sub_field('service_starting_price'); ?></p>
									<a href="#" class="btn btn-primary">Book Now</a>
								</div>
							</article> <!-- end article -->

							<?php endwhile; endif; ?>

							<?php wp_reset_postdata(); ?>
							<!-- divider -->
							<div class="text-center"><hr/></div>
							
							<div class="row">
								<div class="col-sm-12 text-center">
									<h2>Wedding Services</h2>
								</div>
							</div>
							<?php if(get_field('wedding_services')): ?>
							
							<?php while(has_sub_field('wedding_services')): ?>
							
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'row clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<div class="col-sm-12 col-md-10 col-md-offset-1 ">
									<h3><?php the_sub_field('service_name'); ?></h3>
									<p><?php the_sub_field('service_description'); ?><br/><?php the_sub_field('service_duration'); ?>, <?php the_sub_field('service_starting_price'); ?></p>
									<a href="#" class="btn btn-primary">Book Now</a>
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