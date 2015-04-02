<?php
/*
Plugin Name: Joe_Form
Plugin URI: http://www.nuovometo.com
Description: This plugin puts a contact form into content pages
Version: 1.0
Author: Joe Fitzgerald
Author URI: http://www.nuovometo.com
License: GPL2
*/

// Version
define('JOE_FORM_VERSION', '1.0');
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

add_filter('widget_text', 'do_shortcode');//Allows shortcodes to be put into widgets in the admin

	define('JOE_FORM_URL', plugin_dir_url(__FILE__));
	define('JOE_FORM_PATH', plugin_dir_path(__FILE__));

	$ver = rand(1, 10);

	$handle = 'joe_form_style';
	$src = JOE_FORM_URL.'css/joe_form.css';
	$deps = '';
	$ver = rand(1, 10);
	$media = 'all';
	wp_enqueue_style( $handle, $src, $deps, $ver, $media );
        
        function joe_form_scripts() {
            wp_enqueue_script( 'joe_form_js', JOE_FORM_URL . 'js/joe_form.js', array(), $ver, false );
            //wp_enqueue_script( 'angularjs_js', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js', array(), $ver, false );
        }

        add_action( 'wp_enqueue_scripts', 'joe_form_scripts' );

require_once('class/joe_form.php');

add_shortcode('main_form', 'main_form');
function main_form($args = array()){
    $joe_form = new joe_form();    
    $programs = $joe_form->programList();
	ob_start();
		include('pgs/main_form.php');
	return ob_get_clean();
}

add_shortcode('form_cgi', 'form_cgi');
function form_cgi($args = array()){
    $joe_form = new joe_form();  
    foreach($_POST AS $key => $value){
        //echo $key." = ". $value . "<br>";
        
    }
        ob_start();
        if( strlen($_POST['ddlprogram']) > 0 ){
                $programs = $joe_form->programList();
                $program_description = "See Program ID";
                foreach($programs AS $key=>$value){
                    if($key == trim($_POST['ddlprogram'])){
                        $program_description = $value;
                        break;
                    }
                    
                }
    			GLOBAL $wpdb;
			$wpdb->insert(
				'joe_form',
				array(
					'first_name' => $_POST['firstName'],
					'last_name'=>$_POST['lastName'],
					'email'=>$_POST['email'],
					'phone'=>$_POST['phone'],
					'program_id'=>$_POST['ddlprogram'],
                                        'program'=>$program_description
				),
				array(
					'%s',
					'%s',
					'%s',
					'%s',
					'%s',
                                        '%s'
				)
			);
			$insert_id = $wpdb->insert_id;
                        $to = 'kim.e@healthstafftraining.com, ebrodie@nuovometo.com, jfitzgerald@nuovometo.com';
                        $subject = 'A lead has been captured';
                        $message = 'The information captured is:<br>';
                        $message.= 'First Name: '.$_POST['firstName'].'<br>';
                        $message.= 'Last Name: '.$_POST['lastName'].'<br>';
                        $message.= 'Email Address: '.$_POST['email'].'<br>';
                        $message.= 'Phone Number: '.$_POST['phone'].'<br>';
                        $message.= 'Program: ('.$_POST['ddlprogram'].') '.$program_description.'<br>';
                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                        $headers .= 'From: webmaster@healthstafftraining.com' . "\r\n" .
                        'Reply-To: webmaster@healthstafftraining.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();

                        mail($to, $subject, $message, $headers);
        }
            //kim.e@healthstafftraining.com
            header("Location: /thank-you", true, 301);
            exit();
	ob_end_flush();
}




?>