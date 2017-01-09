<?php get_header(); ?>

	<div class="zu_sub_pg_nav">
        	<?php get_sidebar(); ?>
	
	</div>    
    <div class="zu_sub_pg_content">
    
    	<?php the_title('<h1>', '</h1>'); ?>
                                    
        <?php
        if (have_posts()) : 
            while (have_posts()) : the_post(); 		
                the_content(); 					
            endwhile;
        endif;
        ?>
    
    </div>
    <br style="clear:both" />
<?php get_footer(); ?>