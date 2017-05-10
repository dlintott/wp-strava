<?php
/*
 * Plugin Name: WP Strava
 * Plugin URI: http://cmanon.com
 * Description: Plugin to show your strava.com information in your wordpress blog. Some Icons are Copyright © Yusuke Kamiyamane. All rights reserved. Licensed under a Creative Commons Attribution 3.0 license.  
 * Version: 1.1
 * Author: Carlos Santa Cruz, Justin Foell, Lance Willet 
 * License: GPL2
 */

/*  Copyright 2011  Carlos Santa Cruz  (email : cmanon at gmail dot com)

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


define( 'WPSTRAVA_PLUGIN_DIR', trailingslashit( dirname( __FILE__) ) );
define( 'WPSTRAVA_PLUGIN_URL', plugins_url( '/', __FILE__ ) );
define( 'WPSTRAVA_PLUGIN_NAME', plugin_basename(__FILE__) );
if ( ! defined( 'WPSTRAVA_DEBUG' ) ) define( 'WPSTRAVA_DEBUG', false );

// Load the multilingual support.
if( file_exists( WPSTRAVA_PLUGIN_DIR . 'lang/' . get_locale() . '.mo' ) ) {
	load_textdomain( 'wp-strava', WPSTRAVA_PLUGIN_DIR . 'lang/' . get_locale() . '.mo' );
}

require_once WPSTRAVA_PLUGIN_DIR . 'lib/Strava.class.php';
$wpstrava = WPStrava::get_instance();
