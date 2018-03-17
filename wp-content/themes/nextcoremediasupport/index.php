<?php  get_header(); ?>


	<section class="blog-page">
		<div class="container">
			<div>
				
				<?php while(have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile ?>
				
			</div>
		</div>
	</section>


<?php get_footer(); ?>