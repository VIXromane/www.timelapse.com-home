<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	do_action( 'woocommerce_before_single_product' );

	if ( post_password_required() ) {
		echo get_the_password_form();
		return;
	}
	?>

	<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>




		<?php
		/**
		 * woocommerce_before_single_product_summary hook.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>

		<div class="summary entry-summary">
			<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/	garantie-single-product.jpg
			" alt="garantie timelapse 12 mois fiche produit reassurance" class="garantie-product">


			<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked woocommerce_product_description_tab - 50
			 */
			do_action( 'woocommerce_single_product_summary' );

			?>

			<?php woocommerce_product_additional_information_tab(); ?>

			<div class="share-product small-12 columns no-padding">

				<p class="small-6 columns no-padding">
					Vous aimez ce modèle ? Partagez-le !
				</p>
				<ul class="networks-share-product small-6 columns no-padding">
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
					</a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
					</a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
					</a></li>
					<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i>
					</a></li>
				</ul>
			</div>

			<div class="need-help small-12 columns no-padding">
				<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/phone-help.png
				" alt="contact besoin d'aide fiche produit timelapse" class="phone-help">
				<p>
					<strong>Besoin d’informations complémentaires ?</strong> Contactez-nous au 03 88 03 03 03.
				</p>
			</div>

		</div><!-- .summary -->



		<meta itemprop="url" content="<?php the_permalink(); ?>" />

	</div><!-- #product-<?php the_ID(); ?> -->

	<?php do_action( 'woocommerce_after_single_product' ); ?>

	<div class="clear"></div>


		<?php woocommerce_output_related_products (); ?>






