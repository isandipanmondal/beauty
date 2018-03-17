  
	  
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
    <!-- <script src="<?php //path(); ?>js/main.js"></script> -->

   

    <?php wp_footer(); ?>
  </body>
</html>
