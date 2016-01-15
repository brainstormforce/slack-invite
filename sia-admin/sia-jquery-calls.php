<?php
require 'sia-constants.php';
if(isset($_POST['ajaxfunction']) && !empty($_POST['ajaxfunction']) && $_POST['ajaxfunction'] == "update_email_status"){
	$sia_obj->update_notfication_email_status($_POST['email'],$_POST['status']);
}
if(isset($_POST['ajaxfunction']) && !empty($_POST['ajaxfunction']) && $_POST['ajaxfunction'] == "delete"){
	$get_data = $sia_obj->remove_notfication_email($_POST['delete_email']);
	echo $get_data;
}
?>