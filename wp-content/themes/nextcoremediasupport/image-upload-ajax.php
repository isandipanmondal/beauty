<?php 

/*Template Name: Ajax Image Upload*/
get_header(); 


?>

<form id="msform" action="#" method="post" enctype="multipart/form-data">

<input type="file" name="main_image" id="main_image"  multiple="false" value="" accept=".png, .jpg, .jpeg, .gif"/>
<input type="button" class="imgsubmit" value="Publish"/>
</form>

<?php

get_footer();