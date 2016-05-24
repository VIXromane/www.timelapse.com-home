


<?php
if(is_front_page()||is_home()):?>
<section class="adieu" id="intro">

	<div id="visu-intro">
		<div id="circles">
			<div id="point1" class="points"></div>
			<div id="point2" class="points"></div>
			<div id="point3" class="points"></div>
			<div id="point4" class="points"></div>

		</div>
	</div>

	<div class="intro-content text-center">
		<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/complete-logo-white-timelapse.png" alt="logo full verison Timelapse introduction">
		<h1>Montres intemporelles de collection</h1>
		<a class="removeme" href="#" id="action">Trouvez votre modèle<br/>
			<i class="fa fa-angle-down" aria-hidden="true"></i>
		</a>
	</div>

		<!--<img id="visuel-introduction" src="<?= _URL_IMAGES; ?>/_visuels_dyns/visuel-intro.png" alt="visuel Timelapse introduction">-->
	</section>

<?php endif; ?>


	<?php
/**
 * Basic WooCommerce support
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
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

<section class="text-center iconiques">
	<div class="row">
		<h2>Modèles icôniques</h2>

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

	<ul class="products">
		<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 8,
			'orderby' =>'rand','order' => 'DESC'
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
			wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
		?>
	</ul><!--/.products-->

	<div class="row text-center"><!-- CTA TOUTES NOS MONTRES-->

		<a role="button" class="cta" href="#">
			<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			DÉCOUVRIR TOUTES NOS MONTRES
		</a>
	</div>
	<?php do_action( 'foundationpress_after_content' ); ?>
</div>
</section>





	<?php get_footer();
