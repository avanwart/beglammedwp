<?php
/*
Template Name: Press
*/
?>

<?php get_header(); ?>	

<section class="about press-hits">
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
							<br>
							<?php if(get_field('press_articles')): ?>

							<?php while(has_sub_field('press_articles')): ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<table class="table">
									<tbody>
										<tr>
											<td class="col-sm-9"><h2>
												<small><?php the_sub_field('date'); ?></small>
												<a href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('title'); ?></a></h2>
											</td>
											<td class="logo col-sm-3" style="background-image: url('<?php the_sub_field('logo'); ?>')">
												&nbsp;
											</td>
										</tr>
									</tbody>
								</table>
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