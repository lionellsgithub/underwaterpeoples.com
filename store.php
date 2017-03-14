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
<div class="storenav">
	<a class="all" href="#">ALL</a>
	<a class="upcatalog" href="#">UNDERWATER PEOPLES</a>
	<a class="pcsv" href="#">PACIFIC CITY SOUND VISIONS</a>
	<a class="distro" href="#">DISTRO</a>
	<a class="merch" href="#">MERCH</a>
	<a class="specialoffers" href="#">SPECIAL OFFERS</a>

</div>
<div id="storecontent" class="mainstorecontent">
	
	<?php query_posts( array(
		'posts_per_page' => -1, 
		'category_name' => StoreTop, 
		)); ?>			
		<ul class="storetop">
		<?php while ( have_posts() ) : the_post(); ?>
			
			<li>	<a href="<?php the_permalink(); ?>"><div class="artthumb">
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
			
			<li>	<a href="<?php the_permalink(); ?>"><div class="artthumb">
					<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
					<p class="thumb_title"><?php the_title(); ?></p>
				</div></a>
				</li>
			
			<?php endwhile; ?>
			
			</ul>
<div id="clearboth" style="clear:both; height:10px;"></div>

</div>
			
<div id="storecontent" class="pcsvcontent">

	<?php query_posts( array(
		'posts_per_page' => -1, 
		'category_name' => PCSV, 
		)); ?>			
		<ul>
		<?php while ( have_posts() ) : the_post(); ?>
			
			<li>	<a href="<?php the_permalink(); ?>"><div class="artthumb">
					<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
					<p class="thumb_title"><?php the_title(); ?></p>
				</div></a>
				</li>
			
			<?php endwhile; ?>
			
			</ul>
		<div id="clearboth" style="clear:both; height:10px;"></div>

</div>

<div id="storecontent" class="upcatalogcontent">

	<?php query_posts( array(
		'posts_per_page' => -1, 
		'category_name' => upcatalog, 
		)); ?>			
		<ul>
		<?php while ( have_posts() ) : the_post(); ?>
			
			<li>	<a href="<?php the_permalink(); ?>"><div class="artthumb">
					<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
					<p class="thumb_title"><?php the_title(); ?></p>
				</div></a>
				</li>
			
			<?php endwhile; ?>
			
			</ul>
		<div id="clearboth" style="clear:both; height:10px;"></div>

</div>
<div id="storecontent" class="distrocontent">
	<?php query_posts( array(
		'posts_per_page' => -1, 
		'category_name' => distro, 
		)); ?>			
		<ul>
		<?php while ( have_posts() ) : the_post(); ?>
			
			<li>	<a href="<?php the_permalink(); ?>"><div class="artthumb">
					<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
					<p class="thumb_title"><?php the_title(); ?></p>
				</div></a>
				</li>
			
			<?php endwhile; ?>
			
			</ul>
		<div id="clearboth" style="clear:both; height:10px;"></div>

</div>
<div id="storecontent" class="merchcontent">
	<p style="clear:both;padding-top: 30px;
padding-left: 10px;font-size:12px;">COMING SOON</p>
	<?php query_posts( array(
		'posts_per_page' => -1, 
		'category_name' => merch, 
		)); ?>			
		<ul>
		<?php while ( have_posts() ) : the_post(); ?>
			
			<li>	<a href="<?php the_permalink(); ?>"><div class="artthumb">
					<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
					<p class="thumb_title"><?php the_title(); ?></p>
				</div></a>
				</li>
			
			<?php endwhile; ?>
			
			</ul>
		<div id="clearboth" style="clear:both; height:10px;"></div>

</div>
<div id="storecontent" class="specialofferscontent">
	<?php query_posts( array(
		'posts_per_page' => -1, 
		'category_name' => specialoffers, 
		)); ?>			
		<ul>
		<?php while ( have_posts() ) : the_post(); ?>
			
			<li>	<a href="<?php the_permalink(); ?>"><div class="artthumb">
					<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
					<p class="thumb_title"><?php the_title(); ?></p>
				</div></a>
				</li>
			
			<?php endwhile; ?>
			
			</ul>
		<div id="clearboth" style="clear:both; height:10px;"></div>

</div>
<?php get_footer(); ?>

