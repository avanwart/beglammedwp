<?php
/*
Template Name: Leadership
*/
?>

<?php get_header(); ?>

<section class="about leadership standard">
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
									<h1><?php the_title(); ?></h1>
								</div>
							</header>
							<div class="row visible-xs">
								<div class="col-sm-12">
									<?php footer_bucket_1(); ?>
								</div>
							</div>
							<article>
								<!-- Management Team -->
								<div class="row">
									<div class="col-sm-12 col-md-10 col-md-offset-1">
										<?php if( have_rows('leadership_team') ): while ( have_rows('leadership_team') ) : the_row(); ?>
										<div class="row person">
											<div class="col-sm-12">
												<img src="<?php the_sub_field('headshot'); ?>" class="img-responsive headshot"><br/>
												<h2><?php the_sub_field('name'); ?><small><?php the_sub_field('title'); ?></small></h2>
												<p><?php the_sub_field('bio'); ?></p>
											</div>
										</div><!-- end of person row -->
										<?php endwhile; endif;  ?>
									</div>
								</div>
							</article>
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