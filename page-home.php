<?php
/**
 * Template Name: Home Page
 *
 * Description: Home Page
 *
 * @package zuChem
 */

get_header(); ?>

<!-- ==================== FLASH ==================== -->
<div class="zu_index_img">
	<img src="<?php bloginfo('template_directory'); ?>/images/index1.jpg" alt="zuChem - products to make life sweeter" />
</div>
<!-- ==================== FLASH ==================== -->


<div class="zu-index-content">

<!-- ==================== LEFT CONTENT AREA ==================== -->
		<div class="zu_index_left">
			<h1><?php the_field('title','114'); ?></h1>
			<p><?php the_field('content','114'); ?></p>
		</div>
<!-- ==================== LEFT CONTENT AREA ==================== -->


<!-- ==================== RIGHT CONTENT AREA ==================== -->
		<div class="zu_index_right">

			<div class="zu_index_right_item">
					<h2>Partnering Opportunities</h2>
						<p><?php the_field('partnering','114'); ?></p>
				<p><a href="<?php the_field('pdf1','114'); ?>">Mannitol Partnering Summary</a></p>
				<p><a href="<?php the_field('pdf2','114'); ?>">Xylitol Partnering Summary</a></p>
				</div>

				<div class="zu_index_right_item">
						<h2>zuChem News</h2>
						<p><?php echo do_shortcode('[display-posts posts_per_page="1"]'); ?></p>

						<h2>zuCarb Rare Sugars</h2>
						<img align="left" class="alignleft" style="margin-bottom:0;" src="<?php bloginfo('template_directory'); ?>/images/zucarb.jpg" alt="zuCarb rare sugars" />
						<p>Custom synthesis of rare and modified sugars for pharmaceutical applications. </p>
						<p><a href="<?php bloginfo('url'); ?>/pharmaceuticals/">MORE &raquo;</a></p>
						<p>&nbsp;</p>
				</div>
		 </div><!-- .zu_index_right -->
<!-- ==================== RIGHT CONTENT AREA ==================== -->

</div><!-- .zu-index-content -->

<?php get_footer(); ?>