<?php
$conn = new PDO("mysql:host=localhost;dbname=slack", "root", "");
$host = $_SERVER["HTTP_HOST"];
if ($host == "localhost") {
	$URL = $_SERVER["HTTP_HOST"];
}?>
