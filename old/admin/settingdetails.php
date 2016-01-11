<?php
include '../functions/connections.php';
require 'classes/db_queries.php';  // Include class file
$slack_obj = new data_queries(); // create object

if($_POST['ajaxfunction']=='settings_email'){
	$r = $slack_obj ->add_new_notfication_email($_POST['name'],$_POST['notification_email']);
	echo $r;
}

//edit slack token and url
else if($_POST['ajaxfunction']=='edit_token'){
	$tokens = $slack_obj ->edit_tokens($_POST['url'],$_POST['token']);
	echo $tokens;
}

// Set notification email status on/off
else if($_POST['ajaxfunction']=='update_email_status'){
	$update_status = $slack_obj ->update_notfication_email_status($_POST['email'],$_POST['status']);
}

//deletes notification emails
else if($_POST['ajaxfunction']=='delete'){
	$r = $slack_obj ->remove_notfication_email($_POST['delete_email']);
	echo $r;
}