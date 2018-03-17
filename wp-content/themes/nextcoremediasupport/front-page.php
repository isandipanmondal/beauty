<?php 

	/*Template Name: Home*/
	get_header(); 
	
?>

	  
	  <div class="header">
	  	<div class="container">
			<div class="row">

				<div class="col-sm-7">
				<div class="main-head">
					<h1>BRIDGE TO BEAUTY</h1>
					<p class="head-p">Find your BEAUTY EXPERT</p>
					
					
					
					<div class="form">
                <form id="search-form" class="form-search form-horizontal">
                    <input type="text" class="input-search search-frm" placeholder="Search Here.....">
                    <?php echo get_search_form(); ?>

                </form>
				
				
				<div class="head-btn">
					<ul class="list-inline">
						<li><a href="#" class="hvr-sweep-to-right srch-btn">SEARCH</a></li>
							
					
					<?php  

						if (is_user_logged_in()) { ?>

							<li style="display: none;">
								<a href="<?php echo home_url( $path = 'login', $scheme = null ); ?>" class="hvr-sweep-to-right">SIGN UP AS A PROFESSIONAL</a>
							</li>
							
						<?php } else { ?>

							<li>
								<a href="<?php echo home_url( $path = 'login', $scheme = null ); ?>" class="hvr-sweep-to-right">SIGN UP AS A PROFESSIONAL</a>
							</li>

						<?php }


					?>
							
						
					</ul>
				</div>
				
				<!--<button type="submit" class="btn-search">SEARCH</button>-->
				
				
            </div>
            </div>
					
					
					
				</div>
				
				<div class="col-sm-5"></div>
				
				
			</div>
		</div>
	  </div>
	  
	  
	  <div class="welcome">
	  	<div class="container">
			<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="wlcm">
					<h2>Welcome to BRIDGE TO BEAUTY</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
			<div class="col-sm-2"></div>
				
			</div>
			
			
			
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<div class="col-sm-4">
						<div class="makeup-area">
							<img src="<?php path() ?>image/hair-make-up.png" class="img-responsive" alt=""/> 
							<div class="hair">
								<h4>hair makeup</h4>
								<div class="line"></div>
								<p class="hair-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
								
								<div>
									<a href=""><p class="hair-btn">more info</p></a>
								</div>								
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="makeup-area">
							<img src="<?php path() ?>image/eye-make-up.png" class="img-responsive" alt=""/>
							<div class="eye">
								<h4>Eye makeup </h4>
								<div class="line"></div>
								<p class="hair-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
								
								<div>
									<a href=""><p class="eye-btn">more info</p></a>
								</div>								
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="makeup-area">
							<img src="<?php path() ?>image/facer-make-up.png" class="img-responsive" alt=""/>
							<div class="face">
								<h4>face makeup </h4>
								<div class="line"></div>
								<p class="hair-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
								
								<div>
									<a href=""><p class="face-btn">more info</p></a>
								</div>								
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-1"></div>
			</div>
			
			
		</div>
	  </div>
	  
	  
	  
	  
	 <!--=======beauty====================-->
	  
	  
	  
	  <div class="beauty">
	  	<div class="container">
			<div class="row">
				<div class="col-sm-6"></div>
				<div class="col-sm-6">
					<div class="buty">
						<h2 class="buty-h2">Everythis has <span>beauty </span>Make up is <span>art</span></h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						
						
						<div class="beauty-btn">
							<a href="#" class="hvr-sweep-to-right learn-btn">Learn more</a>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	  </div>
	  
	  <!--=======beauty====================-->
	  
	  
	  <div class="discover">
	  	<div class="container">
			<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<div class="col-sm-4">
					<div class="dscvr-icon">
						<div class="block">

       						 <i class="hovicon effect-8"><img src="<?php path(); ?>image/discover-icon.png" class="img-responsive" alt=""/></i> 
   						 </div>
						
						<h4 class="dscvr-h4">1. Discover</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
						
					</div>
				</div>
				<div class="col-sm-4">
					<div class="dscvr-icon">
						
						<div class="block">
       						 <i class="hovicon effect-8"><img src="<?php path(); ?>image/book-icon.png" class="img-responsive" alt=""/></i>
   						</div>
						
						<h4 class="dscvr-h4">2. Book</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>

					</div>
				</div>
				<div class="col-sm-4">
					<div class="dscvr-icon">
							<div class="block">
        						<i class="hovicon effect-8"><img src="<?php path(); ?>image/enjoy-icon.png" class="img-responsive" alt=""/></i>
    						</div>
						<h4 class="dscvr-h4">3. Enjoy</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
					</div>
				</div>
			</div>
			<div class="col-sm-1"></div>
			</div>
		</div>
	  </div>
	  
	  <!--=================arrtist====================-->
	  
	  
	  <div class="artist">
	  	<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="artist-h2">
						<h2>Find Your <span>Artist</span></h2>
						
					</div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
					
					
						<div class="beauty-btn">
							<a href="#" class="hvr-sweep-to-right learn-btn">Learn more</a>
						</div>
					
					
					
				</div>
				<div class="col-sm-6"></div>
			</div>
		</div>
	  </div>
	  
	   
	  <!--=================arrtist====================-->
	  
	  
	  <!--======================makeup-artist===================-->
	  
	  
	  <div class="makeup-artist">
	  	<div class="container">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<div class="passionate">
					<div class="row">
						<p class="makeup-p">We Are Passionate</p>
						<h2 class="makeup-h2">Our Makeup <span>Artists</span></h2>
						
						
						<div class="mkup-artist">
							<div class="col-sm-4">
								<img src="<?php path(); ?>image/christina.png" class="img-responsive" alt=""/>
								
								<p class="artist-name">Christina Deleon </p>
								<p class="artist-add">Garden City</p>
								
								<div class="artst-btn">
							<a href="#" class="hvr-sweep-to-right artist-btn">BOOK ARTIST</a>
						</div>
								
							</div>
							<div class="col-sm-4">
								<img src="<?php path(); ?>image/nicole.png" class="img-responsive" alt=""/>
								
								<p class="artist-name">Nicole Corona</p>
								<p class="artist-add">Forest Hills</p>
								
								<div class="artst-btn">
							<a href="#" class="hvr-sweep-to-right artist-btn">BOOK ARTIST</a>
						</div>
							</div>
							<div class="col-sm-4">
								<img src="<?php path(); ?>image/christian.png" class="img-responsive" alt=""/>
								
								<p class="artist-name">Christian Ladigoski</p>
								<p class="artist-add">Queens, NY</p>
								
								<div class="artst-btn">
							<a href="#" class="hvr-sweep-to-right artist-btn">BOOK ARTIST</a>
						</div>
							</div>
						</div>
						
						
						
						
						
					</div>
					</div>
				</div>
				<div class="col-sm-1"></div>
			</div>
		</div>
		
		
		
		
		
		
		<div class="our-price">
			<div class="container">
				<div class="row">
					<h2 class="price-h2">Our <span>Prices</span></h2>
					
					
					
					<div class="col-sm-8">
						<div class="hair-price">
						<div class="row">
						<div class="col-sm-6">
							<div class="hair-cut">
							<h5>Woman's Haircut---------------------$40</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						
						
						<div class="hair-cut">
							<h5>Men's Hairut---------------------$35</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						
						
						<div class="hair-cut">
							<h5>Child's Cut---------------------$30</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						
						
						<div class="hair-cut">
							<h5>Hair Extentions---------------------$70</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						
		
						</div>

						
						
					<div class="col-sm-6">
						<div class="hair-cut">
							<h5>Keratin Treatment---------------------$220</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						
						<div class="hair-cut">
							<h5>Shampoo Blow Dry---------------------$60</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						
						
						<div class="hair-cut">
							<h5>Bridal Makeup---------------------$40</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						
						<div class="hair-cut">
							<h5>Bridesmaid Hair---------------------$40</h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						
						
					</div>
						
						
						
						</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="book-makeup-artist">
							<h3>Makeup artist</h3>
							<div class="artst">
							<p class="artst-nm-p">LOREM IPSUM</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						
						<div class="artst">
							<p class="artst-nm-p">LOREM IPSUM</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						
						<div class="artst">
							<p class="artst-nm-p">LOREM IPSUM</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						
						<div class="artst">
							<p class="artst-nm-p">LOREM IPSUM</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
						<div class="artst-book-btn">
							<a href="#" class="hvr-sweep-to-right book-btn">BOOK ARTIST</a>
						</div>
						
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		
		
	  </div>
	  
	  
	  
	  
	  <!--======================makeup-artist===================-->
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <!--===================newsletter=====================-->
	  
	  <div class="newsletter">
	  	<div class="container">
			<div class="row">
			<div class="col-sm-5">
				<h3>Subscribe For Update</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting 
					industry. Lorem Ipsum </p>
			</div>
			<div class="col-sm-2"></div>
			<div class="col-sm-5">
				
		<div class="input-group single">
         <input type="email" class="form-control" placeholder="Enter your email">
         <span class="input-group-btn">
         <button class="btn btn-theme" type="submit">Subscribe</button>
         </span>
          </div>
				
			</div>
			</div>
		</div>
	  </div>
	  
	<?php get_footer(); ?>