<?php 

	/*Template Name: Registration*/
	get_header(); 


?>



<section class="regis-page">

<div class="mid-cls">
<div class="swm-left-w3ls">
	


		<form action="" method="post" id="form_register">
			<div class="main">

			<div class="icon-head-wthree">
			        
			<h2>Sign Up</h2>
			</div>

				<div class="form-left-to-w3l">
					<input name="name" placeholder="Name" type="text" id="uname">
					<div class="clear"></div>
				</div>
						

				<div class="form-left-w3l">
					<input name="email" placeholder="Email" type="email" id="uemail">
				</div>
				<div class="form-right-w3ls ">
					<input name="password" placeholder="Password" type="password" id="upass">
					<div class="clear"></div>
				</div>

			<div class="btnn">
				<button type="button" name="submit" id="regis_ajax">Sign Up</button>
				<!-- <input type="submit" name="submit" value="Sign Up"> -->
				<br> 
				<br>
				<a href="<?php echo  home_url('login'); ?>" class="for">Go to Login</a> 
				<div class="clear"></div>
			</div>

			<div id="error"></div>
			<div id="email_match"></div>
			<div id="suc"></div>

			</div>

		</form>

</div>

</div>


</section>



<?php get_footer(); ?>

 <script type="text/javascript">

  jQuery("#regis_ajax").click(function() {
    		
    		var userName = jQuery("#uname").val();
    		var userEmail = jQuery("#uemail").val();
    		var userPass = jQuery("#upass").val();


    		if(userName == '' || userEmail == '' || userPass == '' ) {

    			jQuery("#error").html('<strong>Warning!</strong> There are empty fields...!!!').show();
    			jQuery("#error").fadeOut(3000);

    		} else {

    			var name = jQuery("#uname").val();
    			var email = jQuery("#uemail").val();
    			var pass = jQuery("#upass").val();

    			jQuery.ajax({

    				url: '<?php echo admin_url( "admin-ajax.php" ); ?>',
    				type: 'POST',
    				data: {

    					action: "user_login",
    					name:name,
    					email:email,
    					pass:pass,

    				},
    				success: function(data){
    					console.log(data);

    					if(data == "match-email") {

    						jQuery("#email_match").html("<strong>Warning!</strong> This email address already existe...!!!").show();
    						jQuery("#email_match").fadeOut(5000);
    					}

    					if(data == "success") {

    						jQuery("#suc").html("<strong>Success!</strong> User name is successfully save...(-_-)").show();
    						jQuery("#suc").fadeOut(5000);
    						jQuery("#form_register")[0].reset();

    					}

    				}
    			})

    			
    			


    		}




    	});


 </script>

