<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<section class="about contact">
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
							
							<article>
								<div class="row">
									<div class="col-sm-6">
										<?php the_content(); ?>
									</div>
									<div class="col-sm-6">
										<div class="well motif">
											<address class="address">
												<span>beGlammed</span>
												<span>453 South Spring St. | Suite 820</span>
												<span>Los Angeles, CA 90013</span>
											</address>
											<hr>
											<address class="details">
												<span><strong>Phone: </strong><a href="tel:3103626190">(310) 362-6190</a></span>
												<span><strong>Email: </strong><a href="info@beglammed.com?subject=New Contact Inquiry" target="_blank">info@beglammed.com</a></span>
											</address>
										</div>
										<div class="google-map">
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.846880123962!2d-118.25195398478506!3d34.04779868060707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c64a580b36c9%3A0x51aa9c6b795ff722!2s453+S+Spring+St+%23820%2C+Spring+Arts+Tower%2C+Los+Angeles%2C+CA+90013!5e0!3m2!1sen!2sus!4v1449877744353" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
										</div>
									</div>
								</div>
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

<script>
	jQuery(document).ready(function($){

		// Adding a method for US phone numbers
		jQuery.validator.addMethod("phoneUS", function(value, element) {
			// allow any non-whitespace characters as the host part
			return this.optional( element ) || /^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}$/.test( value );
		}, 'Enter a valid phone number.');

		// Input mask - Restrict count, formatting, numbers only
		$.extend($.inputmask.defaults, {
			'placeholder': " "
		});
		$('input[type="tel"]').inputmask("(999) 999-9999");

		$('#contact-form').validate();

	});
</script>

<?php get_footer(); ?>
