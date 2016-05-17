<?php
/**
 * Basic WooCommerce support
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>



<div class="row">

	<div class="small-12 large-12 columns" role="main"><!-- RECHERCHE AVANCEE -->
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

	</div>
-->

	<!-- LISTING PRODUIT WOO COMMERCE MODELES ICONIQUES-->
	<div class="small-12 large-12 columns" role="main"><!-- MAIN-->

		<div class="row column text-center">
			<h2>Modèles icôniques</h2>
		</div>
		<p>Ne passez pas à côté de notre catégorie icôniques : une sélection de pièces 
		rares et uniques à ne surtout pas manquer.
		</p>

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( woocommerce_content() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					<h3 class="heading"><?php the_title(); ?></h3>
				</header>
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
		<?php endwhile;?>

		<?php do_action( 'foundationpress_after_content' ); ?>

		<div class="row large-12 columns text-center">
			<h2>Maisons horlogères phares</h2><!-- MAISONS HORLOGÈRES PHARES-->
		</div>
		<p>Timelapse vous propose un vaste choix de montres de marques. Plus de 30 maisons horlogères comme Breitling, 
			Rolex ou encore Cartier sont référencées afin de trouver la montre qui est faite pour vous.
		</p>

	</div>


	<!-- MAISONS HORLOGÈRES PHARES-->

	<div class="small-12 large-12 columns" role="main">


	</div>
</div><!-- FIN ROW-->


<?php get_footer();
