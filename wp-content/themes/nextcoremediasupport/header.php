<?php  
	
	function path(){
		echo get_template_directory_uri()."/";
	}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">

    <!-- <title>nextcoremediasupport</title> -->
	
	<link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900|Overpass:100,100i,200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="<?php path(); ?>css/animate.css" rel="stylesheet">
    <link href="<?php path(); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php path(); ?>css/style.css" rel="stylesheet">
    <link  href="<?php path(); ?>css/font-awesome.css" rel="stylesheet"/> 
	<link  href="<?php path(); ?>css/responsive.css" rel="stylesheet"/> 
	<!-- CSS file -->
	<link rel="stylesheet" href="<?php path(); ?>css/easy-autocomplete.min.css">
  </head>

  <?php wp_head(); ?>

  <body <?php body_class(); ?>>
	  
	  
	  

	<!-- Navigation -->
	<section class="navigation_bar">
		

		<nav class="navbar navbar-default navigation">
			<div class="container header-logo">

				<div class="logo-area">
					<img src="<?php path(); ?>image/logo.png" class="img-responsive logo" alt=""/>
				</div>




		<div class="user_login_imge ">

		</div>


			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
				</div>

			<!-- Collect the nav links, forms, and other content for toggling -->

				
					<?php  

						wp_nav_menu( array(
							'theme_location'  => 'main-menu',
							'menu'            => '',
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'bs-example-navbar-collapse-1',
							'menu_class'      => 'nav navbar-nav navbar-right',
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






				<!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">HOME</a></li>
						<li><a href="#">SEARCH</a></li>
						<li><a href="#">ABOUT</a></li>
						<li><a href="#">LOGIN</a></li>
						<li><a href="#">REGISTRATION</a></li>
						<li class="cart"><a href="#"><span><i class="fa fa-shopping-cart"></i></span> CART - $00.00</a></li>
					</ul>
				</div> -->

				<!-- /.navbar-collapse -->




			</div><!-- /.container -->
		</nav>
	</section> <!-- .navigation_bar -->