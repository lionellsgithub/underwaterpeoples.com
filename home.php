<?php
/**
 * Template Name: Home Template
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

<div id="menu2">
<?php query_posts( array(
      'posts_per_page' => 1,
      'category_name' => Menu2,
 ));
?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
			<?php the_content(); ?>

<?php endwhile; ?>
</div>





<div id="homeleftbox">
<div id="hometop">

<?php query_posts( array(
      'posts_per_page' => 1,
      'category_name' => Blog,
 ));
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink(); ?>"><h1><?php the_date(); ?></h1>
			<h2><?php the_title(); ?></h2>
<?php the_post_thumbnail('large');?>
			</a>
						
<?php endwhile; 
?>

</div>
<br/>
<?php
add_filter('post_limits', 'my_post_limit');

?>

<?php
global $myOffset;
$myOffset = 1;
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('offset='.$myOffset.'&showposts=5'.'&paged='.$paged);
?>
<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
       
<?php endwhile; ?>

<?php query_posts( array(
	'offset' => 1,
      'posts_per_page' => 7,
      'category_name' => Blog,
      'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
 ));
?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_permalink(); ?>"><h1><?php the_date(); ?></h1></a>
			<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			
			
			<?php the_content(); ?>

<?php endwhile; ?>

<?php remove_filter('post_limits', 'my_post_limit'); ?>


<div id="blogfooter">
<?posts_nav_link() ?>
	
</div>
</div>

<div id="homerightbox">

<iframe width="100%" height="450" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fplaylists%2F2335010&amp;auto_play=false&amp;show_artwork=false&amp;color=66cccc"></iframe>
<?php get_sidebar();?>

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
</a>

</div>

<?php get_footer(); ?>