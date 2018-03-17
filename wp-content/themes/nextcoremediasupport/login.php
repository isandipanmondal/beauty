<?php 

	/*Template Name: Login*/
	get_header(); 


?>

<section class="regis-page log">

<div class="mid-cls">

<div class="swm-right-w3ls">

	<div class="main">
 			<div class="icon-head-wthree">
 		<h2>Login</h2>
 	</div>

	<?php  

	 	global $user_login;
   
            // Login form arguments.
            $args = array(
                'echo'           => true,
                'redirect'       => home_url('home'), 
                'form_id'        => 'loginform',
                'label_username' => __( 'Username' ),
                'label_password' => __( 'Password' ),
                'label_remember' => __( 'Remember Me' ),
                'label_log_in'   => __( 'Log In' ),
                'id_username'    => 'user_login',
                'id_password'    => 'user_pass',
                'id_remember'    => 'rememberme',
                'id_submit'      => 'wp-submit',
                'remember'       => true,
                'value_username' => NULL,
                'value_remember' => true
            ); 
            
            // Calling the login form.
            wp_login_form( $args );

	?>
</div>
 <!-- <form action="#" method="post">
 		<div class="main">
 			<div class="icon-head-wthree">
 		<h2>Login</h2>
 		</div>
         <div class="form-left-w3l">
             
 		     <input name="email" placeholder="Email" required="" type="email">
 			
          <div class="clear"></div> 
 		</div> 		   
 		 <div class="form-right-w3ls ">
 				
 				<input name="password" placeholder="Password" required="" type="password">
 			
 		         <div class="clear"></div>
 		</div>
 	     <div class="btnn">
 
 	          <button type="button">Login</button><br>
       	      
        </div>	
     </div>
 
   </form> -->
   <div class="btnn">
   		<a href="<?php echo  home_url('registration'); ?>" class="for">Go to Registration</a>  
	</div>	

	<div id="error"></div>
</div>



</div>


</section>



<?php get_footer(); ?>

<script type="text/javascript">
	
	jQuery(function(){
		jQuery("#user_login").attr("placeholder", "Name");
		jQuery("#user_pass").attr("placeholder", "Password");
	});


	jQuery(function(){


		jQuery("#wp-submit").click(function(event) {
			
			var userLog = jQuery("#user_login").val();
			var userPass = jQuery("#user_pass").val();

			if (userLog == "" || userPass == "" ) {

				jQuery("#error").html('<strong>Warning!</strong> There are empty fields...!!!').show();
	    		jQuery("#error").fadeOut(3000);

			}


		});

		

	});


</script>


