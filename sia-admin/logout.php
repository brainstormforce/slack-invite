<?php
require("header.php");
if(isset($_SESSION['login_user'])){ unset($_SESSION['login_user']); }
if(isset($_SESSION['uid'])){ unset($_SESSION['uid']); }
if(isset($_SESSION['email'])){ unset($_SESSION['email']); }

header("Location: index.php");
?>