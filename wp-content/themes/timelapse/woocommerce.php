<section class="adieu" id="intro">

	<div id="visu-intro" class="animated fadeIn">
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
			<div class="large-2 columns brand"><a href="#"><img src="<?= _URL_IMAGES; ?>/_visuels_dyns/logo-jaeger.png" alt="logo Jaeger Leboultr"></a></div>
			<div class="large-2 columns brand"><a href="#"><img src="<?= _URL_IMAGES; ?>/_visuels_dyns/logo-breitling.png" alt="logo Breitling"></a></div>
			<div class="large-2 columns brand"><a href="#"><img src="<?= _URL_IMAGES; ?>/_visuels_dyns/logo-omega.png" alt="logo Jaeger Omega"></a></div>
			<div class="large-2 columns brand"><a href="#"><img src="<?= _URL_IMAGES; ?>/_visuels_dyns/logo-cartier.png" alt="logo Cartier"></a></div>
			<div class="large-2 columns brand"><a href="#"><img src="<?= _URL_IMAGES; ?>/_visuels_dyns/logo-iwc.png" alt="logo IWC schaffhausen"></a></div>
			<div class="large-2 columns brand"><a href="#"><img src="<?= _URL_IMAGES; ?>/_visuels_dyns/logo-rolex.png" alt="logo Jaeger Rolex"></a></div>
		</div>
	</div><!-- FIN ROW -->
</section><!-- FIN BACKGROUND -->



<section class="text-center journal"><!-- JOURNAL TIMELAPSE-->
	<div class="row"><!-- contenu -->
		<h2>Journal Timelapse</h2>

		<article class="small-12 medium-4 columns text-center"><!-- ARTICLE JOURNAL 1-->
			<a href="#">
				<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/article-blog-1.jpg" alt="photo article blog 1">
				<div>
					<strong>10</strong><br/>
					<time>MAI</time>
				</div>
			</a>
			<h4>
				Glashütte Original Sixties Panorama Date : Elégance en noir et blanc
			</h4>
			<p>
				Retour sur une grande montre d’origine allemande, hommage à la créativité des années soixante : la Sixties Panorama Date de la Maison Glashütte Original.
			</p>
			<a href="#" class="link">
				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>Lire la suite
			</a>
		</article>

		<article class="small-12 medium-4 columns text-center"><!-- ARTICLE JOURNAL 2-->
			<a href="#">
				<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/article-blog-2.jpg" alt="photo article blog 2">
				<div>
					<strong>26</strong><br/>
					<time>AVR</time>
				</div>
			</a>
			<h4>
				Nouvelles Tudor Heritage Black Bay : La Boucle est bouclée
			</h4>
			<p>
				Focus sur les nouvelles Tudor heritage black bay équipées d’un calibre de manufacture. Une montre aux codes vintages maintenant certifiée chronomètre.
			</p>
			<a href="#" class="link">
				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>Lire la suite
			</a>
		</article>

		<article class="small-12 medium-4 columns text-center"><!-- ARTICLE JOURNAL 3-->
			<a href="#">
				<img src="<?= _URL_IMAGES; ?>/_visuels_dyns/article-blog-3.jpg" alt="photo article blog 3">
				<div>
					<strong>08</strong><br/>
					<time>AVR</time>
				</div>
			</a>
			<h4>
				MeisterSinger Phanero : L ’art de prendre le temps 
			</h4>
			<p>
				Découverte de la nouvelle montre MeisterSinger Phanero : Un beau garde-temps mono-aiguille, unisexe et élégant dans une boîte de 35mm. On aime.
			</p>
			<a href="#" class="link">
				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>Lire la suite
			</a>
		</article>
	</div><!-- FIN ROW -->
</section><!-- FIN JOURNAL TIMELAPSE-->


	<?php get_footer();
