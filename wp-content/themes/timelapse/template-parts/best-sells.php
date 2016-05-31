<div class="small-6 medium-3 columns produit">

	<a href="<?php the_permalink(); ?>">
		<div class="fondgris-home">	
			<span style="display: block;height: 100%;">
				<span class="etat-dispo" style="position: absolute;bottom: 65px; width: 100%;left: 0;">DISPONIBLE</span>
			</span>
			
			<!--?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>-->
		</div>

		<?php the_post_thumbnail(); ?>
		<h5 class="mycat"><?php global $post;
		$terms = get_the_terms( $post->ID, 'product_cat' );
		foreach ( $terms as $term ){
			$category_id = $term->term_id;
			$category_name = $term->name;
			$category_slug = $term->slug;
			break; 
		}
		echo $category_name;
		?>
	</h5>
	<h3><?php the_title(); ?></h3>
	<h4 class="price"><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true); ?>€</h4>
</a>
</div>


