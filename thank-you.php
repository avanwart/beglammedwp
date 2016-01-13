<?php
/*
Template Name: Thank You Template
*/
?>

<?php get_header(); ?>	

<section class="thank-you">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 text-center">
				<div class="card">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article>
						<?php the_content(); ?>
					</article>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		
	});
</script>
<?php the_field('conversion_pixels'); ?>
<?php get_footer(); ?>