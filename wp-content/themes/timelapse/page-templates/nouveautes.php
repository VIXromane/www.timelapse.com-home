<?php
/*
Template Name: Nouveautés
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>






<div class="main-navigation">
    <div class="small-12 large-12 columns row ariane">
    <?php woocommerce_breadcrumb(); ?>
  </div>
</div>

<header class="small-12 large-12 columns text-center main-navigation">
  <h1 class="news-title"><?php the_title(); ?></h1>
</header>

  <div class="row">
 

    <form class="woocommerce-ordering medium-2 small-12 columns tri-news" method="get">
      <select name="orderby" class="orderby">
        <option value="menu_order"  selected='selected'>Tri par défaut</option>
        <option value="popularity" >Tri par popularité</option>
        <option value="rating" >Tri par notes moyennes</option>
        <option value="date" >Tri par nouveauté</option>
        <option value="price" >Tri par tarif croissant</option>
        <option value="price-desc" >Tri par tarif décroissant</option>
      </select>
    </form>
  </div>


<section class="text-center">

  <div class="row listing-produits">
    <?php
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 8,
      'orderby' =>'rand','order' => 'DESC',
      'product_cat' => 'montres'
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


  <nav class="woocommerce-pagination">
    <ul class='page-numbers'>
      <li><a class='page-numbers' href='http://localhost:8888/www.timelapse.com/nouveautes/'>1</a></li>
      <li><a class='page-numbers' href='http://localhost:8888/www.timelapse.com/nouveautes/page/2/'>2</a></li>
      <li><a class="next page-numbers" href="http://localhost:8888/www.timelapse.com/nouveautes/page/2/">&rarr;</a></li>
    </ul>
  </nav>

</section>



<?php get_footer();
