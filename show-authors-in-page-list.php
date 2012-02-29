<?php  
    /* 
    Plugin Name: Show Authors in Page List
    Plugin URI: http://studiohyperset.com/wordpress-plugin-show-authors-in-wp_list_pages-generated-page-lists/3375
    Description: This plugin allows developers to display author names within <code>wp_list_pages</code>-generated page lists. After installing and activating, use the parameter <code>showauthors=1</code> to display an author name beside each permalinked page title the function generates: e.g., <code>&lt;?php wp_list_pages( 'title_li=&showauthors=1' ); ?&gt;</code>. To disable the parameter for a particular string/list, set <code>showauthors</code> to "0": e.g., <code>&lt;?php wp_list_pages( 'title_li=&showauthors=0' ); ?&gt;</code>. <em>w/ special thanks to <a href="http://www.ryanajarrett.com">Ryan Jarrett</a></em>
	Version: 1.0 
    Author: Studio Hyperset, Inc. 
    Author URI: http://studiohyperset.com/posts
	License: GPL3
    */  
	
	function author_pages($val, $attr, $content = null) {
		if ($attr[showauthors]==1) {
			$lines = explode("\n", $val);
			$newval="";
			foreach ($lines as $line) {
				$start = strpos($line, 'page-item-')+10;
				$end = strpos(substr($line, $start), '"');
				if ($start && $end) {
					$page_id = substr($line, $start, $end);
					$page = get_page($page_id);
					$author_id = $page->post_author;
					$author_info = get_userdata($author_id);
					$author_name = $author_info->user_firstname . " " . $author_info->user_lastname;
					if (strlen($author_name)>1) 
						$line = substr($line,0,strpos($line, '">')+2) . $author_name . ", " . substr($line,strpos($line, '">')+2);
				}
				$newval .= $line;
			}
		} else {
			$newval = $val;
		}
		return $newval;
	}

	add_filter('wp_list_pages','author_pages',50,3);

?>