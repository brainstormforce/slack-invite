<?php
try {
	$conn = new PDO("mysql:host=localhost;dbname=test_slack", "root", "");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$host = $_SERVER["HTTP_HOST"];
	if ($host == "localhost") {
		$URL = $_SERVER["HTTP_HOST"];
	}
}
catch(PDOException $e) {
    echo $e->getMessage();
}
?>
