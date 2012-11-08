<?php
	global $wpdb;
	if(!defined('CUSTOM_POST_TYPE1')){
		
		define('CUSTOM_POST_TYPE1','ads');
		define('CUSTOM_CATEGORY_TYPE1','book_category');
		define('CUSTOM_TAG_TYPE1','book_tags');
		
		define('CUSTOM_MENU_TITLE',__('Ads','classifieds'));
		define('CUSTOM_MENU_NAME',__('Ads','classifieds'));
		define('CUSTOM_MENU_SIGULAR_NAME',__('Ads','classifieds'));
		define('CUSTOM_MENU_ADD_NEW',__('Add New Ads','classifieds'));
		define('CUSTOM_MENU_ADD_NEW_ITEM',__('Add New Ads','classifieds'));
		define('CUSTOM_MENU_EDIT',__('Edit','classifieds'));
		define('CUSTOM_MENU_EDIT_ITEM',__('Edit','classifieds'));
		define('CUSTOM_MENU_NEW',__('New Ads','classifieds'));
		define('CUSTOM_MENU_VIEW',__('View Ads','classifieds'));
		define('CUSTOM_MENU_SEARCH',__('Search Ads','classifieds'));
		define('CUSTOM_MENU_NOT_FOUND',__('No Ads Reaquest found','classifieds'));
		define('CUSTOM_MENU_NOT_FOUND_TRASH',__('No Ads Reaquest found in trash','classifieds'));
		
		define('CUSTOM_MENU_CAT_LABEL',__('Categories','classifieds'));
		define('CUSTOM_MENU_CAT_TITLE',__('Ads Categories','classifieds'));
		define('CUSTOM_MENU_SIGULAR_CAT',__('Category','classifieds'));
		define('CUSTOM_MENU_CAT_SEARCH',__('Search Category','classifieds'));
		define('CUSTOM_MENU_CAT_POPULAR',__('Popular Categories','classifieds'));
		define('CUSTOM_MENU_CAT_ALL',__('All Categories','classifieds'));
		define('CUSTOM_MENU_CAT_PARENT',__('Parent Category','classifieds'));
		define('CUSTOM_MENU_CAT_PARENT_COL',__('Parent Category:','classifieds'));
		define('CUSTOM_MENU_CAT_EDIT',__('Edit Category','classifieds'));
		define('CUSTOM_MENU_CAT_UPDATE',__('Update Category','classifieds'));
		define('CUSTOM_MENU_CAT_ADDNEW',__('Add New Category','classifieds'));
		define('CUSTOM_MENU_CAT_NEW_NAME',__('New Category Name','classifieds'));
		
		define('CUSTOM_MENU_TAG_LABEL',__('Ads Tags','classifieds'));
		define('CUSTOM_MENU_TAG_TITLE',__('Ads Tags','classifieds'));
		define('CUSTOM_MENU_TAG_NAME',__('Ads Tags','classifieds'));
		define('CUSTOM_MENU_TAG_SEARCH',__('Ads Tags','classifieds'));
		define('CUSTOM_MENU_TAG_POPULAR',__('Popular Ads Tags','classifieds'));
		define('CUSTOM_MENU_TAG_ALL',__('All Ads Tags','classifieds'));
		define('CUSTOM_MENU_TAG_PARENT',__('Parent Ads Tags','classifieds'));
		define('CUSTOM_MENU_TAG_PARENT_COL',__('Parent Ads Tags:','classifieds'));
		define('CUSTOM_MENU_TAG_EDIT',__('Edit Ads Tags','classifieds'));
		define('CUSTOM_MENU_TAG_UPDATE',__('Update Ads Tags','classifieds'));
		define('CUSTOM_MENU_TAG_ADD_NEW',__('Add New Ads Tags','classifieds'));
		define('CUSTOM_MENU_TAG_NEW_ADD',__('New Ads Tags Name','classifieds'));	
	}
	
	if(!defined('ORDER_TRANSACTION_TABLE'))
		define('ORDER_TRANSACTION_TABLE',$wpdb->prefix."order_transaction");
	
	if(!defined('CITY_TABLE'))
		define('CITY_TABLE',$wpdb->prefix."cities");
	
?>