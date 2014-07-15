<?php

/*
Plugin Name: GD Genesis Mods
Plugin URI: https://github.com/GrowDesign/GD-genesis-mods/
Description: Add additional customizations to Genesis Theme.
Version: 1.8.5
Author: Bradford Knowlton
Author URI: http://bradknowlton.com/
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
Domain Path:       /languages
Text Domain:       BSO-genesis-mods
GitHub Plugin URI: https://github.com/GrowDesign/GD-genesis-mods
GitHub Branch:     accu-scangpr.com
*/

function BSO_after_setup_theme() {
    remove_action( 'genesis_header', 'genesis_do_header' ); 
    add_action( 'genesis_header', 'genesis_do_new_header' ); 
    // add_action('wp_head','hook_css');

}

add_action( 'after_setup_theme', 'BSO_after_setup_theme' );

function genesis_do_new_header() { 
    echo '<div id="title-area">';
    	do_action( 'genesis_site_title' ); 
    	do_action( 'genesis_site_description' ); 
    echo '</div><!-- end #title-area -->'; 
    
    if ( is_active_sidebar( 'header-right' ) || has_action( 'genesis_header_right' ) ) { 
        echo '<div class="widget-area">'; 
        do_action( 'genesis_header_right' ); 
        dynamic_sidebar( 'header-right' ); 
        echo '</div><!-- end .widget-area -->'; 
    } 
} 


function hook_css()
{

$output="<style> 
#header {
    background: none !important;
}
div#title-area img {
	width: 50%;
	max-width: 160px;
	height: auto;
}
</style>";

echo $output;

}