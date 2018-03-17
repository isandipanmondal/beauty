<?php

global $wpdb;


function project_scripts() {
	
	wp_enqueue_script('jquery');
}

add_action( 'wp_enqueue_scripts', 'project_scripts' );


function basic_function() {

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

}


add_action( 'after_setup_theme', 'basic_function' );


// register menu 


$locations = array(

	'main-menu' => __('Main menu', 'trans'),
	'footer-menu' => __('Footer menu', 'trans')

);

register_nav_menus( $locations );






// Ajax function for user login

function user_login() {

	//print_r($_POST);

	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	if (email_exists( $email )) {
		
		echo "match-email";

	} else {

		$user_data = array(

			'user_login' => $name,
			'user_email' => $email,
			'user_pass' => $pass

		);

		$user_id = wp_insert_user( $user_data );

		echo "success";

	}

	 // Don't forget to stop execution afterward.
    wp_die();

}

add_action( 'wp_ajax_user_login', 'user_login' );
add_action( 'wp_ajax_nopriv_user_login', 'user_login' );




// user login method
function my_wp_nav_menu_args( $args = '' ) {
 
	if( is_user_logged_in() ) { 

	    $args['menu'] = 'Logged-in';

	} else { 

	    $args['menu'] = 'Main-menu';

	} 
	    return $args;
	}

add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );



// user extra information

function user_extra_information() {

	//print_r($_POST);

	$uayear = $_POST['ayear']; 
  	$uaadress = $_POST['aadress'];
  	//aimg: aimg,
  	//aimgs: aimgs,
  	$uaser1 = $_POST['aser1'];
  	$uaser2 = $_POST['aser2'];
  	$uaser3 = $_POST['aser3'];
  	$uaser4 = $_POST['aser4'];
  	$uaser5 = $_POST['aser5'];
  	$uamoney = $_POST['pric'];
  	

	$user_experi =	update_user_meta( get_current_user_id() , $meta_key = 'user_experi',  esc_attr( $uayear ) );
	$user_aadress =	update_user_meta( get_current_user_id() , $meta_key = 'user_aadress',  esc_attr( $uaadress ) ); 
	$user_ser1 = 	update_user_meta( get_current_user_id() , $meta_key = 'user_ser1',  esc_attr( $uaser1 ) );
	$user_ser2 =	update_user_meta( get_current_user_id() , $meta_key = 'user_ser2',  esc_attr( $uaser2 ) );
	$user_ser3 =	update_user_meta( get_current_user_id() , $meta_key = 'user_ser3',  esc_attr( $uaser3 ) );
	$user_ser4 =	update_user_meta( get_current_user_id() , $meta_key = 'user_ser4',  esc_attr( $uaser4 ) );
	$user_ser5 =	update_user_meta( get_current_user_id() , $meta_key = 'user_ser5',  esc_attr( $uaser5 ) ); 
	$uapric =	update_user_meta( get_current_user_id() , $meta_key = 'price',  esc_attr( $uamoney ) ); 


	if ($user_experi == true && $user_aadress == true && $user_ser1 == true && $user_ser2 == true && $user_ser3 == true && $user_ser4 == true && $user_ser5 == true && $uapric == true ) {
		
		echo "success";

	} else {

		echo "This is an error";
	}

  	// Don't forget to stop execution afterward.
    wp_die();


}

add_action( 'wp_ajax_user_extra_information', 'user_extra_information' );
add_action( 'wp_ajax_nopriv_user_extra_information', 'user_extra_information' );

add_filter('show_admin_bar', '__return_false');
