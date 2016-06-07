<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 === ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 === $woocommerce_loop['columns'] ) {
	$classes[] = 'first';
}
if ( 0 === $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
	$classes[] = 'last';
}
$classes[] = 'produit small-6 medium-3 columns';
?>
<li <?php post_class( $classes ); ?>>


	<a href="<?php the_permalink(); ?>">

		<?php the_post_thumbnail(); ?>
		<h5 class="mycat"><?php global $post;
		$terms = get_the_terms( $post->ID, 'product_cat' );
		foreach ( $terms as $term ){
			$category_id = $term->term_id;
			$category_name = $term->name;
			$category_slug = $term->slug;
			break; 
		}
		echo $category_name;
		?>
	</h5>
	<h3><?php the_title(); ?></h3>
	<h4 class="price"><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true); ?>€</h4>
	<div class="fondgris-home">	
		<span style="display: block;height: 100%;">
			<span class="etat-dispo" style="position: absolute;bottom: 65px; width: 100%;left: 0;">DISPONIBLE</span>
		</span>
		<div class="bouton-add">
			<?php global $product;
			$id = $product->id; ?>
			<?php woocommerce_template_loop_add_to_cart( $product->post, $product ); ?>
			<div class="produitajoute">produit ajouté<i class="fa fa-check" aria-hidden="true"></i>
			</div>
		</div>
	</div>
</a>

</li>
