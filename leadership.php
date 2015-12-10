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
							<div class="row visible-xs visible-sm">
								<div class="col-sm-12">
									<?php footer_bucket_1(); ?>
								</div>
							</div>
							<article>
								<!-- Management Team -->
								<div class="row">
									<?php if( have_rows('leadership_team') ): while ( have_rows('leadership_team') ) : the_row(); ?>
									<div class="col-sm-4 person">
										<a data-toggle="modal" href='#modal<?php the_sub_field('id'); ?>'><img src="<?php the_sub_field('headshot'); ?>" class="img-responsive headshot"></a>
										<p><?php the_sub_field('name'); ?><small><?php the_sub_field('title'); ?></small></p>
										<div class="modal fade" id="modal<?php the_sub_field('id'); ?>">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<h4 class="modal-title"><?php the_sub_field('name'); ?><small><?php the_sub_field('title'); ?></small></h4>
													</div>
													<div class="modal-body">
														<div class="row">
															<div class="col-sm-9">
																<p><?php the_sub_field('bio'); ?></p>
															</div>
															<div class="col-sm-3 text-center hidden-xs">
																<img src="<?php the_sub_field('headshot'); ?>" class="img-responsive portrait">
																<!-- <p class="linkedin">
																	<a class="btn btn-default btn-block" href="<?php the_sub_field('linkedin_url'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin-icon.jpg" class="linkedin"> <?php the_sub_field('name'); ?> on LinkedIn</a>
																</p> -->
															</div>
														</div>
													</div>
													<div class="modal-footer visible-xs">
														<button class="btn btn-default btn-block" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php endwhile; endif;  ?>
								</div>
								<div class="text-center"><hr></div>
								<!-- Advisors -->
								<div class="row">
									<h2 class="text-center">Board of Directors</h2>
									<?php if( have_rows('advisors') ): while ( have_rows('advisors') ) : the_row(); ?>
									<div class="col-sm-4 person">
										<a data-toggle="modal" href='#boardModal<?php the_sub_field('id'); ?>'><img src="<?php the_sub_field('headshot'); ?>" class="img-responsive headshot"></a>
										<p><?php the_sub_field('name'); ?><small><?php the_sub_field('title'); ?></small></p>
										<div class="modal fade" id="boardModal<?php the_sub_field('id'); ?>">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<h4 class="modal-title"><?php the_sub_field('name'); ?></h4>
													</div>
													<div class="modal-body">
														<div class="row">
															<div class="col-sm-9">
																<p><?php the_sub_field('bio'); ?></p>
															</div>
															<div class="col-sm-3 hidden-xs text-center">
																<img src="<?php the_sub_field('headshot'); ?>" class="img-responsive portrait">
																<!-- <p class="linkedin">
																	<a class="btn btn-default btn-block" href="<?php the_sub_field('linkedin_url'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin-icon.jpg" class="linkedin"> <?php the_sub_field('name'); ?> on LinkedIn</a>
																</p> -->
															</div>
														</div>
													</div>
													<div class="modal-footer visible-xs">
														<button class="btn btn-default btn-block" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php endwhile; endif;  ?>
								</div>
								<div class="text-center"><hr></div>
								<!-- Medical Advisory -->
								<div class="row">
									<h2 class="text-center">Medical Advisory Board</h2>
									<?php if( have_rows('medical_advisory') ): while ( have_rows('medical_advisory') ) : the_row(); ?>
									<div class="col-sm-4 person">
										<a data-toggle="modal" href='#advisorModal<?php the_sub_field('id'); ?>'><img src="<?php the_sub_field('headshot'); ?>" class="img-responsive headshot"></a>
										<p><?php the_sub_field('name'); ?><small><?php the_sub_field('title'); ?></small></p>
										<div class="modal fade" id="advisorModal<?php the_sub_field('id'); ?>">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<h4 class="modal-title"><?php the_sub_field('name'); ?></h4>
													</div>
													<div class="modal-body">
														<div class="row">
															<div class="col-sm-9">
																<p><?php the_sub_field('bio'); ?></p>
															</div>
															<div class="col-sm-3 hidden-xs text-center">
																<img src="<?php the_sub_field('headshot'); ?>" class="img-responsive portrait">
																<!-- <p class="linkedin">
																	<a class="btn btn-default btn-block" href="<?php the_sub_field('linkedin_url'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin-icon.jpg" class="linkedin"> <?php the_sub_field('name'); ?> on LinkedIn</a>
																</p> -->
															</div>
														</div>
													</div>
													<div class="modal-footer visible-xs">
														<button class="btn btn-default btn-block" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php endwhile;  endif;  ?>
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