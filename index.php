<?php
/**
 * The main template file.
 *
 * @package zuChem
 */

get_header();

	?><div class="zu_sub_pg_content">
		<main id="main" class="site-main" role="main"><?php

		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header contentsingle"><?php

						the_title( '<h1 class="entry-title">', '</h1>' );

					?></header><!-- .entry-header -->

					<div class="entry-content"><?php

						the_excerpt();

					?></div><!-- .entry-content -->
					<div><a href="#" class="full-content-link">Read Full Story »</a></div>
					<div class="full-content"><?php

						the_content();

					?></div>
				</article><!-- #post-## --><?php

			endwhile;

		else :

			get_template_part( 'content', 'none' );

		endif;

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
?>