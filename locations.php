<?php
/*
Template Name: Locations
*/
?>

<?php get_header(); ?>	

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
	$url = $thumb['0'];
?>
<section class="groups hero" style="background-image: url(<?=$url?>); background-size: cover; background-position: center center">
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
<?php endwhile; endif; ?>
<section class="visible-xs" style="background: #fdf6f3">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php footer_bucket_1(); ?>
			</div>
		</div>
	</div>
</section>
<section class="locations">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h3><?php the_field('headline_1'); ?></h3>
				<div class="row">
					<div class="col-xs-12 col-sm-4 text-center">
						<ul class="cities">
							<?php
								global $post;
								$args = array( 'posts_per_page' => 5, 'category_name' => 'locations', 'order' => 'ASC', 'orderby' => 'title' );
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);
							?>
							<li><!--<a href="<?php the_permalink(); ?>">--><?php the_title(); ?></a></li>
							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>
						</ul>
					</div>
					
					<div class="col-xs-12 col-sm-4 text-center">
						<ul class="cities">
							<?php
								global $post;
								$args = array( 'posts_per_page' => 5, 'offset' => 5, 'category_name' => 'locations', 'order' => 'ASC', 'orderby' => 'title' );
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);
							?>
							<li><!--<a href="<?php the_permalink(); ?>">--><?php the_title(); ?></a></li>
							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>
						</ul>
					</div>
					
					<div class="col-xs-12 col-sm-4 text-center">
						<ul class="cities">
							<?php
								global $post;
								$args = array( 'posts_per_page' => 10, 'offset' => 10, 'category_name' => 'locations', 'order' => 'ASC', 'orderby' => 'title' );
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);
							?>
							<li><!--<a href="<?php the_permalink(); ?>">--><?php the_title(); ?></a></li>
							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>
						</ul>
					</div>
					
				</div>

				<h3><?php the_field('headline_2'); ?></h3>

				<div class="row">
					<div class="col-sm-4 text-center">
						<ul class="cities">
							<li>Atlanta</li>
							<li>Boston</li>
							<li>Nashville</li>
							<li>Orlando</li>
						</ul>
					</div>
					<div class="col-sm-4 text-center">
						<ul class="cities">
							<li>Washington D.C.</li>
							<li>Chicago</li>
							<li>Toronto</li>
							<li>Vancouver</li>
						</ul>
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