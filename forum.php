<?php
/**
 * Template Name: Forum Template
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
			
			<div id="forumcontent">
			<?php echo do_shortcode('[bbpress]'); ?>
			
		
						</div>

<?php get_footer(); ?>