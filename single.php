<?php get_header(); ?>
<section class="about single">
	<div class="container">
		<div class="row">
			<div class="col-lg-11 col-md-12">
				<div class="row">
					<div class="col-sm-3 hidden-xs">
						<div class="well">
							<?php
								get_sidebar();
							?>
						</div>
					</div>
					<div class="col-sm-9 main-content">
						<div class="card">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
							<article>
								<h1 class="page-title"><?php the_title(); ?></h1>

								<?php the_content(); ?>
									
							</article>
							

							<?php wp_reset_postdata(); ?>
							
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>

<?php get_footer(); ?>
