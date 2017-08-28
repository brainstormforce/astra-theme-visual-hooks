<?php
/**
 * Plugin Name:     Astra Theme Visual Hooks
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     astra-theme-visual-hooks
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package         Astra_Theme_Visual_Hooks
 */

/**
 * Set constants.
 */
define( 'ASTRA_TVH_VER',  '1.0.0' );
define( 'ASTRA_TVH_FILE', __FILE__ );
define( 'ASTRA_TVH_BASE', plugin_basename( ASTRA_TVH_FILE ) );
define( 'ASTRA_TVH_DIR',  plugin_dir_path( ASTRA_TVH_FILE ) );
define( 'ASTRA_TVH_URI',  plugins_url( '/', ASTRA_TVH_FILE ) );

require_once ASTRA_TVH_DIR . 'class-astra-theme-visual-hooks.php';