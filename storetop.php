<?php
/**
 * Template Name: StoreTop Template
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

			<div id="storecontent">
		<?php query_posts( array(
		'posts_per_page' => -1, 
		'category_name' => StoreTop, 
		)); ?>			
		<ul>
		<?php while ( have_posts() ) : the_post(); ?>
			
			<li>	<a href="javascript:;" rel="<?php echo $post->ID; ?>" class="postpopup"><div class="artthumb">
					<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
					<p class="thumb_title"><?php the_title(); ?></p>
				</div></a>
				</li>
			
			<?php endwhile; ?>
			
			</ul>
					
	<?php query_posts( array(
		'posts_per_page' => -1, 
		'category_name' => Store, 
		)); ?>			
		<ul>
		<?php while ( have_posts() ) : the_post(); ?>
			
			<li>	<a href="javascript:;" rel="<?php echo $post->ID; ?>" class="postpopup"><div class="artthumb">
					<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
					<p class="thumb_title"><?php the_title(); ?></p>
				</div></a>
				</li>
			
			<?php endwhile; ?>
			
			</ul>
			
			
			
</div>

<?php get_footer(); ?>

