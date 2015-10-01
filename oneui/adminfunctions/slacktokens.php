 
<?php
// Css and all full functions will be working only if included in settings.php

$sql= "SELECT * FROM `slack_settings`";
$rs=$conn->query($sql);
$rs->setFetchMode(PDO::FETCH_ASSOC);

echo "<ul class='display_token'>";
while($result=$rs->fetch()){	
	echo "<li >".$result['url']."</li>";
	echo "<li>".$result['token']."</li>";
}
$rs=$conn->query($sql);
$rs->setFetchMode(PDO::FETCH_ASSOC);

echo "</ul>";
echo"<form  method='post' class='form display_token_edit' >";
while($result=$rs->fetch()){	
	echo "<div class='form-group'><label>Token url </label><input type=text class='form-control url'  value=".$result['url']." name='slack_url'></div>";
	echo "<div class='form-group'><label>Token id</label><input type=text class='form-control token' value=".$result['token']." name='slack_token'></div>";
}
echo "<input type='submit' class='btn btn-default' name='submitbtn' value='change'></form>";
echo "<button id='display_button' class='btn btn-default'>change</button><br />";
?>
