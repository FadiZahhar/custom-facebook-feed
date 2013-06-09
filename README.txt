=== Custom Facebook Feed ===
Contributors: smashballoon
Tags: facebook, social, feed, status
Requires at least: 3.0
Tested up to: 3.5.1
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The Custom Facebook Feed allows you to display a customizable Facebook feed of any public Facebook page or group on your website.

== Description ==

The Custom Facebook Feed allows you to display a customizable Facebook feed of any public Facebook page or group on your website. Other Facebook plugins are Facebook branded and as they use iframes they don't allow you to customize the look, feel and functionality yourself. The Custom Facebook Feed is 100% customizable and by default inherits your theme's style.

To display photos and videos in your feed try out a demo of the PRO version on the [Custom Facebook Feed website](http://smashballoon.com/custom-facebook-feed/demo "Custom Facebook Feed Demo").

== Installation ==

1. Install the Custom Facebook Feed either via the WordPress plugin directory, or by uploading the files to your web server (in the `/wp-content/plugins/` directory).
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Navigate to the plugin settings page to configure your feed.
4. Use the shortcode `[custom-facebook-feed]` in your page, post or widget to display your feed.
5. You can display multiple feeds of different Facebook pages by specifying a Page ID directly in the shortcode: `[custom-facebook-feed id=SarahsBakery show=5]`.
6. You can limit the length of the title and body text by using `titlelength=100` and `bodylength=150` (for example) in the shortcode. `[custom-facebook-feed titlelength=100 bodylength=150]`.

== Frequently Asked Questions ==

= How do I find the Page ID of my Facebook page? =

If you have a Facebook page with a URL like this: `https://www.facebook.com/Your_Page_Name` then the Page ID is just `Your_Page_Name`.  If your page URL is structured like this: `https://www.facebook.com/pages/Your_Page_Name/123654123654123` then the Page ID is actually the number at the end, so in this case `123654123654123`.

= Are there any limitations on which page feeds I can display? =

The feed you're trying to display has to be a publicly accessible page or group. This means that you usually can�t display the feed from your own personal profile or a private group. This is to do with Facebook's privacy policies. You can't just grab a non-public feed and display it to the world. An easy way to test whether it's private it to log out of Facebook and try to view the page. If it forces it to log in in order to view the page then it isn't public. You can change your page to be public in your Facebook page settings.

= What's an Access Token and why do I need one? =

An Access Token is required by Facebook in order to access their feeds.  Don't worry, it's easy to get one.  Just follow the step-by-step instructions [here](http://smashballoon.com/custom-facebook-feed/access-token/ "Getting an Access Token"). to get yours. Your Access Token will never expire.

= Can I show photos and videos in my feed? =

This plugin only allows you to display text updates from your feed. To display photos and videos in your feed you need to upgrade to the PRO version of the plugin. Try out a demo of the PRO version on the [Custom Facebook Feed website](http://smashballoon.com/custom-facebook-feed/demo "Custom Facebook Feed Demo"), and find out more about the PRO version [here](http://smashballoon.com/custom-facebook-feed/wordpress-plugin/ "Custom Facebook Feed PRO")

== Screenshots ==

1. Configuring the plugin
2. Adding the shortcode to your page or post. The shortcode parameters are optional and can be used to override the default settings you set on the plugin settings page
3. Adding the shortcode to a widget
4. Feed displayed in a page or post. By default the feed inherits your theme's default styles and is completely responsive.
5. Feed displayed in a side widget.

== Changelog ==

= 1.2 =
* Added the ability to define a maximum length for both the post title and body text

= 1.0 =
* Launch!