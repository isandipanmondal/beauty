<?php  
	global $wpdb;
	/*Template Name: view_profile*/

	get_header();
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
			
			<table border="1" cellpadding="5" cellspacing="5" width="50%">
				<tr>
					<td>Experience</td>
					<td><?php echo get_user_meta( $current_user->ID , 'user_experi', true ); ?></td>
				</tr>
				<tr>
					<td>Location</td>
					<td><?php echo get_user_meta( $current_user->ID , 'user_aadress', true ); ?></td>
				</tr>
				<tr>
					<td>Services 1 </td>
					<td><?php echo get_user_meta( $current_user->ID , 'user_ser1', true ); ?></td>
				</tr>
				<tr>
					<td>Services 2</td>
					<td><?php echo get_user_meta( $current_user->ID , 'user_ser2', true ); ?></td>
				</tr>
				<tr>
					<td>Services 3</td>
					<td><?php echo get_user_meta( $current_user->ID , 'user_ser3', true ); ?></td>
				</tr>
				<tr>
					<td>Services 4</td>
					<td><?php echo get_user_meta( $current_user->ID , 'user_ser4', true ); ?></td>
				</tr>
				<tr>
					<td>Services 5</td>
					<td><?php echo get_user_meta( $current_user->ID , 'user_ser5', true ); ?></td>
				</tr>
				<tr>
					<td>Services 5</td>
					<td><?php echo get_user_meta( $current_user->ID , 'user_ser5', true ); ?></td>
				</tr>
				<tr>
					<td>Price $ </td>
					<td><?php echo get_user_meta( $current_user->ID , 'price', true ); ?></td>
				</tr>
			</table>
				
		</div>
	</div>
</section>


<?php get_footer(); ?>