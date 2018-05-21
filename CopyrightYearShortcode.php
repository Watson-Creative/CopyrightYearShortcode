<?php
 /*
 Plugin Name: WC Content Freeze
 Plugin URI: https://github.com/Watson-Creative/CopyrightYearShortcode
 GitHub Plugin URI: https://github.com/Watson-Creative/CopyrightYearShortcode
 description: A very simple plugin to dynamically inject '&copy;' and the current year in the footer copyright bar (or wherever needed)
 Version: 1.0.0
 Author: Alex Tryon
 Author URI: http://www.alextryonpdx.com
 License: GPL2
 */

function copyright_year(){
	echo '&copy; ' . date("Y");
}
add_shortcode( 'copyright_year', 'copyright_year');

