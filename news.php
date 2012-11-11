<?php
/**
 * Template Name: News Template
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

			<div id="feedscontentleft">	
<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/wordpress/magpie/rss_fetch.inc'; 
$url = 'http://www.google.com/reader/public/atom/user%2F16454352480249330224%2Fstate%2Fcom.google%2Fbroadcast';

$num_of_items = 40;

$rss = fetch_rss($url);

/*print_r($rss);*/



foreach ($rss->items as $item ) {
	 $title = $item[title];
	$url   = $item[link];
	$image   = $item[image];
            $date = $item[date_timestamp];
            $desc = $item[atom_content]; 
	echo "<li><a href=$url>$title</a><br><br>$desc</li>
	<br><br>
	
	
";

}

?>



			</div>
			

<?php get_footer(); ?>