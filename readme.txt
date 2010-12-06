=== SlideShare Embeds for WordPress===
Contributors: jaiz
Tags: embed, oembed, slideshow, slideshare, keynote, powerpoint, ppt, presentation, player, viewer
Requires at least: 2.9.1
Tested up to: 3.0.2
Stable tag: 1.0.0

Enables you to embed a SlideShare presentation just by putting its link in your WordPress post.

== Description ==

SlideShare Offers users the ability to upload and share publicly or privately PowerPoint presentations, Word documents and Adobe PDF Portfolios.

This plugin automatically pulls embed presentation from the SlideShare slideshow link in your WordPress blog post. You just need to put the link to SlideShare presentation on its own line, and it should not be hyperlinked.

The plugin uses oEmbed protocol to fetch the embed content from SlideShare.

More Info:

* [About SlideShare](http://www.slideshare.net/about)
* [WordPress oEmbeds](http://codex.wordpress.org/Embeds)

== Installation ==

Using WordPress Backend

1. Search for `SlideShare`
1. Install the plugin and activate it.

Manually

1. Download the plugin.
1. Extract the zipped file
1. Upload `oembed-slideshare.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

It will enable you to post a SlideShare slideshow link to your blog and automatically replace it with the slideshow.

== Frequently Asked Questions ==

= I posted a URL to a SlideShare presentation, but it was not replaced with the presentation =

The plugin requires such links to be on its own line and not hyperlinked. Check if both the condition are fulfilled or not.

= I want to control maximum dimensions of the presentation =

Use the following format:

[embed width="<max-width>"] link to the presentation [/embed]

replace <max-width> with the maximum width needed. Using the shortcode format described above, the URL won't need to be on its own line.

== Usage ==

1. Install and activate the plugin
1. Create a post
1. Copy the link to SlideShare presentation and paste it on its own line
1. See the magic

Providing maximum width:

Use the following format:

[embed width="<max-width>"] link to the presentation [/embed]

== Changelog ==

= 1.0.0 =
* First Release