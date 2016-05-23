<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>

<?php if (!is_page(28)){ echo 'Le footer'; } else{ echo 'Je suis sur la page contact'; } ?>

<section class="text-center reassurance"><!-- REASSURANCE-->
	<div class="row"><!-- contenu -->
		<div class="text-center">
			<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/circle-logo-timelapse.png" alt="logo timelapse rond reassurance" id="circle-logo"/>
		</div>

		<div class="small-12 large-3 columns">
			<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/authenticity.png" alt="authenticité et tracabilité des produits">
			<h3>
				AUTHENTICITÉ ET TRACABILITÉ
			</h3>
			<p>
				Tous les modèles qui vous sont proposés sont authentiques
			</p>
		</div>

		<div class="small-12 large-3 columns">
			<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/garantie.png" alt="garantie 12 mois timelapse">
			<h3>
				GARANTIE TIMELAPSE
			</h3>
			<p>
				Tous les produits possèdent la garantie 12 mois Timelapse
			</p>
		</div>

		<div class="small-12 large-3 columns">
			<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/secured-payment.png" alt="paiements en ligne sécurisés">
			<h3>
				PAIEMENT SÉCURISÉ
			</h3>
			<p>
				Toutes vos transactions en ligne sont 100% sécurisées
			</p>
		</div>

		<div class="small-12 large-3 columns">
			<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/delivery.png" alt="livraisons et retours sécurisés">
			<h3>
				LIVRAISONS ET RETOURS
			</h3>
			<p>
				Livraisons et retours rapides et sécurisés
			</p>
		</div>
	</div>

</section><!-- FIN REASSURANCE-->

<section class="text-center" id="owl">
	<div class="row">

		<h2>Votre avis compte</h2>

		<div class="slide cycle-slideshow"
		data-cycle-fx="scrollHorz"
		data-cycle-speed="800"
		data-cycle-timeout="3000"
		data-cycle-pager=".example-pager"
		data-cycle-slides=">article">

		<article class="large-12 columns testimonial" id="#quote1"> <!-- QUOTE 1-->
			<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/quote.png" alt="citation 1 testimoniaux clients timelapse">

			<div class="large-12 columns">
				<p class="hide-for-small-only large-2 columns"></p>
				<p class="quote small-12 large-8 columns">
					Un grand choix de montres, une grande disponibilité par téléphone. Le colis est arrivé vite et sans problèmes. Je recommande Timelapse pour tous les amoureux des belles montres qui désirent acheter en toute confiance. 
				</p>
				<p class="hide-for-small-only large-2 columns"></p>
			</div>
			<div class="author">
				<p>Cédric</p>
			</div>
			<div class="puces-slider">
				<a href="#quote1"><span class="active"></span></a>
				<a href="#quote2"><span></span></a>
				<a href="#quote3"><span></span></a>
			</div>
		</article>

		<article class="large-12 columns testimonial" id="#quote2"><!-- QUOTE 2-->
			<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/quote.png" alt="citation 2 testimoniaux clients timelapse">

			<div class="large-12 columns">
				<p class="hide-for-small-only large-2 columns"></p>
				<p class="quote small-12 large-8 columns">
					Réponses aux questions rapides et précises. Contact humain très chaleureux. Emballage parfait. Mise à la taille de la montre parfaite. Description uniforme au produit. Du grand sérieux, je recommande vivement. 
				</p>
				<p class="hide-for-small-only large-2 columns"></p>
			</div>
			<div class="author">
				<p>Julien</p>
			</div>
			<div class="puces-slider">
				<a href="#quote1"><span></span></a>
				<a href="#quote2"><span class="active"></span></a>
				<a href="#quote3"><span></span></a>
			</div>
		</article>

		<article class="large-12 columns testimonial" id="#quote3"><!-- QUOTE 3-->
			<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/quote.png" alt="citation 3 testimoniaux clients timelapse">

			<div class="large-12 columns">
				<p class="hide-for-small-only large-2 columns"></p>
				<p class="quote small-12 large-8 columns">
					Un service client remarquable. J'ai dû renvoyer ma montre suite à un dysfonctionnement des aiguilles. Grâce à la garantie Timelapse, j'ai pû reçevoir mon modèle réparé très rapidement sans aucunes complications. Super travail.
				</p>
				<p class="hide-for-small-only large-2 columns"></p>
			</div>
			<div class="author">
				<p>Martin</p>
			</div>
			<div class="puces-slider">
				<a href="#quote1"><span></span></a>
				<a href="#quote2"><span></span></a>
				<a href="#quote3"><span class="active"></span></a>
			</div>
		</article>
	</div>
</div>
</section>


<section class="text-center social"><!-- SOCIAL NETWORKS + NEWSLETTER-->
	<div class="row"><!-- contenu -->
		<h2>Restez à l’heure de l’actualité Timelapse</h2>
		<div id="social" class="small-12 large-4 columns">
			<div class="row">
				<article class="small-6 large-6 columns">
					<a href="#">
						<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/social-fb.jpg" alt="facebook timelapse">
					</a>
				</article>
				<article class="small-6 large-6 columns">
					<a href="#">
						<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/social-twitter.jpg" alt="twitter timelapse">
					</a>
				</article>
			</div>
			<div class="row">
				<article class="small-6 large-6 columns">
					<a href="#">
						<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/social-insta.jpg" alt="instagram timelapse">
					</a>
				</article>
				<article class="small-6 large-6 columns">
					<a href="#">
						<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/social-pinterest.jpg" alt="pinterest timelapse">
					</a>
				</article>
			</div>
		</div>
		<div id="newsletter" class="small-12 large-7 large-offset-1 columns">
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

		<div class="small-12 large-3 columns">
			<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/complete-logo-timelapse.png" alt="logo full verison Timelapse">
		</div>
		<div class="small-12 large-3 columns">
			<ul>
				<li><a href="#"><strong>Informations</strong></a></li>
				<li><a href="#">À propos de nous</a></li>
				<li><a href="#">Contactez nous</a></li>
				<li><a href="#">Confidentialité</a></li>
				<li><a href="#">Plan du site</a></li>
				<li><a href="#">Crédits</a></li>
			</ul>
		</div>
		<div class="small-12 large-3 columns">
			<ul>
				<li><a href="#"><strong>Aide et assistance</strong></a></li>
				<li><a href="#">Mentions légales</a></li>
				<li><a href="#">Livraisons et retours</a></li>
				<li><a href="#">Garantie Timelapse</a></li>
				<li><a href="#">Transactions sécurisés</a></li>
				<li><a href="#">CGV</a></li>
			</ul>
		</div>
		<div class="small-12 large-3 columns">
			<ul>
				<li><a href="#"><strong>Suivez-nous</strong></a></li>
				<li><a href="#">Réseaux sociaux</a>
					<ul>
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
</div>

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
		 $("#intro").remove();
	});

	</script>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/customwoocommerce.js"></script>


</body>
</html>
