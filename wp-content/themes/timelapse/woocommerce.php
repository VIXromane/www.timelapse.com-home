<?php
/**
 * Basic WooCommerce support
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

$obj = get_queried_object();
get_header(); ?>

<div class="main-navigation">
	<div class="small-12 large-12 columns row ariane">
		<?php woocommerce_breadcrumb(); ?>
	</div>
</div>

<?php if(is_product_category('montres')){ ?>

<h1 class="montre-titre text-center">Montres</h1>

<?php } ?>

<?php if(is_product_category('montres')){ ?>
<div class="filtres-afficher">
	<h4 class="small-12 columns text-center filtre-title">Affinez votre recherche</h4>

	<div class="row content-filtres">
		<?php 	
			if($obj->term_id == 95) {
			dynamic_sidebar('recherche-filtres'); 					

			}
			elseif($obj->term_id == 96) { 

			}
			else
			{

			}
		?>

	</div>
	
</div>
<?php } ?>

<div class="row">

	<div class="small-12 large-12 columns full-watches" role="main">

		
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php while ( woocommerce_content() ) : ?>


		<?php the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
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
</div>
</div>
<?php get_footer();

