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

//Image upload ajax
add_action( 'wp_ajax_profile_image','profile_image' );
add_action( 'wp_ajax_nopriv_profile_image','profile_image' );


function profile_image(){
		print_r($_FILES);

		$count = count($_FILES['main_image']['name']);
		for ($i = 0; $i < $count; $i++) { 
		
		$imageName = $_FILES['main_image']['name'][$i];
		$tempImageName = $_FILES['main_image']['tmp_name'][$i]; 

       if (!function_exists('wp_handle_upload')) {
	       require_once(ABSPATH . 'wp-admin/includes/file.php');
	   }
	    
      // echo $_FILES["upload"]["name"];
      //$uploadedfile = $_FILES['main_image'];
      //$upload_overrides = array('test_form' => false);
      $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

      		$files = $_FILES['main_image'];
			$upload_overrides = array('test_form' => false);
			foreach ($files['name'] as $key => $value) {
			  if ($files['name'][$key]) {
			    $file = array(
			      'name'     => $files['name'][$key],
			      'type'     => $files['type'][$key],
			      'tmp_name' => $files['tmp_name'][$key],
			      'error'    => $files['error'][$key],
			      'size'     => $files['size'][$key]
			    );
			    $movefile = wp_handle_upload($file, $upload_overrides);
			  

    // echo $movefile['url'];
      if ($movefile && !isset($movefile['error'])) {

      	// $filename should be the path to a file in the upload directory.
		$filename = $movefile['file'];

		// The ID of the post this attachment is for.
		$parent_post_id = "u".get_current_user_id();

		// Check the type of file. We'll use this as the 'post_mime_type'.
		$filetype = wp_check_filetype( basename( $filename ), null );

		// Get the path to the upload directory.
		$wp_upload_dir = wp_upload_dir();

		// Prepare an array of post data for the attachment.
		$attachment = array(
			'guid'           => $wp_upload_dir['url'] . '/' . basename( $filename ), 
			'post_mime_type' => $filetype['type'],
			'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
			'post_content'   => '',
			'post_status'    => 'inherit'
		);

		// Insert the attachment.
		$attach_id = wp_insert_attachment( $attachment, $filename, $parent_post_id );

		// Make sure that this file is included, as wp_generate_attachment_metadata() depends on it.
		require_once( ABSPATH . 'wp-admin/includes/image.php' );

		// Generate the metadata for the attachment, and update the database record.
		$attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
		wp_update_attachment_metadata( $attach_id, $attach_data );

		set_post_thumbnail( $parent_post_id, $attach_id );

		update_usermeta( get_current_user_id(), 'user_meta_image'.$key, $attach_id );
         //echo "File Upload Successfully";
    } else {
        /**
         * Error generated by _wp_handle_upload()
         * @see _wp_handle_upload() in wp-admin/includes/file.php
         */
        echo $movefile['error'];
    }
    } //end if $files['name'][$key]
	} //end $files['name'] foreach
	} //end for loop
    die();
 }

 /**
 * Adds additional user fields
 * more info: http://justintadlock.com/archives/2009/09/10/adding-and-using-custom-user-profile-fields
 */
 
function additional_user_fields( $user ) { ?>
 
    <h3><?php echo "User Meta Image: " ?></h3>
 
    <table class="form-table">
 
        <tr>
            <img height="100" width="100" src="<?php echo wp_get_attachment_url( get_the_author_meta( 'user_meta_image', $user->ID ) ); ?>">
        </tr>
 
    </table><!-- end form-table -->
<?php } // additional_user_fields
 
add_action( 'show_user_profile', 'additional_user_fields' );
add_action( 'edit_user_profile', 'additional_user_fields' );


add_filter( 'init', "set_cookie_func" );

function set_cookie_func(){

   $secure = ( 'https' === parse_url( wp_login_url(), PHP_URL_SCHEME ) );
   setcookie( TEST_COOKIE, 'WP Cookie check', 0, '/nextcore-media-support/', COOKIE_DOMAIN, $secure );
   setcookie( 'LETMEIN', 'OK', 0, '/', COOKIE_DOMAIN, $secure );
   if ( SITECOOKIEPATH != COOKIEPATH ){
   setcookie( TEST_COOKIE, 'WP Cookie check', 0, '/nextcore-media-support/', COOKIE_DOMAIN, $secure );
   setcookie( 'LETMEIN', 'OK', 0, '/', COOKIE_DOMAIN, $secure );
   }
   
}