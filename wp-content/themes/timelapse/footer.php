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
		<div id="footer-container">
			<footer id="footer">
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

<!-- SCRIPT OWL CAROUSEL TESTIMONIAUX --> 

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.5/js/foundation.js'></script>
<script src='http://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
<script src="assets/javascript/testimoniaux.js"></script>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>


</body>
</html>
