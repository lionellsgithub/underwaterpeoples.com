<?php
/**
 * Template Name: About Template
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

			<div id="aboutcontent">	
				 <?php query_posts( array(
      'posts_per_page' => 1,
      'category_name' => About,
 ));
?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			
			
			<?php the_content(); ?>

<?php endwhile; ?>

			</div>
			<?php get_footer(); ?>
			