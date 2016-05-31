<?php
/*
Template Name: Nouveautés
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<!-- <div id="page-full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>
      </div>
      <footer>

      </footer>
      <?php do_action( 'foundationpress_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_page_after_comments' ); ?>
  </article>
  
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div> -->


<header class="small-12 large-12 columns text-center">
  <h1 class="entry-title"><?php the_title(); ?></h1>
</header>

<div class="main-navigation">
    <div class="small-12 large-12 columns row ariane">
    <?php woocommerce_breadcrumb(); ?>
  </div>
</div>

<section class="text-center">

  <div class="row listing-produits">
    <?php
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 12,
      'orderby' =>'rand','order' => 'DESC'
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
     <?php do_action('woocommerce_after_shop_loop'); // woocommerce pagination   ?>
  </div>

</section>



<?php get_footer();
