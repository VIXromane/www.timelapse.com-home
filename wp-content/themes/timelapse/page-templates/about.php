<?php
/*
Template Name: About
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
          <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
          <p><?php the_tags(); ?></p>
      </footer>
      <?php do_action( 'foundationpress_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_page_after_comments' ); ?>
    </article>

  <?php endwhile;?>

  <?php do_action( 'foundationpress_after_content' ); ?>

</div> -->
<div class="main-navigation">
    <div class="small-12 large-12 columns row ariane">
    <?php woocommerce_breadcrumb(); ?>
  </div>
</div>

<header class="small-12 large-12 columns text-center main-navigation">
  <h1 class="entry-title"><?php the_title(); ?></h1>
</header>


<section id="intro-about" class="small-12 large-12 columns text-center">

  <div class="row">

    <p class="hide-for-small-only large-2 columns"></p>

      <p class="intro small-12 large-8 columns">
      Spécialiste en haute horlogerie vintage, Timelapse vous accompagne dans votre recherche et dans l’acquisition de la montre idéale. Nous selectionnons pour vous des modèles de seconde main et les marques de luxe les plus prestigieuses
      pour vous proposer de véritables pièces d’exception.
    </p>
      <p class="hide-for-small-only large-2 columns"></p>

  </div>
</section>



<div class="row info">
    <img class=" small-12 medium-6 columns" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/about-1.jpg" alt="certification des produits authentiques">
  <article class=" small-12 medium-6 columns part1">

    <h6>Certification de produits <br/>authentiques</h6>

    <p>
      Nous vous garantissons des pièces <strong>authentiques</strong> et de <strong>qualité</strong>. Tous nos modèles sont authentifiés par notre équipe d’experts.</p>

      <p>En effet, toutes les montres sont systématiquement nettoyés,révisés, polis dans notre atelier <strong>horloger personnel</strong>.Les pièces que nous sélectionnons répondentà des critères bien précis.  
    </p>

  </article>

</div>



<div class="row info">

  <article class=" small-12 medium-6 columns part2">

    <h6>Notre atelier <br/>horloger</h6>

    <p>
      Timelapse est doté d’un <strong>atelier horloger</strong> interne pour toujours vous proposer des services et des produits de qualité irréprochables.</p>
      <p>Situé à <strong>Strasbourg</strong>, cet atelier se compose aujourd’hui de 11 horlogers qualifiés, d’un <strong>chef d’atelier</strong> et d’un chargé du service après-vente. N’hésitez pas à nous rendre visite ! </p>

  </article>

    <img class=" small-12 medium-6 columns" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/about-2.jpg" alt="atelier horloger">
</div>

<div class="row info">
    <img class=" small-12 medium-6 columns" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/about-3.jpg" alt="garantie Timelapse">
  <article class=" small-12 medium-6 columns part3">

    <h6>La garantie <br/>Timelapse</h6>

    <p>
      Grâce à la <strong>garantie Timelapse</strong>,  vous pouvez faire votre choix en toute <strong>sérénité</strong>, avec l’<strong>assurance</strong> de pouvoir la confier à un professionnel en cas de panne. </p>

      <p>Si au cours de l’année de garantie qui suit l’achat de votre montre, celle-ci rencontre une panne ou un défaut de fabriquation, vous pouvez nous contacter et nous renvoyer la montre par courrier.</p>



  </article>

</div>



<?php get_footer();
