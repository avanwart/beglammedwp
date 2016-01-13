<?php
/*
Template Name: Gift Cards
*/
?>

<?php get_header(); ?>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
<section class="gift-cards">
	<div class="container">
		<div class="row">
			
			<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 main-content">
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
						<div class="row">
							<div class="col-sm-12">
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
									<?php the_content(); ?>
									<div class="row">
										<div class="col-lg-9">
											<form action="<?php bloginfo('url'); ?>/gift-card-thank-you" class="form" id="gift_cards">
												<fieldset>
													<legend>Choose gift card dollar amount</legend>
													<div class="form-group price">
														<div class="row">
															<div class="col-sm-2">
																<div class="radio">
																	<label>
																		<input type="radio" id="card_value" name="card_value" value="50" required>$50
																	</label>
																</div>
															</div>
															<div class="col-sm-2">
																<div class="radio">
																	<label>
																		<input type="radio" id="card_value" name="card_value" value="100" required>$100
																	</label>
																</div>
															</div>
															<div class="col-sm-2">
																<div class="radio">
																	<label>
																		<input type="radio" id="card_value" name="card_value" value="150" required>$150
																	</label>
																</div>
															</div>
															<div class="col-sm-2">
																<div class="radio">
																	<label>
																		<input type="radio" id="card_value" name="card_value" value="200" required>$250
																	</label>
																</div>
															</div>
															<div class="col-sm-2">
																<div class="radio">
																	<label>
																		<input type="radio" id="card_value" name="card_value" value="500" required>$500
																	</label>
																</div>
															</div>
														</div>
													</div>
												</fieldset>

												<fieldset>
													<legend>Recipient Information</legend>
													<div class="form-group">
														<label for="recipient_name">Who is the gift going to?</label>
														<input type="text" id="recipient_name" name="recipient_name" class="form-control" required>
													</div>
													<div class="form-group">
														<label for="recipient_email">What is their e-mail?</label>
														<input type="email" id="recipient_email" name="recipient_email" class="form-control" required>
													</div>
													<div class="form-group">
														<label for="recipient_message">Do you want to include a message with their gift? (optional)</label>
														<textarea rows="5" id="recipient_message" name="recipient_message" class="form-control"></textarea>
													</div>
												</fieldset>

												<fieldset>
													<legend>Sender Information</legend>
													<div class="form-group">
														<label for="sender_name">Your name</label>
														<input type="text" id="sender_name" name="sender_name" class="form-control" required>
													</div>
													<div class="form-group">
														<label for="sender_email">Your email</label>
														<input type="email" id="sender_email" name="sender_email" class="form-control" required>
													</div>
													<div class="form-group">
														<label for="delivery_date">Gift delivery date</label>
														<input type="text" id="delivery_date" name="delivery_date" class="form-control datepicker" required>
													</div>
												</fieldset>
												
												<fieldset>
													<legend>Payment Information</legend>
													<div class="form-group">
														<label for="payment_name">Who is the gift going to?</label>
														<input type="text" id="payment_name" name="payment_name" class="form-control" required>
													</div>
													<div class="form-group">
														<label for="payment_card_number">What is their e-mail?</label>
														<input type="email" id="payment_card_number" name="payment_card_number" class="form-control card_number" required>
													</div>
													<div class="form-group row">
														<div class="col-sm-4 expiration">
															<label for="payment_expiration_date">Expiration Date</label>
															<input type="text" id="payment_expiration_date" name="payment_expiration_date" class="form-control" placeholder="mm / dd" required>
														</div>
														<div class="col-sm-4 zip">
															<label for="payment_zipcode">Billing ZIP</label>
															<input type="text" id="payment_zipcode" name="payment_zipcode" class="form-control" required>
														</div>
														<div class="col-sm-4 cvv">
															<label for="payment_security_code">Security Code</label>
															<input type="text" id="payment_security_code" name="payment_security_code" class="form-control" required>
														</div>
													</div>
													<div class="form-actions">
														<br/>
														<button type="submit" class="btn btn-lg btn-primary btn-block">Complete Gift Card Purchase</button>	
													</div>
												</fieldset>
											</form>
										</div>
									</div>
									
								</article> <!-- end article -->
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="https://code.jquery.com/ui/1.9.2/jquery-ui.min.js"></script>
<script>
	jQuery(document).ready(function($){

		$('.datepicker').datepicker();

		$('.radio > label').click(function(e){
			$(this).find('input[type="radio"]').prop("checked", true);
			$('.radio > label').removeClass('active')
			$(this).toggleClass('active');
			console.log('toggle active class');
			e.stopPropagation();
			e.preventDefault();
		});

		// Input mask - Restrict count, formatting, numbers only
		$.extend($.inputmask.defaults, {
			'placeholder': " "
		});
		
		$('.zip input').focus(function(){
			$(this).inputmask("99999");
		});

		$('.expiration input').focus(function(){
			$(this).inputmask("99 / 99");
		});

		$('.cvv input').focus(function(){
			$(this).inputmask("9999");
		});

		$('#gift_cards').validate({
			errorPlacement: function(error, element) {
				if (element.attr("name") == "card_value" ) {
					error.insertAfter(".price");
				} else {
					error.insertAfter(element);
				}
			},
			submitHandler: function(form) {
				form.submit();
			}
		});

	});
</script>
<?php get_footer(); ?>