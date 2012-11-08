
<div id="taxonomy-city" class="citydiv">
	<ul id="city-tabs" class="city-tabs">
		<li class="hide-if-no-js"><a href="#city-all" tabindex="3">All Cities</a></li>	
	</ul>
	<div id="city-all" class="tabs-panel">
		<input type="hidden" name="post_city[]" value="0">
		<ul id="citychecklist"
			class="list:city citychecklist form-no-clear">
<?php 
	global $post,$wpdb;

		$city_values = get_post_meta($post->ID, 'cities');

		$sql = "SELECT * FROM ".CITY_TABLE." WHERE country='CA'";
		$cities = $wpdb->get_results($sql);

		foreach ( $cities as $city )
		{
	//echo $fivesdraft->post_title;
	echo '<li id="city-'.$city->id.'" class="popular-city"><label class="selectit">';
			
	echo '<input	value="'.$city->id.'" type="checkbox" name="post_city[]" id="in-city-'.$city->id.'" ';
	
	if(!empty($city_values) && in_array($city->id, $city_values))
		echo ' checked="checked" ';
	
	echo '>	'.$city->city.', '.$city->state.'</label></li>';
}
?>			
		</ul>
	</div>	
</div>