<?php /*

Plugin Name:  SlideShare Embeds
Version:      1.0.0
Description:  Adds support for embedding a SlideShare presentation just by putting its link in your post.
Author:       Jai Pandya
Author URI:   http://jai.im

*/

if ( function_exists('wp_oembed_add_provider') ) {
	add_action( 'plugins_loaded', 'enable_oembed_slideshare', 7 );
}

function enable_oembed_slideshare() {
  wp_oembed_add_provider( '#http://(www\.)?slideshare.net/*#i', 'http://www.slideshare.net/api/oembed/1', true );
}
?>