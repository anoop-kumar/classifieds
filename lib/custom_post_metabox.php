<?php
#####################  Meta Box Option  ########################
add_action("admin_init", "admin_init");

function admin_init(){

	//Details
	add_meta_box(CUSTOM_POST_TYPE1."-meta-classifieds", CUSTOM_MENU_NAME." Classified Details", "pq_meta_options_classifieds", CUSTOM_POST_TYPE1, "normal", "high");

	//Attribute
	add_meta_box(CUSTOM_POST_TYPE1."-meta-city", CUSTOM_MENU_NAME." City", "pq_meta_options_city", CUSTOM_POST_TYPE1, "side", "low");
	
}

//Attribute
function pq_meta_options_classifieds(){
	global $post, $wpdb;
	$custom = get_post_custom($post->ID);
	require_once(PQ_ROOT_PATH."view/admin_post_options.php");
}
//Images
function pq_meta_options_city(){
	global $post, $wpdb;
	
	require_once(PQ_ROOT_PATH."view/admin_city_options.php");
}
?>