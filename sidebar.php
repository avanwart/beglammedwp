<div id="sidebar" class="bar clearfix" role="complementary">

	<?php if ( is_page_template( 'about.php' ) || is_page_template( 'leadership.php' ) || is_page_template( 'press.php' ) || is_page_template('careers.php') || is_page_template('contact.php') || in_category( 'careers' ) || is_page_template('testimonials.php') ) { ?>
		<div class="bucket">
  		<h3 class="bucket-title">About</h3>
  		<?php footer_bucket_1(); ?>
		</div>
	<?php } elseif ( is_page_template( 'services.php' ) || is_page_template( 'product.php' ) || is_page_template( 'weddings.php' )  ) { ?>
		<div class="bucket">
  		<h3 class="bucket-title">Services</h3>
  		<?php footer_bucket_2(); ?>
  		</div>
	<?php } else {

	}?>

</div>

<script>
	jQuery(document).ready(function($){
		/*$(window).scroll(function() {
			if ($(window).scrollTop() >= 80) {
				$('#sidebar').addClass('affix');
			} else {
				$('#sidebar').removeClass('affix');
			}
		});*/
	});
</script>