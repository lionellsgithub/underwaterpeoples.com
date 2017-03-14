<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );


	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/wordpress/wp-content/themes/twentyten/images/favicon.png"/>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!--<script type="text/javascript" src="<?php bloginfo('url'); ?>/wordpress/wp-content/themes/twentyten/js/jquery.simplemodal-1.4.1.js"></script>-->
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wordpress/wp-content/themes/twentyten/js/script.js"></script>
</head>

<body>
<div id="menumobile">
	<p>MENU</p>
	<ul>
		<li><a href="<?php bloginfo('url'); ?>">HOME
		</a></li>

		<li><a href="<?php bloginfo('url'); ?>?page_id=884">ABOUT
		</a></li>

		<li><a href="<?php bloginfo('url'); ?>?page_id=574">ARTISTS
		</a></li>

		<li><a href="<?php bloginfo('url'); ?>?page_id=576">STORE
		</a></li>

		<li><a href="<?php bloginfo('url'); ?>/wordpress/cart" style="text-decoration: underline;">CART</a></li>
		</ul>
</div>

<div id="wrapper">

<div id="logo">
<img src="<?php bloginfo('url'); ?>/wordpress/wp-content/themes/twentyten/images/up.png">
<div id="logop"><a href="<?php bloginfo('url'); ?>/wordpress/cart">View Cart</a>
<br/><?php echo wpusc_cart_item_qty(); ?><br/></div>
</div>
<div id="up">UNDERWATER PEOPLES RECORDS</div>


<div id="navigation">

<ul>
<li><a href="<?php bloginfo('url'); ?>">HOME
</a></li>

<li><a href="<?php bloginfo('url'); ?>?page_id=884">ABOUT
</a></li>

<li><a href="<?php bloginfo('url'); ?>?page_id=574">ARTISTS
</a></li>

<li><a href="<?php bloginfo('url'); ?>?page_id=576">STORE
</a></li>

<!--
<li><a href="<?php bloginfo('url'); ?>?p=287">BLOG
</a></li>

<li><a href="<?php bloginfo('url'); ?>?page_id=578">VIDEOS
</a></li>			

<li><a href="<?php bloginfo('url'); ?>/shows">SHOWS
</a></li>
-->

<li><a href="http://underwaterpeoples.us1.list-manage.com/subscribe?u=c426ecca989fbcd7a8f2e9283&id=4daad34cf1" target="_blank">NEWSLETTER
</a></li>	
</ul>
			
<div id="links">
<!--<a href="http://underwaterpeoples.us1.list-manage.com/subscribe?u=c426ecca989fbcd7a8f2e9283&id=4daad34cf1" target="_blank"><p>newsletter</p></a>
-->
<a href="http://twitter.com/underwaterpeeps" target="_blank"><img src="<?php bloginfo('url'); ?>/wordpress/wp-content/themes/twentyten/images/links/twitter2.png">
</a>
<a href="http://www.facebook.com/underwaterpeoples" target="_blank"><img src="<?php bloginfo('url'); ?>/wordpress/wp-content/themes/twentyten/images/links/facebook2.png">
</a>
<a href="http://www.youtube.com/underwaterpeoples" target="_blank"><img src="<?php bloginfo('url'); ?>/wordpress/wp-content/themes/twentyten/images/links/yt2.png">
</a>
<a href="http://underwaterpeoples.tumblr.com" target="_blank"><img src="<?php bloginfo('url'); ?>/wordpress/wp-content/themes/twentyten/images/links/flickr2.png">
</a>
<a href="http://soundcloud.com/underwaterpeoples" target="_blank"><img src="<?php bloginfo('url'); ?>/wordpress/wp-content/themes/twentyten/images/links/sc.png">
</a>

</div>




				
				</div>

