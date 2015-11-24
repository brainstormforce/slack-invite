<?php
$conn = new PDO("mysql:host=localhost;dbname=anil", "root", "aftermath7");
$host = $_SERVER["HTTP_HOST"];
if ($host == "localhost") {
	$URL = $_SERVER["HTTP_HOST"];
}?>
