			<footer class="footer dark" role="contentinfo">

				<div class="container">

				<div id="inner-footer" class="footer-links clearfix">
					
					<!-- ATTN:  Edit these menus by going to Appearance -> Menus -> Select Menu within WordPress -->
					<div class="row">

						<!-- Footer Bucket 1 -->
						<div class="col-sm-3 bucket">
							<h3>Company</h3>
							<?php footer_bucket_1(); ?>
						</div>

						<!-- Footer Bucket 2 -->
						<div class="col-sm-3 bucket">
							<h3>Services</h3>
							<?php footer_bucket_2(); ?>
						</div>
						
						<!-- Footer Bucket 3 -->
						<div class="col-sm-3 bucket">
							<h3>Gifts</h3>
							<?php footer_bucket_3(); ?>
						</div>

						<!-- Footer Bucket 4 -->
						<div class="col-sm-3 bucket">
							<h3>For Stylists</h3>
							<?php footer_bucket_4(); ?>

							<ul class="social-media">
								<li class="facebook"><a href="https://www.facebook.com/beglammednow/" target="_blank"></a></li>
								<li class="twitter"><a href="https://twitter.com/beglammednow" target="_blank"></a></li>
								<li class="pinterest"><a href="https://www.pinterest.com/beglammed/" target="_blank"></a></li>
								<li class="instagram"><a href="https://www.instagram.com/beglammednow/" target="_blank"></a></li>
							</ul>
						</div>
					</div>

				</div> <!-- end #inner-footer -->

				

				</div> <!-- end .container -->

				<div class="outter-footer">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<img class="brand" src="<?php bloginfo('template_directory'); ?>/library/images/logo-white-2x.png" alt="">
								<p class="text-center source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?><br class="visible-xs"><span class="hidden-xs">&nbsp;&nbsp;|</span> <a href="<?php bloginfo('url'); ?>/terms-and-conditions">Terms &amp; Conditions</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php bloginfo('url'); ?>/privacy">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>

			</footer> <!-- end footer -->

		</div> <!-- end .wrapper -->

		<!-- all js scripts are loaded in library/bones.php -->

		<?php wp_footer(); ?>

		<!-- CallRail Tracking -->
		<script type="text/javascript" src="//cdn.callrail.com/companies/173038327/88df83cbb19ab0266323/12/swap.js"></script>

		<!-- SumoMe -->
		<!--<script src="//load.sumome.com/" data-sumo-site-id="8ea7bbbc99007875caa321e343bce24337fdd0998cc7b21441e03fdfb5bf46eb" async="async"></script>-->

	</body>

</html> <!-- end page. what a ride! -->