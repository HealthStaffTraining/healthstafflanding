<?php
if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME']))
{
	// tell people trying to access this file directly goodbye...
	exit('This file can not be accessed directly...');
}

// Define the class
class joe_form{
		//constructor
		//=============================================
		function __construct(){
			//echo "you made it bruva";
			$this->myURL = "http://landing.healthstafftraining.com";

		}

		public function programList(){
			$list = array(
				"Drug and Alcohol Counseling",
				"Drug and Alcohol Counseling Online",
				"Admin & Clinical Medical Assistant",
				"Administrative Medical Assistant",
				"Clinical Medical Assistant",
				"Computerized Office & Accounting",
				"Pharmacy Technician",
				"Pharmacy Technician Online",
			);
			
			return $list;
		}
/*
		public function programList(){
			GLOBAL $wpdb;
			$query = "SELECT * FROM wp_posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY ID DESC LIMIT 2";
			$myResponse = $wpdb->get_results($query);
			$html = "";
			$x = 0;
			foreach($myResponse AS $m){
				$html.= "<div id='feed_title'><a href='". $m->guid. "' class='feed_link'>".$m->post_title . "&raquo;</a></div><div>".substr($m->post_content, 0, 200)."... <a href='". $m->guid. "'>Full Article&raquo;</a></div>";
				if($x == 0){
					$html.="<hr>";
				}
				$x++;
			}

			return $html;
		}

		public function getStudentInfo($student_id){
			GLOBAL $wpdb;
			$mydata = $wpdb->get_row("SELECT img_path FROM jf_testimonial_imgs WHERE student_id = '".$student_id."' and status = 'y' ORDER BY id DESC LIMIT 1");
			return $mydata;
		}
*/
}

?>