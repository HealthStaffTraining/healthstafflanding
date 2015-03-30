<?php
/*
Plugin Name: Joe_Shortcodes
Plugin URI: http://www.nuovometo.com
Description: This plugin puts short codes into content pages
Version: 1.0
Author: Joe Fitzgerald
Author URI: http://www.nuovometo.com
License: GPL2
*/

// Version
define('JOE_SHORTCODE_VERSION', '1.0');
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

add_filter('widget_text', 'do_shortcode');//Allows shortcodes to be put into widgets in the admin

	define('JOE_SHORTCODES_URL', plugin_dir_url(__FILE__));
	define('JOE_SHORTCODES_PATH', plugin_dir_path(__FILE__));
        
        // Mobile DETECTION
        require_once 'class/Mobile_Detect.php';
        $detect = new Mobile_Detect;
        if ( $detect->isMobile() ) { // Is a Mobile Device
            if( $detect->isTablet() ){// Any tablet device.
                define('USER_DEVICE', 'TABLET');
            }else{ // is a Phone
                define('USER_DEVICE', 'PHONE');
            }   
        }else{ // is not a Mobile Device
                define('USER_DEVICE', 'COMPUTER');
        }// end if is a mobile device

	$ver = rand(1, 10);
	//wp_register_script( 'joe_short_scripts' , JOE_SHORTCODES_URL.'js/joe_shortcodes.js', array('jquery'), $ver );
	//wp_enqueue_script( 'joe_short_scripts', array('jquery') );

	$handle = 'joe_shortcode_style';
        if(USER_DEVICE == 'PHONE'){
            $src = JOE_SHORTCODES_URL.'css/joe_shortcodes_mobile.css';
        }else{
            $src = JOE_SHORTCODES_URL.'css/joe_shortcodes.css';
        }
	
	$deps = '';
	$ver = rand(1, 10);
	$media = 'all';
	wp_enqueue_style( $handle, $src, $deps, $ver, $media );
        
        function joe_shortcode_scripts() {
            wp_enqueue_script( 'joe_short_js', JOE_SHORTCODES_URL . 'js/joe_shortcodes.js', array(), $ver, false );
            wp_enqueue_script( 'angularjs_js', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js', array(), $ver, false );
        }

        add_action( 'wp_enqueue_scripts', 'joe_shortcode_scripts' );

require_once('class/joe_shortcodes.php');

add_shortcode('angular_form', 'angular_form');
function angular_form($args = array()) {
	ob_start();
	include('pgs/angular_form.php');
	return ob_get_clean();
}

add_shortcode('coming_soon', 'coming_soon');
function coming_soon($args = array()){
	ob_start();
		include('pgs/coming_soon.php');
	return ob_get_clean();
}

add_shortcode('copyright_year', 'copyright_year');
function copyright_year($args = array()) {
	$year = DATE('Y');
	ob_start();
?>
	&copy; <?php echo $year; ?>
<?php
	return ob_get_clean();
}

?>