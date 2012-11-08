<?php

/////The filter code to get the custom post type in the RSS feed
function myfeed_request($qv) {
	if (isset($qv['feed']))
		$qv['post_type'] = get_post_types();
	return $qv;
}
add_filter('request', 'myfeed_request');

/// Debugger 

if(!function_exists("pq_debug")){
	function pq_debug($var, $exit = true){
		if(is_array($var) || is_object($var)){
			echo "<pre>"; print_r($var); echo "</pre>";
		}else{
			echo $var;
		}
		if($exit){
			exit();
		}
	}
}
?>