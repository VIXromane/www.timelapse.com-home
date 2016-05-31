<?php
/*
Template Name: Contact
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

<header class="small-12 large-12 columns text-center">
  <h1 class="entry-title main-navigation"><?php the_title(); ?></h1>
  
  <div class="large-12 columns text-center">
    <p class="hide-for-small-only large-2 columns"></p>
    <p class="intro-contact small-12 large-8 columns">
      Notre équipe est à votre disposition pour répondre à vos questions et vous apporter l’aide nécessaire. 
      Avant de nous contacter, nous vous invitons à consulter les liens ci-dessous. 
    </p>
    <p class="hide-for-small-only large-2 columns"></p>
  </div>
</header>

<section id="blackandwhite" class="large-12 columns">

  <article class="black medium-6 small-12 columns"> <!-- encart noir formulaire de contact -->

    <div class="row medium-9 colums content">

      <!-- <form action="">

        <div class="row">
          <label>Votre nom et prénom
            <input type="text" placeholder="Entrez votre nom et prénom" />
          </label>
        </div>


        <div class="row">
          <label>Votre n° de téléphone
            <input type="text" placeholder="Entrez votre numéro de téléphone" />
          </label>
        </div>

        <div class="row">
         <label>Votre adresse email
           <input type="text" placeholder="Entrez votre adresse email" />
         </label>
       </div>

       <div class="row">
        <label for="sujet">Sujet de la demande
          <select>
            <option value="husker">Service clientèle</option>
            <option value="starbuck">Retours et échanges</option>
            <option value="hotdog">Informations sur l'entreprise</option>
            <option value="apollo">Autre</option>
          </select>
        </label>
      </div>

      <div class="row">
        <label>Votre message
          <textarea placeholder="Laissez votre message"></textarea>
        </label>
      </div>

      <div class="row large-6 columns">
        <a href="#" class="send button postfix">Envoyer</a>
      </div>

    </form> -->


    <?php echo do_shortcode('[contact-form-7 id="56" title="contact-form"]') ?>

  </div>
</article>

<article class="white medium-6 small-12 columns"><!-- encart blanc liens utiles -->
  <div class="row medium-10 colums content">

    <h3>FAQ</h3>
    <p>
      Consultez les réponses aux questions les plus souvent posées par nos clients dans notre <a href="#"><u>FAQ</u></a> (foire aux questions).
    </p>

    <h3>Retours et échanges</h3>
    <p>
      Voir nos <a href="#"><u>conditions de retours et d’échange</u></a>.
    </p>


    <h3>Paiement sécurisé</h3>
    <p>
      Toutes les transitions effectuées sur le site sont 100% sécurisées.
    </p>
    <hr/>
    <p>
      Merci de prendre en compte que nous répondons généralement à toute demande sous 1 à 2 jours ouvrés. 
    </p>
    <p><strong>
      Service client</br>
      03 88 03 03 03</br>
      bonjour@timelapse.fr</br></strong>

    </p>


  </div>

</article>
</section>


<!-- FOOTER car plus court que les autres en get_footer
-->

<section class="text-center social"><!-- SOCIAL NETWORKS + NEWSLETTER-->
  <div class="row"><!-- contenu -->
    <h2>Restez à l’heure de l’actualité Timelapse</h2>
    <div id="social" class="small-12 medium-4 columns">
      <div class="row">
        <article class="small-6 medium-6 columns">
          <a href="#">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/social-fb.jpg" alt="facebook timelapse">
          </a>
        </article>
        <article class="small-6 medium-6 columns">
          <a href="#">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/social-twitter.jpg" alt="twitter timelapse">
          </a>
        </article>
      </div>
      <div class="row">
        <article class="small-6 medium-6 columns">
          <a href="#">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/social-insta.jpg" alt="instagram timelapse">
          </a>
        </article>
        <article class="small-6 medium-6 columns">
          <a href="#">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/social-pinterest.jpg" alt="pinterest timelapse">
          </a>
        </article>
      </div>
    </div>
    <div id="newsletter" class="small-12 medium-7 medium-offset-1 columns">
      <div class="newsletter-content">
        <h3>NEWSLETTER</h3>


        <p>Inscrivez-vous à notre newsletter pour suivre les actualités de Timelapse
          et connaître les nouveaux arrivages en exclusivité.</p>

          <div class="row">
            <div class="row collapse">
              <div class="small-9 columns">
                <input type="text" placeholder="Entrez votre adresse e-mail">
              </div>
              <div class="small-3 columns">
                <a href="#" class="abonnement button postfix">S'abonner</a>
              </div>
            </div>
          </div>      
        </div>
      </div>

    </div>
  </section>

  <footer id="footer" class="text-center">
    <div class="footer-container row">

      <div class="small-12 medium-3 columns">
        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/_visuels/complete-logo-timelapse.png" alt="logo full verison Timelapse">
      </div>
      <div class="small-12 medium-3 columns marge">
        <h5>Informations</h5>
        <ul>
          <li><a href="#">À propos de nous</a></li>
          <li><a href="#">Contactez nous</a></li>
          <li><a href="#">Confidentialité</a></li>
          <li><a href="#">Plan du site</a></li>
          <li><a href="#">Crédits</a></li>
        </ul>
      </div>
      <div class="small-12 medium-3 columns marge">
        <h5>Aide et assistance</h5>
        <ul>
          <li><a href="#">Mentions légales</a></li>
          <li><a href="#">Livraisons et retours</a></li>
          <li><a href="#">Garantie Timelapse</a></li>
          <li><a href="#">Transactions sécurisés</a></li>
          <li><a href="#">CGV</a></li>
        </ul>
      </div>
      <div class="small-12 medium-3 columns marge">
        <h5>Suivez-nous</h5>
        <ul>
          <li><a href="#">Réseaux sociaux</a>
            <ul id="social-list">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
              </a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
              </a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
              </a></li>
              <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i>
              </a></li>
            </ul>
          </li>
          <li><a href="#">Newsletter</a></li>
          <li><a href="#">Journal Timelapse</a></li>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
        </ul>
      </div>


      <?php do_action( 'foundationpress_before_footer' ); ?>
      <?php dynamic_sidebar( 'footer-widgets' ); ?>
      <?php do_action( 'foundationpress_after_footer' ); ?>
    </footer>
    <section id="post-foot">
      <div><p>2016 - Tous droits réservés - <strong>Timelapse ©</strong></p></div>
    </section>

    <?php do_action( 'foundationpress_layout_end' ); ?>

    <?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
  </div><!-- Close off-canvas wrapper inner -->
</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>





<!-- <script src="assets/components/jquery-cycle2/src/jquery.cycle2.js"></script>
  <script src="assets/components/jquery-cycle2/src/jquery.cycle2.carousel.js"></script> -->

  <?php wp_footer(); ?>
  <?php do_action( 'foundationpress_before_closing_body' ); ?>



  <!-- Sript disparition visuel intro -->
  <script>

  $("a.removeme").click(function() {
    $("#intro").fadeOut(600, function(){
      (this).remove();
    });
  });

  </script>
  <script src="<?php echo get_stylesheet_directory_uri() ?>/customwoocommerce.js"></script>


</body>
</html>

