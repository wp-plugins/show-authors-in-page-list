=== Plugin Name ===
Contributors: studiohyperset, oqm4, ryanajarrett
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=C2KQADH2TGTS4
Tags: wp_list_pages, author, plugin, function
Requires at least: 3.0
Tested up to: 3.4.2
Stable tag: 1.0

Allows developers to display author names within wp_list_pages-generated page lists.

== Description ==

This plugin allows developers to display author names within `wp_list_pages`-generated page lists.

== Installation ==

After installing and activating, use the parameter `showauthors=1` to display an author name beside each permalinked page title the `wp_list_pages` function generates: e.g., `<?php wp_list_pages( 'title_li=&showauthors=1' ); ?>`. To disable the parameter for a particular string/list, set `showauthors` to "0": e.g., `<?php wp_list_pages( 'title_li=&showauthors=0' ); ?>`.

== Frequently Asked Questions ==

= Links =

* For feedback and help, visit: http://getsatisfaction.com/studio_hyperset/products/studio_hyperset_wordpress_plugins

* To learn about other Studio Hyperset WordPress plugins, visit http://studiohyperset.com/projects/wordpress-plugins

* To learn about other Studio Hyperset code projects, visit http://code.google.com/p/studio-hyperset/downloads/list

= Developer Notes =
This plugin assumes (a) most developers want to drive traffic to site pages, vs. author pages, and (b) links to author pages will appear on these site pages. As such, the names the plugin generates appear unpermalinked.

Additionally, even with the plugin installed and the `showauthors=1` parameter enabled,all lists will be organized per pages rather than per authors. Alphabetically ordering a list by ascending `post_title` (that is, `sort_order=ASC&sort_column=post_title`) -- the default method -- will result in a list like the following, regardless of author name:

* John Doe, Title A One Here
* Zach James, Title B Two Here
* Alan Adams, Title C Three Here
* &tc.

As demand warrants, future builds may include these additional functionalities.

== Screenshots ==
&nbsp;

== Changelog ==

= 1.0 =
* 6/19/11 - Initial Google Code Project Hosting (http://code.google.com/p/studio-hyperset/downloads/list) & WordPress Plugin Directory release

== Upgrade Notice ==

= 1.0 =
* 6/19/11 - Initial Google Code Project Hosting (http://code.google.com/p/studio-hyperset/downloads/list) & WordPress Plugin Directory release