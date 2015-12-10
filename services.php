<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>

<section class="standard">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4 col-md-4 hidden-xs">
						<?php
							get_sidebar();
						?>
					</div>
					<div class="col-sm-8 col-md-8 col-lg-8 card">
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
						<div class="row">
							<div class="col-sm-12">
								<article>
									<?php the_content(); ?>
									<a class="btn btn-lg btn-primary btn-block visible-xs" href="?p=515">Request a free consultation <i class="glyphicon glyphicon-chevron-right"></i></a>
								</article> <!-- end article -->
							</div>
						</div>
						<?php endwhile; endif; ?>
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
