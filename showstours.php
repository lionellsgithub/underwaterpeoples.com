<?php
/**
 * Template Name: Shows/Tours Template
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<style type="text/css">
	#homerightbox{
		margin-top:10px;
		margin-right:-10px;
	}
	#homerightbox #albums{
	    margin-top:0px;
	}
</style>

		<div id="showstours">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
	    </div>
		
<div id="homerightbox">

			<a href="<?php bloginfo('url'); ?>?page_id=576">
			<div id="albums">
	<?php query_posts( array(
		'posts_per_page' => -1, 
		'category_name' => Store,
		)); ?>			
		<ul>
		<?php while ( have_posts() ) : the_post(); ?>
			
					<li><?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?></li>
							
			<?php endwhile; ?>
			
			</ul>
</div>
</div>

<?php get_footer(); ?>