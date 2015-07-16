<?php
$conn = new PDO("mysql:host=localhost;dbname=slack_invite", 'root', '');
$URL = 'http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'] ;