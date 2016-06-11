<?php


/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/*
Template Name: Home
*/

get_header(); ?>





<!-- <div class="small-12 large-12 columns" role="main">RECHERCHE AVANCEE 
	<a href="#" class="clicker">Recherche avancée</a>
	<div class="filtres" style="display: none;">
		<?php dynamic_sidebar( 'filtres-widgets' ); ?>
	</div>
	<script type="text/javascript">
	$(document).ready(function() {
		$('.clicker').on('click', function(e) {
			e.preventDefault();
			$('.filtres').slideDown();
		});
	});
	</script>

</div>-->

<!-- LISTING PRODUIT WOO COMMERCE MODELES ICONIQUES-->

<!-- <div class="fondgris" style="display: block;height: 100%">
		<span class="etat-dispo" style="position: absolute;bottom: 70px; width: 100%;left: 0;">DISPONIBLE</span>
	</div> -->

	<section class="text-center iconiques">
		<div class="row">

<!-- 		<div class="large-12 columns text-center titre">
-->
<!-- 			<span class="large-4 columns filet"></span>
-->			<h2 class="large-12 columns">Modèles icôniques</h2>
<!-- <span class="large-4 columns filet"></span> -->

<!-- </div> -->

<div class="large-12 columns text-center">
	<p class="hide-for-small-only large-2 columns"></p>
	<p class="intro small-12 large-8 columns">
		Ne passez pas à côté de notre catégorie icôniques : une sélection de pièces 
		rares et uniques à ne surtout pas manquer.
	</p>
	<p class="hide-for-small-only large-2 columns"></p>
</div>

		<!-- <?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( woocommerce_content() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</article>

	<?php endwhile;?> -->

	<div class="row listing-produits">
		<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 8,
			'meta_key' => 'total_sales',
			'orderby' => 'meta_value_num',
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post(); global $product;

			get_template_part( 'template-parts/best-sells', get_post_format());

				//wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
		?>
	</div>

	

	<div class="row text-center"><!-- CTA TOUTES NOS MONTRES-->

		<a role="button" class="cta" href="<?php echo esc_url( home_url( '/' ) ); ?>categorie-produit/montres/">
			<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			DÉCOUVRIR TOUTES NOS MONTRES
		</a>
	</div>
	<?php do_action( 'foundationpress_after_content' ); ?>
</div>
</section>

<section class="text-center maison"><!-- BACKGROUND MONTRES HORLOGÈRES PHARES-->
	<div class="row"><!-- contenu -->
		<h2>Maisons horlogères phares</h2>
		<div class="large-12 columns text-center">
			<p class="hide-for-small-only large-2 columns"></p>
			<p class="intro small-12 large-8 columns">Timelapse vous propose un vaste choix de montres de marques. Plus de 30 maisons horlogères comme <strong>Breitling</strong>, 
				<strong>Rolex</strong> ou encore <strong>Cartier</strong> sont référencées afin de trouver la montre qui est faite pour vous.
			</p>
			<p class="hide-for-small-only large-2 columns"></p>
		</div>

		<div class="large-up-6 medium-up-6 small-up-3 text-center">
			<div class="large-2 columns brand"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/logo-jaeger.png" alt="logo Jaeger Leboultr"></a></div>
			<div class="large-2 columns brand"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/logo-breitling.png" alt="logo Breitling"></a></div>
			<div class="large-2 columns brand"><a href="http://localhost:8888/www.timelapse.com/categorie-produit/montres/omega/"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/logo-omega.png" alt="logo Jaeger Omega"></a></div>
			<div class="large-2 columns brand"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/logo-cartier.png" alt="logo Cartier"></a></div>
			<div class="large-2 columns brand"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/logo-iwc.png" alt="logo IWC schaffhausen"></a></div>
			<div class="large-2 columns brand"><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/logo-rolex.png" alt="logo Jaeger Rolex"></a></div>
		</div>
	</div><!-- FIN ROW -->
</section><!-- FIN BACKGROUND -->



<section class="text-center journal"><!-- JOURNAL TIMELAPSE-->
	<div class="row"><!-- contenu -->
		<h2>Journal Timelapse</h2>

		
		<article>
			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 3,
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

		</article>

	</div>
	<div class="row">

		<a role="button" class="cta-blog" href="<?php echo esc_url( home_url( '/' ) ); ?>index.php/journal">
			<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			VOIR PLUS D'ARTICLES
		</a>

	</div><!-- FIN ROW -->
</section><!-- FIN JOURNAL TIMELAPSE-->


<?php get_footer();
