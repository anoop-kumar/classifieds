<?php
/*
 * Author	:	Anoop Srivastava
 */

add_action("save_post", "save_custom_post_data");

if(!function_exists("save_custom_post_data")){
	function save_custom_post_data($post_id){
		//echo $post_id;
		//pq_debug($_POST);
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			//Updating Citied
			update_post_meta($post_id, 'cities', $_POST['post_city']);
			
			//Adding details
			update_post_meta($post_id, 'post_location', $_POST['post_location']);
			update_post_meta($post_id, 'owner_name', $_POST['owner_name']);
			update_post_meta($post_id, 'owner_email', $_POST['owner_email']);
			update_post_meta($post_id, 'owner_phone', $_POST['owner_phone']);
			update_post_meta($post_id, 'post_url', $_POST['post_url']);
			update_post_meta($post_id, 'post_image', $_POST['post_image']);
			//update_post_meta($post_id, 'post_location', $_POST['post_location']);
			//update_post_meta($post_id, 'post_location', $_POST['post_location']);
		}
	}
}