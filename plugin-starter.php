<?php
/**
 * Plugin Name: Plugin Starter (Simple)
 * Plugin URI: https://wpguru.co.uk
 * Description: Starting Point for Plugin Development without an Admin Page
 * Version: 1.0
 * Author: Jay Versluis
 * Author URI: https://wpguru.co.uk
 * License: GPL2
 */
 
/*  Copyright 2020  Jay Versluis (email support@wpguru.co.uk)

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

/* 

In its simplest form, a Plugin only needs the above block to register itself.
This version of the Plugin Starter has no admin page.
All it needs is one function and a hook.

In this example we're prnting "hello" at the botton of the site.
Replace with your own as needed.

*/

function guru_classy_function () {
	echo '<strong>Hello :-)</strong>';
}
add_action ('wp_footer', 'guru_classy_function');

?>
