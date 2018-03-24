<?php 

/*Template Name: Ajax Image Upload*/
get_header(); 


?>

<form id="msform" action="#" method="post" enctype="multipart/form-data">

<input type="file" name="main_image" id="main_image"  multiple="multiple" value="" accept=".png, .jpg, .jpeg, .gif"/>
<input type="button" class="imgsubmit" value="Publish"/>
</form>

<?php
$i = 0;
while ( $i>=0) {
	if(get_user_meta(get_current_user_id(),'user_meta_image'.$i,true) == ''){
		break;
	}
	
	echo "<img src=".wp_get_attachment_url(get_user_meta(get_current_user_id(),'user_meta_image'.$i,true)).">";
	$i++;
}

get_footer();