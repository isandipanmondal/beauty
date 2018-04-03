  
	  
	  <!--===========footer==================-->
	  
	  
	  <div class="footer">
	  	<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h3>BRIDGE TO BEAUTY</h3>
					<p>Find your BEAUTY EXPERT</p>

					<?php  

						wp_nav_menu( array(
							'theme_location'  => 'footer-menu',
							'menu'            => '',
							'container'       => 'div',
							'container_class' => 'menu-{menu-slug}-container',
							'container_id'    => '',
							'menu_class'      => 'list-inline foot-nav',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						) );

					?>
					
					<!-- <ul class="list-inline foot-nav">
						<li><a href="">Search</a></li>
						<li><a href="">About</a></li>
						<li><a href="">Contact Us</a></li>
						<li><a href="">Log In</a></li>
					</ul> -->
				</div>
				<div class="col-sm-4">
					<h4>Follow Us</h4>
					<ul class="list-inline foot-social">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-instagram"></i></a></li>
						<li><a href=""><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	  </div>
	  
	  
	  
	  
	  <div class="copyright">
	  	<div class="container">
			<div class="row">
				<p>&copy;Copyright 2017 Luciddream All Rights Reserved</p>
			</div>
		</div>
	  </div>
	  
	  
	  <!--===========footer==================-->
	  


<!--=============================js=========================-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php path(); ?>js/bootstrap.min.js"></script>
	<script src="<?php path(); ?>js/wow.js"></script>
	<!-- JS file -->
	<script src="<?php path(); ?>js/jquery.easy-autocomplete.min.js"></script> 

    <!-- <script src="<?php //path(); ?>js/main.js"></script> -->
	<script type="text/javascript">
		$(document).ready(function(){
			
			$(".imgsubmit").click(function(){
				var fd = new FormData($('#msform')[0]);
				var countItems = $('#main_image')[0].files.length;
				for (var x = 0; x < countItems; x++) {
				    fd.append("main_image[]", $('#main_image')[0].files[x]);
				}
			    //fd.append( "main_image", $('#main_image')[0].files[0]);
			    fd.append( "action", 'profile_image');
				console.log(fd);
				$.ajax({
					url:'<?php echo admin_url('admin-ajax.php'); ?>',
					type:'POST',
					processData: false,
        			contentType: false,
					data : fd,
					success: function(data, textStatus, XMLHttpRequest) {
			            console.log(data);
			        },

			        error: function(MLHttpRequest, textStatus, errorThrown) {
			            alert(errorThrown);
			        }
				});
			});

			var options = {
			data: [<?php nfs_get_all_usernames(); ?>]
			};

			$("#search").easyAutocomplete(options);
		});
	</script>

    <?php wp_footer(); ?>
  </body>
</html>
