<?php
/*
Template Name: Sign Up
*/
?>

<?php get_header(); ?>

<section class="standard signup">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-1 main-content text-center">
				<div class="card">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h1 class="text-center">Start Your Free 14 Day Trial</h1>
						<!--<?php the_content(); ?>-->
						<form id="registration" action="https://portal.fruitstreet.com/provider/signup" method="POST" class="form">
							<input type="hidden" id="plan" name="plan" value="">
							<div class="form-group">
								<label for="firstname" class="control-label">First name
									<span class="frm_required">*</span>
								</label>
								<input type="text" id="firstname" name="firstname" value="" class="form-control" required="">
							</div>
							<div class="form-group">
								<label for="lastname" class="control-label">Last name
									<span class="frm_required">*</span>
								</label>
								<input type="text" id="lastname" name="lastname" value="" class="form-control" required="">
							</div>
							<div class="form-group">
								<label for="email" class="control-label">Email address
									<span class="frm_required">*</span>
								</label>
								<input type="email" id="email" name="email" value="" class="form-control" required="">
							</div>
							<div class="form-group">
								<label for="phone" class="control-label">Phone Number
									<span class="frm_required"></span>
								</label>
								<input type="tel" id="phone" name="phone" value="" class="form-control">
							</div>
							<div class="form-group">
								<label for="company" class="control-label">Company Name
									<span class="frm_required">*</span>
								</label>
								<input type="text" id="company" name="company" value="" class="form-control" required="">
							</div>
							<div class="form-group">
								<label for="url" class="control-label">Company URL
								</label>
								<input type="url" id="url" name="url" value="" class="form-control">
							</div>
							<div class="form-group frm_submit">
								<button type="submit" value="Sign Up" class="btn btn-lg btn-primary btn-block">Register <i class="glyphicon glyphicon-chevron-right"></i></button>
							</div>
						</form>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

<script>
	jQuery(document).ready(function($){

		$('#field_first_name').focus();

		// Input mask - Restrict count, formatting, numbers only
		$.extend($.inputmask.defaults, {
			'placeholder': " "
		});
		$('input[type="tel"]').inputmask("(999) 999-9999");

		$('.number input[type="text"]').inputmask("99999");

		// Read query params
		function getParameterByName(name) {
		  name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		  var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
		      results = regex.exec(location.search);
		  return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
		}

		var plan = getParameterByName('plan');
		console.log(plan);

		$('#plan').val(plan);

		$('#registration').validate({
			submitHandler: function (form) {
				$.ajax({
					type: $(form).attr('method'),
					url: $(form).attr('action'),
					data: $(form).serialize(),
					// dataType : 'application/x-www-form-urlencoded'
					// dataType <== response dataType
					dataType: 'json'
				})
				.done(function (response) {
					// response will be json format
					// if (response.success == 'success') {
					if (response === true) {
						window.location="<?php bloginfo('url'); ?>/thank-you"                  
					} else {
						// alert('fail');
						alert(response);
					}
				});
				return false; // required to block normal submit since you used ajax
			}	
		});




	});
</script>