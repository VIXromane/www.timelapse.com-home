		

		<article class="small-12 medium-4 columns text-center"><!-- ARTICLE JOURNAL 1-->
			<a href="<?php the_permalink(); ?>" class="link-img">
				<?php the_post_thumbnail(); ?>
				<div>
					<strong>10</strong><br/>
					<time>MAI</time>
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