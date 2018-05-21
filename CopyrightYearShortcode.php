<?php
 /*
 Plugin Name: Copyright Year Shortcode
 Plugin URI: https://github.com/Watson-Creative/CopyrightYearShortcode
 GitHub Plugin URI: https://github.com/Watson-Creative/CopyrightYearShortcode
 description: A very simple plugin to dynamically inject '© ' and the current year in the footer copyright bar (or wherever needed) using the [copyright_year]
 Version: 1.0.0
 Author: Alex Tryon
 Author URI: http://www.alextryonpdx.com
 License: GPL2
 */

function copyright_year(){
	echo '© ' . date("Y");
}
add_shortcode( 'copyright_year', 'copyright_year');

