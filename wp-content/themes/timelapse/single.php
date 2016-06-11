<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="single-post" role="main" class="single-blog">
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<div class="small-12 large-2 columns">

		</div>
		<div class="small-12 large-8 large-offset-2 columns">
			<span class="title-line"></span>
			<h2 class="entry-title"><?php the_title(); ?></h2>
			<span class="title-line"></span>
			<div class="single-blog-img">

				<?php
				if ( has_post_thumbnail() ) :
					the_post_thumbnail();
				endif;
				?>

			</div>
			<div class="blog-content">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="small-12 large-2 columns">

		</div>

	</div>

	<div class="row text-center">

		<a class="link-blog" href="<?php echo esc_url( home_url( '/' ) ); ?>journal" class="back-blog"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Retour au journal</a>

		<span class="hrborderblog">
			
		</span>
	</div>


<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer();
