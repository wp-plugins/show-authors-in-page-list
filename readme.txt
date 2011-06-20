{\rtf1\ansi\ansicpg1252\cocoartf1038\cocoasubrtf350
{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
\margl1440\margr1440\vieww22060\viewh8460\viewkind0
\deftab720
\pard\pardeftab720\ql\qnatural

\f0\fs24 \cf0 === Plugin Name ===\
Contributors: studiohyperset, oqm4, ryanajarrett\
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=C2KQADH2TGTS4\
Tags: wp_list_pages, author, plugin, function\
Requires at least: 3.0\
Tested up to: 3.1.3\
Stable tag: 1.0\
Plugin URI: http://studiohyperset.com/wordpress-plugin-show-authors-in-wp_list_pages-generated-page-lists/3375\
\
== Description ==\
\
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardeftab720\ql\qnatural\pardirnatural
\cf0 This plugin allows developers to display author names within `wp_list_pages`-generated page lists.\
\pard\pardeftab720\ql\qnatural
\cf0 \
== Installation ==\
\
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardeftab720\ql\qnatural\pardirnatural
\cf0 After installing and activating, use the parameter `showauthors=1` to display an author name beside each permalinked page title the `wp_list_pages` function generates: e.g., `<?php wp_list_pages( 'title_li=&showauthors=1' ); ?>`. To disable the parameter for a particular string/list, set `showauthors` to "0": e.g., `<?php wp_list_pages( 'title_li=&showauthors=0' ); ?>`.\
\pard\pardeftab720\ql\qnatural
\cf0 \
== Frequently Asked Questions ==\
\
Please note, this plugin assumes
\b  
\b0 (a) most developers want to drive traffic to site pages, vs. author pages, and (b) links to author pages will appear on these site pages. As such, the names the plugin generates appear unpermalinked.\
\
Additionally, even with the plugin installed and the `showauthors=1` parameter enabled,all lists will be organized per pages rather than per authors. Alphabetically ordering a list by ascending `post_title` (that is, `sort_order=ASC&sort_column=post_title`) -- the default method -- will result in a list like the following, regardless of author name:\
\
* John Doe, Title A One Here\
* Zach James, Title B Two Here\
* Alan Adams, Title C Three Here\
* &tc.\
\
As demand warrants, future builds may include these additional functionalities.\
\
== Screenshots ==\
\
1. http://studiohyperset.com. sh-logo.png. `/tags/1.0/sh-logo.png`\
\
== Changelog ==\
\
= 1.0 =\
* 6/19/11 - Initial Google Code Project Hosting (http://code.google.com/p/studio-hyperset/downloads/list) & WordPress Plugin Directory release\
\
== Upgrade Notice ==\
\
= 1.0 =\
* 6/19/11 - Initial Google Code Project Hosting (http://code.google.com/p/studio-hyperset/downloads/list) & WordPress Plugin Directory release}