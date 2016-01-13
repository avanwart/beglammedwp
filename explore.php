<?php
/*
Template Name: Explore Styles
*/
?>

<?php get_header(); ?>

<section class="explore">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center">Explore Styles</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 text-center">
				<div id="filters" class="filters">
					<span>Filter by service type:</span>
					<button type="button" class="btn btn-default" data-filter=".category-hair">Hair</button>
					<button type="button" class="btn btn-default" data-filter=".category-makeup">Makeup</button>
					<button type="button" class="btn btn-default" data-filter=".category-bridal">Bridal</button>
					<button type="button" class="btn btn-default active" data-filter="*">Show all</button>
				</div>
			</div>
		</div>
		<!-- Get Style Posts / Cards -->
		<div class="row" id="explore">

			<!-- Get Posts with STYLES category -->
			<?php
				global $post;
				$args = array( 'posts_per_page' => 99, 'category_name' => 'styles', 'order' => 'ASC', 'orderby' => 'rand' );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :  setup_postdata($post);
			?>

			<div <?php post_class( 'item col-xs-6 col-sm-3 style' ); ?>>
				<article id="post-<?php the_ID(); ?>" class="card" role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
					<img src="<?php the_field('thumbnail'); ?>" alt="Thumbnail showing <?php the_title(); ?> style" class="thumb">
					<h2><?php the_title(); ?></h2>
					<p>
						<?php the_field('description'); ?>, starting at <?php the_field('starting_price'); ?>. <a href="#" class="">Book Now &raquo;</a>
					</p>
					
				</article> <!-- end article -->
			</div>


			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</section>
		
<script src="<?php bloginfo('template_directory'); ?>/library/js/isotope.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/imagesloaded.js"></script>
<script>
	jQuery(document).ready(function($){

		console.log('hi andy');

		// Active Filter
		$('button').click(function(){
			$('button').removeClass('active')
			$(this).addClass('active');
		});

		$('.explore').imagesLoaded( function() {

			// Initialize Isotope
			$('#explore').isotope({
				itemSelector: '.style',
				layoutMode: 'masonry',
				gutter: 0
			});

		});

		

		// Filter Functionality
		$('#filters').on( 'click', 'button', function() {
			var filterValue = $(this).attr('data-filter');
			$('#explore').isotope({ filter: filterValue });
		});

	});
</script>

<?php get_footer(); ?>