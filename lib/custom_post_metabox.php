<?php
#####################  Meta Box Option  ########################
add_action("admin_init", "admin_init");

add_action("save_post", "save_deal");

function admin_init(){

	//Price Display
	add_meta_box(CUSTOM_POST_TYPE1."-meta-price", CUSTOM_MENU_NAME." Price", "pq_meta_options_price", CUSTOM_POST_TYPE1, "side", "high");

	//Attribute
	add_meta_box(CUSTOM_POST_TYPE1."-meta-attribute", CUSTOM_MENU_NAME." Attributes", "pq_meta_options_attributes", CUSTOM_POST_TYPE1, "normal", "low");
	//Images
	add_meta_box(CUSTOM_POST_TYPE1."-meta-pdt-images", CUSTOM_MENU_NAME." Images", "pq_meta_options_images", CUSTOM_POST_TYPE1, "normal", "high");
	//Shipping
	add_meta_box(CUSTOM_POST_TYPE1."-meta-shipping", CUSTOM_MENU_NAME." Shipping", "pq_meta_options_shipping", CUSTOM_POST_TYPE1, "normal", "low");
	//Addition Info
	add_meta_box(CUSTOM_POST_TYPE1."-meta-additional", CUSTOM_MENU_NAME." Additional Info", "pq_meta_options_additional", CUSTOM_POST_TYPE1, "normal", "low");
	//SEO Settings
	add_meta_box(CUSTOM_POST_TYPE1."-meta-seo", CUSTOM_MENU_NAME." SEO", "pq_meta_options_seo", CUSTOM_POST_TYPE1, "normal", "low");


}

//Attribute
function pq_meta_options_attributes(){
	global $post;
	$custom = get_post_custom($post->ID);
	require_once(PQ_ROOT_PATH."view/admin_product_attribute.php");
}
//Images
function pq_meta_options_images(){
	global $post;
	$custom = get_post_custom($post->ID);
	require_once(PQ_ROOT_PATH."view/admin_product_images.php");
}

//Shipping
function pq_meta_options_shipping(){
	global $post;
	$custom = get_post_custom($post->ID);
	require_once(PQ_ROOT_PATH."view/admin_product_shipping.php");
}
//Additional Info
function pq_meta_options_additional(){
	global $post;
	$custom = get_post_custom($post->ID);
	require_once(PQ_ROOT_PATH."view/admin_product_options.php");
}

//SEO Settings
function pq_meta_options_seo(){
	global $post;
	$custom = get_post_custom($post->ID);
	require_once(PQ_ROOT_PATH."view/admin_product_seo.php");
}

//Price Options
function pq_meta_options_price(){
	global $post;
	$custom = get_post_custom($post->ID);
	require_once(PQ_ROOT_PATH."view/admin_product_price.php");
}
?>