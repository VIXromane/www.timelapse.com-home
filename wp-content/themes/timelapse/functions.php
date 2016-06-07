<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );
require_once( 'library/slider-lib.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );


define('_URL_IMAGES', get_stylesheet_directory_uri().'/assets/images/');


function marque() {

}

// --> 
    // 1. Supprime l'action initiale d'affichage de la categorie/marque
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
    // 2. Je change sa priorité --> ordre 1
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 1);


add_action('woocommerce_single_product_summary', 'woocommerce_product_description_tab', 60);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);


// add_action('woocommerce_single_product_summary', 'woocommerce_upsell_display', 70);

remove_action('woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_upsell_display', 15);





function my_title($title, $idarticle) {
    if(get_post_format($idarticle) == "video")
    {
        return "/2// -> ".$title;
    }
    return "".$title;

}
add_filter('the_title', 'my_title', 10, 2);


function textdomain_register_sidebars() {
	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'sidebar-1',
			'name' => __( 'recherche-filtres', 'textdomain' ),
			'description' => __( 'Filtres woocommerces', 'textdomain' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s small-12 medium-4 columns end">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}
add_action( 'widgets_init', 'textdomain_register_sidebars' );
