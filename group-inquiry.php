<?php
/*
Template Name: Group Inquiry
*/
?>
<?php get_header(); ?>

<section class="standard">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 main-content">
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
					<article>
						<div class="row">
							<div class="col-sm-12 col-md-10 col-md-offset-1">
								<?php the_content(); ?>
							</div>
						</div>
					</article> <!-- end article -->
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
jQuery(document).ready(function($){
	// Input mask - Restrict count, formatting, numbers only
	$.extend($.inputmask.defaults, {
		'placeholder': " "
	});
	$('input[type="tel"]').inputmask("(999) 999-9999");
});
</script>

<?php get_footer(); ?>