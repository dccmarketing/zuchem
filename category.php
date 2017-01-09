<?php get_header(); ?>


	<div class="zu_sub_pg_nav">
        	<?php get_sidebar(); ?>
	
	</div>    
    <div class="zu_sub_pg_content">


		<script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.zu_post_content').hide();
            jQuery('a.zu-toggle').click(function() {
                jQuery(this).parent('div').next('div').toggle(800);
                return false;
            });
        });
        </script>
        
        <?php 
		if (have_posts()) : 
			$category = get_the_category(); 						
			if ($category[0]->cat_ID == "3") { 		
				echo "<h1>Press Releases</h1>\n";
			}
			while (have_posts()) : the_post(); 	
				
		?>
		
				<div class="zu_list_posts">
					
					<div class="zu_post_excerpt">
		<?php
						echo "<h2 style=\"padding-bottom:2px; margin-bottom:2px;\">";
						$key="news_date"; 
						echo get_post_meta($post->ID, $key, true);
						echo "</h2>\n";
						echo "<h3 style=\"padding-bottom:2px; margin-bottom:2px; padding-top: 0; margin-top: 0;\">";
						the_title();
						echo "</h3>\n";					
						echo "<div style=\"margin:0; padding:0; font-size:12px;\">";
						echo the_excerpt();						
						echo "</div>\n";
	?>
						<div style="padding-bottom:10px;">
						<a href="#" class="zu-toggle">Read Full Story &raquo;</a>
						</div>
					
						<div class="zu_post_content">
							<?php the_content(); ?>
						</div>

					</div>
				
				<br clear="all" />
				</div>                    
									
		<?php		
			endwhile;
		endif;
		?>
	<br clear="all" />
	</div>
    <br clear="all" />

<?php get_footer(); ?>