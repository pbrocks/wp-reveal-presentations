<?php
/** 
 * Plugin Name: WP Reveal Presentations
 * Description: Creates a page template on which you can build a presentation using reveal.js.
 * Version: 0.7.1
 * Author: pbrocks
 * Text Domain: wp-reveal-presentations
 */

namespace WP_Reveal_Presentations;

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

define( 'REVEAL_JS_PATH', plugin_dir_url( __FILE__ ) . 'reveal-js/' );

// Autoloader will let us call classes directly rather than requiring the files first
require_once( 'autoload.php' );

inc\classes\Dev_Dashboard::init();
//	inc\classes\Admin_Menus::init();

inc\classes\Setup_Functions::init();
inc\classes\Post_Types::init();

