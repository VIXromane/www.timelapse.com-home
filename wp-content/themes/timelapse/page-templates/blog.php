<?php
/*
Template Name: Blog
*/
get_header(); ?>

<section class="text-center journal"><!-- JOURNAL TIMELAPSE-->
	
		<h2>Journal Timelapse</h2>

		<div class="row"><!-- contenu -->

			<?php
               $args = array(
               'post_type' => 'post',
               );
               $loop = new WP_Query( $args );
               if ( $loop->have_posts() ) {
               while ( $loop->have_posts() ) : $loop->the_post();
               get_template_part( 'template-parts/blog-article', get_post_format() );

               endwhile;
               } else {
               echo __( 'No products found' );
               }
               wp_reset_query();
       ?>

		</div>



<section class="text-center social"><!-- SOCIAL NETWORKS + NEWSLETTER-->
	<div class="row"><!-- contenu -->
		<h2>Restez à l’heure de l’actualité Timelapse</h2>
		<div id="social" class="small-12 medium-4 columns">
			<div class="row">
				<article class="small-6 medium-6 columns">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/social-fb.jpg" alt="facebook timelapse">
					</a>
				</article>
				<article class="small-6 medium-6 columns">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/social-twitter.jpg" alt="twitter timelapse">
					</a>
				</article>
			</div>
			<div class="row">
				<article class="small-6 medium-6 columns">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/social-insta.jpg" alt="instagram timelapse">
					</a>
				</article>
				<article class="small-6 medium-6 columns">
					<a href="#">
						<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/social-pinterest.jpg" alt="pinterest timelapse">
					</a>
				</article>
			</div>
		</div>
		<div id="newsletter" class="small-12 medium-7 medium-offset-1 columns">
			<div class="newsletter-content">
				<h3>NEWSLETTER</h3>


				<p>Inscrivez-vous à notre newsletter pour suivre les actualités de Timelapse
					et connaître les nouveaux arrivages en exclusivité.</p>

					<div class="row">
						<div class="row collapse">
							<div class="small-9 columns">
								<input type="text" placeholder="Entrez votre adresse e-mail">
							</div>
							<div class="small-3 columns">
								<a href="#" class="abonnement button postfix">S'abonner</a>
							</div>
						</div>
					</div>			
				</div>
			</div>

		</div>
	</section>

	<footer id="footer" class="text-center">
		<div class="footer-container row">

			<div class="small-12 medium-3 columns">
				<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/complete-logo-timelapse.png" alt="logo full verison Timelapse">
			</div>
			<div class="small-12 medium-3 columns marge">
				<h5>Informations</h5>
				<ul>
					<li><a href="#">À propos de nous</a></li>
					<li><a href="#">Contactez nous</a></li>
					<li><a href="#">Confidentialité</a></li>
					<li><a href="#">Plan du site</a></li>
					<li><a href="#">Crédits</a></li>
				</ul>
			</div>
			<div class="small-12 medium-3 columns marge">
				<h5>Aide et assistance</h5>
				<ul>
					<li><a href="#">Mentions légales</a></li>
					<li><a href="#">Livraisons et retours</a></li>
					<li><a href="#">Garantie Timelapse</a></li>
					<li><a href="#">Transactions sécurisés</a></li>
					<li><a href="#">CGV</a></li>
				</ul>
			</div>
			<div class="small-12 medium-3 columns marge">
				<h5>Suivez-nous</h5>
				<ul>
					<li><a href="#">Réseaux sociaux</a>
						<ul id="social-list">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
							</a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
							</a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
							</a></li>
							<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i>
							</a></li>
						</ul>
					</li>
					<li><a href="#">Newsletter</a></li>
					<li><a href="#">Journal Timelapse</a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
				</ul>
			</div>


			<?php do_action( 'foundationpress_before_footer' ); ?>
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
			<?php do_action( 'foundationpress_after_footer' ); ?>
		</footer>
		<section id="post-foot">
			<div><p>2016 - Tous droits réservés - <strong>Timelapse ©</strong></p></div>
		</section>

	<?php do_action( 'foundationpress_layout_end' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
</div><!-- Close off-canvas wrapper inner -->
</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>





<!-- <script src="assets/components/jquery-cycle2/src/jquery.cycle2.js"></script>
	<script src="assets/components/jquery-cycle2/src/jquery.cycle2.carousel.js"></script> -->

	<?php wp_footer(); ?>
	<?php do_action( 'foundationpress_before_closing_body' ); ?>



	<!-- Sript disparition visuel intro -->
	<script>

	$("a.removeme").click(function() {
		$("#intro").fadeOut(600, function(){
			(this).remove();
		});
	});


	</script>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/customwoocommerce.js"></script>

	<script>
	$( ".woocommerce-ordering ul li" ).append( "<div class="hover">Je suis un hover</div>" );</script>
</body>
</html>

