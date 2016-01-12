<?php
class DBi {
    public static $conn;
}
DBi::$conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

function run_query($query){
	$result = DBi::$conn->query($query);
	return $result;
}

function fetch_data($query){
	$result = mysqli_fetch_assoc($query);
	return $result;
}

function chk_result_if_empty($query){
	$result = mysqli_num_rows($query);
	return $result;
}

function validate_input($input){
	$result = DBi::$conn->real_escape_string($input);
	return $result;
}
?> 