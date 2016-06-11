		
			<article class="small-12 medium-4 large-4 columns end blog-article"><!-- ARTICLE JOURNAL 1-->
			<a href="<?php the_permalink(); ?>" class="link-img">
				<?php the_post_thumbnail(); ?>
				<div>
					<strong>20</strong><br/>
					<time>AVR</time>
				</div>
			</a>
			<h4>
				<?php the_title(); ?>
			</h4>
			<p>
				<?php the_excerpt(); ?>
			</p>
			<a href="<?php the_permalink(); ?>" class="link">
				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>Lire la suite
			</a>
		</article>
