<?php
/**
 * Plugin Name: Plugin Starter
 * Plugin URI: http://wpguru.co.uk
 * Description: Starting Point for Plugin Development
 * Version: 1.0
 * Author: Jay Versluis
 * Author URI: http://wpguru.co.uk
 * License: GPL2
 */
 
/*  Copyright 2013  Jay Versluis (email support@wpguru.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

?>
<!-- these lines are for DreamWeaver - they are ignored by WordPress -->
<link href="starter-styles.css" rel="stylesheet" type="text/css">
<link href="starter-script.js" rel="script" type="script/javascript">
<?php

// link some styles to the admin page
$starterstyles = plugins_url ('starterstyles.css', __FILE__);
wp_enqueue_style ('starterstyles', $starterstyles );
// wp-enqueue_style ('zentabs', 'http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css');

// load jQuery tabs for our admin section
function zendash_load_js() {
	
	// wp_enqueue_scripts ('jquery');
	// wp_enqueue_scripts ('jquery-ui');
	wp_enqueue_script ('jquery-ui-tabs');
}
add_action('wp_enqueue_scripts', 'zendash_load_js' );

// and here's the jQuery UI Tabs script
function zendash_tabs_script () {
	?>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
    jQuery( "#tabs" ).tabs();
	
	jQuery('Why does everything suck?').dialogue();
	
     });
     </script>

<?php
}
add_action( 'admin_print_scripts', 'zendash_tabs_script' );

// action function for above hook
function wpguru_plugin_starter() {

// Add a new submenu under DASHBOARD
add_dashboard_page('Plugin Starter', 'Plugin Starter', 'administrator', 'pluginStarter', 'pluginStarter');
}

// Hook for adding admin menu
add_action('admin_menu', 'wpguru_plugin_starter');

// display the admin page
function pluginStarter () {
	
// check that the user has the required capability 
    if (!current_user_can('manage_options'))
    {
      wp_die( __('You do not have sufficient privileges to access this page. Sorry!') );
    }	
	
	///////////////////////////////////////
	// MAIN AMDIN CONTENT SECTION
	///////////////////////////////////////
	
	// display heading with icon WP style
	?>
    <div class="wrap">
    <div id="icon-index" class="icon32"><br></div>
    <h2>Plugin Starter Options</h2>
    <?php
	
	// add some PHP content here like so
	echo '<p>You can put a lot of stuff here if you like</p>';
	
	?>
    </div> <!-- end of wrap -->
    <?php
} // end of main function



?>
