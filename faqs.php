<?php
/*
Template Name: FAQs
*/
?>

<?php get_header(); ?>
<?php /*<section class="hero">
	<div class="container text-center">
		<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
			<h1>Frequently Asked Questions</h1>
			<p class="intro">Get answers to your questions below. <br class="hidden-xs"/>Can't find the answer to your question? <a href="<?php bloginfo('url'); ?>/contact">Contact us &raquo;</a>.</p>
			<a href="sign-up" class="btn btn-lg btn-primary">Free 14 Day Trial <i class="glyphicon glyphicon-chevron-right"></i></a>
		</div>
	</div>
</section>*/ ?>


<section class="faq motif">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<h1 class="push text-center">Frequently Asked Questions</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-8 col-md-offset-2">
				<!-- Get FAQ Repeater custom fields from this Page -->
				<?php if(get_field('faq')): ?>
					<div class="panel-group" id="accordion">
					<!-- open the loop -->
					<?php while(has_sub_field('faq')): ?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_sub_field('id'); ?>" class="collapsed">
										<i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-minus"></i>	<?php the_sub_field('question'); ?>
									</a>
								</h4>
							</div>
							<div id="collapse<?php the_sub_field('id'); ?>" class="panel-collapse collapse">
								<div class="panel-body">
									<?php the_sub_field('answer'); ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					<!-- close the loop -->
					</div>
				<?php endif; ?>
				<!-- end of Repeater custom fields and dynamic content -->
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p class="text-center">Can't find the answer to your question? <a href="<?php bloginfo('url'); ?>/contact">Contact us &raquo;</a></p>
				<p class="text-center"><a href="#hero" class="btn btn-lg btn-primary">Free 14 Day Trial <i class="glyphicon glyphicon-chevron-right"></i></a></p>
			</div>
		</div>
	</div>
</section>

<script>
	jQuery(document).ready(function($){

		// Initialize accordion UI and open the first accordion panel
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');

		// Smooth Scroll Functionality
		$('.scroll, .scroll a').smoothScroll({
			offset: 0,
			easing: 'swing'
		});


		// Find out what browser they're using
		var userAgent = window.navigator.userAgent;

		// If ipad or iphone, do something
		if (userAgent.match(/iPad/i) || userAgent.match(/iPhone/i)) {
			
		}
		// Use below if not iPad or iPhone
		else {
			
		}

	});
</script>

<?php get_footer(); ?>