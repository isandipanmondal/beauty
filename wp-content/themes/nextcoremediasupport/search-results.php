<?php
/*Template Name: Search Results*/
$keyword = $_REQUEST['keyword'];
$args = array(
	'search'         => $keyword,
	'search_columns' => array( 'display_name' ),
	'fields' => 'all'
);
$user_query = new WP_User_Query( $args );
$userId = $user_query->results[0]->ID;
$userImage = get_user_meta($userId,'user_meta_image',true);
echo $userImage;
?>
