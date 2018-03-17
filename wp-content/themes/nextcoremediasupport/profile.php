<?php  

	/*Template Name: profile*/
	get_header();
	global $wpdb;





?>


<section class="page-title">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2><?php global $post; echo $post->post_title; ?></h2>
			</div>
		</div>
	</div>
</section>

<section class="page-body">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">

				<div class="Donation-main-w3ls">

				<form action="" method="post" id="form_register">

					<div class="main">
						<div class="form-left-to-w3l">
							<label>Experience</label>
							<input type="number" name="name" placeholder="Year/Years" min="0" id="year">
							<div class="clear"></div>
						</div>
						<div class="form-right-to-w3ls">
							<label>Location</label>
							<div class="form-control-w3l">
								<textarea name="address" placeholder="Your address..." id="adress"></textarea>
							</div>
							
							<div class="clear"></div>
						</div>

					</div>
					<div class="main">
						<div class="form-left-to-w3l">
							<label>Profile Picture</label>
							<input type="file" name="img" id="img">
						</div>
					</div>

					<div class="main">
						<div class="form-left-to-w3l">
							<label>Past Work Picture</label>
							<input type="file" name="imgs" multiple="multiple" id="imgs">
						</div>
					</div>


					<div class="form-add-to-w3ls add">  
						<label>Services</label>
						<span>( 5 different custom services )</span>
						<input type="text" name="address" placeholder="Service 1" id="ser1">
						<input type="text" name="address" placeholder="Service 2" id="ser2">
						<input type="text" name="address" placeholder="Service 3" id="ser3">
						<input type="text" name="address" placeholder="Service 4" id="ser4">
						<input type="text" name="address" placeholder="Service 5" id="ser5">
						<div class="clear"></div>
					</div>

					<div class="main">
						<div class="form-left-to-w3l">
							<label>Price</label>
							<input type="number" name="price" placeholder="$0.00" min="0" id="pric">
							<div class="clear"></div>
						</div>
						

					</div>

				
					<div class="btnn">
						<button type="button" id="pro_sub_id">Send</button>
					</div>

					<div id="error"></div>
					<div id="suc"></div>



				</form>


				<div class="clear"></div>
			</div>
				
			</div>


			<div class="col-sm-6">
				<div>
					<div id="sticky-anchor"></div>
					<div id="sticky">
						<img src="<?php echo path(); ?>image/christina.png" class="img-responsive" alt=""> 
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php  get_footer(); ?>


<script type="text/javascript">
	
	jQuery("#pro_sub_id").click(function(event) {

		var year = jQuery("#year").val();
		var adress = jQuery("#adress").val();
		//var img = jQuery("#img").val();
		//var imgs = jQuery("#imgs").val();
		var ser1 = jQuery("#ser1").val();
		var ser2 = jQuery("#ser2").val();
		var ser3 = jQuery("#ser3").val();
		var ser4 = jQuery("#ser4").val();
		var ser5 = jQuery("#ser5").val();
		var pric = jQuery("#pric").val();

		//|| img == '' || imgs == ''


		if (year == '' || adress == '' || ser1 == '' || ser2 == '' || ser3 == '' || ser4 == '' || ser5 == '' || pric == '' ) {

			jQuery("#error").html('<strong>Warning!</strong> There are empty fields...!!!').show();
    		jQuery("#error").fadeOut(3000);

		} else {


			var ayear 	= jQuery("#year").val();
			var aadress = jQuery("#adress").val();
			//var aimg 	= jQuery("#img").val();
			//var aimgs	= jQuery("#imgs").val();
			var aser1 	= jQuery("#ser1").val();
			var aser2 	= jQuery("#ser2").val();
			var aser3 	= jQuery("#ser3").val();
			var aser4 	= jQuery("#ser4").val();
			var aser5 	= jQuery("#ser5").val();	
			var pric 	= jQuery("#pric").val();	

			jQuery.ajax({

					  url: '<?php echo admin_url( "admin-ajax.php" ); ?>',
					  type: 'POST',
					  
					  data: {

					  	action: "user_extra_information",

					  	ayear: ayear,
					  	aadress: aadress,
					  	//aimg: aimg,
					  	//aimgs: aimgs,
					  	aser1: aser1,
					  	aser2: aser2,
					  	aser3: aser3,
					  	aser4: aser4,
					  	aser5: aser5,
					  	pric: pric,

					  },

					  success: function(data) {
					    console.log(data);

					    if (data == "success") { 

					    	jQuery("#suc").html("<strong>Success!</strong> User name is successfully save...(-_-)").show();
    						jQuery("#suc").fadeOut(5000);
    						jQuery("#form_register")[0].reset(); 

					    }



					  },


					 
			});
																					
			

		}

	});


</script>






<script type="text/javascript">
	
	function sticky_relocate() {
	    var window_top = $(window).scrollTop();
	    var div_top = $('#sticky-anchor').offset().top;
	    if (window_top > div_top) {
	        $('#sticky').addClass('stick');
	        $('#sticky-anchor').height($('#sticky').outerHeight());
	    } else {
	        $('#sticky').removeClass('stick');
	        $('#sticky-anchor').height(0);
	    }
	}

	$(function() {
	    $(window).scroll(sticky_relocate);
	    sticky_relocate();
	});

	var dir = 1;
	var MIN_TOP = 200;
	var MAX_TOP = 350;

	function autoscroll() {
	    var window_top = $(window).scrollTop() + dir;
	    if (window_top >= MAX_TOP) {
	        window_top = MAX_TOP;
	        dir = -1;
	    } else if (window_top <= MIN_TOP) {
	        window_top = MIN_TOP;
	        dir = 1;
	    }
	    $(window).scrollTop(window_top);
	    window.setTimeout(autoscroll, 100);
	}

</script>




