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
<script async src="//"></script>
<!-- 1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2236034963906338"
     data-ad-slot="5334557603"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script async src="//"></script>
<!-- 2? -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2236034963906338"
     data-ad-slot="3845014404"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

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
			<h1><?php the_date(); ?></h1>
			<a href="<?php the_permalink(); ?>">
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
			<h1><?php the_date(); ?></h1>
			<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			
			
			<?php the_content(); ?>

<?php endwhile; ?>

<?php remove_filter('post_limits', 'my_post_limit'); ?>


<div id="blogfooter">
<?posts_nav_link() ?>
	
</div>
</div>

<div id="homerightbox">

<iframe width="100%" height="450" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fplaylists%2F2335010&amp;auto_play=false&amp;show_artwork=false&amp;color=E24A4A"></iframe>

<div id="news">
      <h1>NEWS</h1>
      <?php query_posts( array(
      'posts_per_page' => 6,
      'category_name' => News,
 ));
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
						
<?php endwhile; 
?>
</div>
<!--<div id="news">
      <h1>SHOWS</h1>
      <?php query_posts( array(
      'posts_per_page' => 6,
      'category_name' => Shows,
 ));
?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<li><?php the_content(); ?></li>
						
<?php endwhile; 
?>
</div>
-->

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