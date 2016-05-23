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


<!-- include jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<!-- include Cycle2 -->
<script src="assets/components/jquery-cycle2/src/jquery.cycle2.js"></script>

<!-- include one or more optional Cycle2 plugins -->
<script src="assets/components/jquery-cycle2/src/jquery.cycle2.carousel.js"></script>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>


</body>
</html>
