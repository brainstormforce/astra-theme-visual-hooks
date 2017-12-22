<?php
/**
 * Plugin Name: Astra Theme Visual Hooks
 * Plugin URI: http://www.wpastra.com/pro/
 * Description: Display All hook locations in Astra.
 * Version: 1.1.0
 * Author: Brainstorm Force
 * Author URI: http://www.brainstormforce.com
 * Domain Path: /languages
 * Text Domain: astra-theme-visual-hooks
 *
 * @package         Astra_Theme_Visual_Hooks
 */

/**
 * Set constants.
 */
define( 'ASTRA_TVH_VER',  '1.1.0' );
define( 'ASTRA_TVH_FILE', __FILE__ );
define( 'ASTRA_TVH_BASE', plugin_basename( ASTRA_TVH_FILE ) );
define( 'ASTRA_TVH_DIR',  plugin_dir_path( ASTRA_TVH_FILE ) );
define( 'ASTRA_TVH_URI',  plugins_url( '/', ASTRA_TVH_FILE ) );

if( ! is_admin() ) {
	require_once ASTRA_TVH_DIR . 'class-astra-theme-visual-hooks.php';
}