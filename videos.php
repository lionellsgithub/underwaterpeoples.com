<?php
/**
 * Template Name: Videos Template
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

			<div id="videoscontent">
			<div id="videoplayer">
<?php 
echo do_shortcode('[youtubechannel channelname="Underwaterpeoples" numvideos="20" width="800" showvideotitle="Yes"]')

 ?>
		</div>	</div><!-- videoscontent -->


<?php get_footer(); ?>