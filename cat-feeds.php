<?php
/*
Plugin Name: Bibs Feed Cat Widget
Plugin URI: http://www.wp-plugin-archive.de/unsere-plugins/
Description: Bibs Feed Cat Widget displays categories with feeds for each category in the sidebar
Version: 1.1
Author URI: http://www.wp-plugin-archive.de
Author: Karl-Heinz Klug und Birgit Hoffmann
License: GPL
*/
/*	
Copyright Karl-Heinz Klug
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.  
*/
defined('ABSPATH') or die("Nothing to see");

function widget_build_init() {

	if ( !function_exists('register_sidebar_widget') )
		return;
		
	function widget_build($args) { 
		extract($args);
        // This title shows on the Widgets page
		$title = 'Categorie Feeds';
		
		// Output generation. 
		echo $before_widget . $before_title . $title . $after_title;
		echo wp_list_categories('orderby=name&style=none&title_li&show_count=1&feed=RSS');
		echo $after_widget; 
	}
	// The description
	register_sidebar_widget('Categorie Feeds', 'widget_build');
}

add_action('plugins_loaded', 'widget_build_init');

