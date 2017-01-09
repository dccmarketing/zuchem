<?php get_header(); ?>

    <div class="zu_sub_pg_content">
    	<?php the_title('<h1>', '</h1>'); ?>

		<?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div><!-- .zu_sub_pg_content -->

	<br clear="all" />

<?php get_footer(); ?>