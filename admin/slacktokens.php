	<?php session_start();
	 if(isset($_SESSION['login_user'])){ 
		include 'adminfunctions/header.php';
		include 'includeRequired.php';	
	?>	
	<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Settings <small>Here you can change settings for slack token.</small>
            </h1>
        </div>
    </div>
</div>
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block">
		<div class="myblock block block-rounded block-content">
<?php
// Css and all full functions will be working only if included in settings.php
$sql= "SELECT * FROM `slack_settings`";
$rs=$conn->query($sql);
$rs->setFetchMode(PDO::FETCH_ASSOC);

echo "<div class='display_token '>";
while($result=$rs->fetch()){	
	echo "<div class='block-header'><strong>Link : </strong> ".$result['url']."</div>";
	echo "<div class='block-header'><strong>Token : </strong>".$result['token']."</div>";
}?>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery(".display_token_edit").css('display', 'none');
			jQuery('#display_button').click(function(event) {
						jQuery(".display_token_edit").css('display', 'block');
						jQuery(".display_token").css('display', 'none');
						jQuery(".form-control.url").css('display', 'none');
						jQuery(this).css('display', 'none');
					});	
		});
	</script>
<?php
$rs=$conn->query($sql);
$rs->setFetchMode(PDO::FETCH_ASSOC);

echo "</div>";
echo"<form  method='post' class='form display_token_edit' >";
while($result=$rs->fetch()){	
	echo "<div class='col-sm-9'><label for='material-text'>You only need to change your Token Id !!! </label><input type=text class='form-control url form-control'  value=".$result['url']." name='slack_url'></div>";
	echo "<div class='col-sm-9'><label for='material-text'>Token id</label><input type=text class='form-control token' value=".$result['token']." name='slack_token'></div>";
}
echo "<div class='col-sm-9' style='padding-top:10px;'><input type='submit' class='btn btn-default' name='submitbtn' value='Submit'></div></form>";
echo "<div class='block-content' style='padding-top:10px;'><button id='display_button' class='btn btn-default'>change</button><br /></div>";
?>	
</div>
</div>
<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>
<?php  
	}else{
			header("Location: index.php");
			}?>