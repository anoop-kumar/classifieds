<?php
add_filter( 'manage_edit-'.CUSTOM_POST_TYPE1.'_columns', 'pq_wp_edit_columns' ) ;

function pq_wp_edit_columns( $columns ) {

	$columns = array(
			'cb' => '<input type="checkbox" />',
			'title' => __( CUSTOM_MENU_NAME ),
			'price' => __( 'Price (Rs)' ),
			'book_sold' => __( CUSTOM_MENU_NAME.' sold' ),
			'total_item' => __( 'Total items' ),
			'status' => __( 'Status' ),
			'post_category' => __( CUSTOM_MENU_CAT_TITLE ),
			'post_tags' => __( 'Tags' )
	);

	return $columns;
}

add_action( 'manage_'.CUSTOM_POST_TYPE1.'_posts_custom_column', 'pq_wp_manage_columns', 10, 2 );

function pq_wp_manage_columns( $column, $post_id ) {

	echo '<link href="'.PQ_PLUGIN_URL.'/css/admin.css" rel="stylesheet" type="text/css" />';
	global $post;

	switch( $column ) {

		/* If displaying the 'status' column. */
		case 'status' :

			/* Get the post meta. */
			$status = fetch_status(get_post_meta( $post_id, 'status', true ),get_post_meta( $post_id, 'stock', true ));

			/* If no status is found, output a default message. */
			_e($status,'pq_wp');

			break;

			/* If displaying the 'coupon_start_date_time' column. */
		case 'price' :

			/* Get the price. */
			$price = get_post_meta( $post_id, 'price', true );

			_e($price,'pq_wp');

			break;

		case 'book_sold' :

			/* Get the deal_sold for the post. */
			//$deal_sold = deal_transaction($post_id);

			/* If deal_sold were found. */
			//if ( !empty( $deal_sold ) ) {
			//echo $deal_sold;
			//}

			/* If no deal_sold were found, output a default message. */
			//else {
			_e( '0' );
			//}

			break;
		case 'post_category' :
			/* Get the post_category for the post. */
				
			$category = get_the_taxonomies($post);
			$category_display = str_replace(CUSTOM_MENU_CAT_TITLE.':','',$category[CUSTOM_CATEGORY_TYPE1]);
			$category_display = str_replace(' and ',', ',$category_display);
			echo $category_display = str_replace(',,',', ',$category_display);

			break;
				
		case 'post_tags' :
			/* Get the post_tags for the post. */
			$tags = get_the_taxonomies($post);
			$tags_display = str_replace(CUSTOM_MENU_TAG_TITLE.':','',$tags['seller_tags']);
			$tags_display = str_replace(' and ',', ',$tags_display);
			echo $tags_display = str_replace(',,',', ',$tags_display);
			break;

		case 'total_item' :

			/* Get the total_item for the post. */
			$total_item = get_post_meta( $post_id, 'no_of_item', true );

			/* If terms were found. */
			if ( !empty( $total_item ) ) {
				echo $total_item;
			}

			/* If no terms were found, output a default message. */
			else {
				_e( '0' );
			}

			break;

			/* Just break out of the switch statement for everything else. */
		default :
			break;
	}
}

add_filter( 'manage_edit-'.CUSTOM_POST_TYPE1.'_sortable_columns', 'pq_wp_sortable_columns' );

function pq_wp_sortable_columns( $columns ) {

	$columns['price'] = 'price';
	$columns['book_sold'] = 'book_sold';
	$columns['total_item'] = 'total_item';
	$columns['status'] = 'status';
	$columns['post_category'] = CUSTOM_MENU_CAT_TITLE;
	return $columns;
}
?>