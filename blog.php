<?php
/**
 * Template Name: Blog Template
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

			<div id="blogcontent" role="main">
				 <?php query_posts( array(
      'posts_per_page' => 10,
      'category_name' => Blog,
      'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
 ));
?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h1><?php the_date(); ?></h1>
			<h2><?php the_title(); ?></h2>
			
			
			<?php the_content(); ?>
			


<h3><a href="<?php the_permalink(); ?>">Comment / Share</a></h3>

<?php endwhile; ?>
<div id="blogfooter">
<?posts_nav_link() ?>	
</div>		
			</div><!-- #content -->
<div id="blogsidebar">
<?php get_sidebar();?>

<h2>Recent Posts</h2>
<ul>
<?php $recent = new WP_Query("cat=322&showposts=20"); while($recent->have_posts()) : $recent->the_post();?>
<li><a href="<?php the_permalink() ?>" rel="bookmark">
<h1><?php the_date(); ?></h1>
<?php the_title(); ?>
</a></li>
<?php endwhile; ?>
</ul>

</div>
