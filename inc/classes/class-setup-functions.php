<?php
namespace WP_Reveal_Presentations\inc\classes;

defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

class Setup_Functions {
	public static function init() {
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'wp_admin_style' ) );
	}

	public static function wp_admin_style() {
		wp_register_style( 'admin-css', plugins_url( '../css/admin.css', __FILE__ ) );
		wp_enqueue_style( 'admin-css' );
		wp_register_script( 'admin-js', plugins_url( '../js/admin.js',  __FILE__ ), array( 'jquery' ) );
		wp_register_script( 'admin-js' );
	}


	public static function detect_mobile_device() {
		$detect_device = '';
		if ( wp_is_mobile() ) {
			$detect_device = 'mobile';
		} else {
			$detect_device = 'desktop';
		}
		return $detect_device;
	}


	public static function verify_acf_activated() {
		if ( ! class_exists( 'acf' ) ) {
			new Admin_Notification( 'Advanced Custom Fields must be installed and activated to support this functionality.', 'error' );
		}
	}

	public static function add_acf_json_load_point( $paths ) {
		$paths[] = plugin_dir_path( __DIR__ ) . 'acf-json';

		return $paths;
	}
}
