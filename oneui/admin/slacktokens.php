<?php include 'includeRequired.php';?>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery(".display_token_edit").css('display', 'none');
			jQuery('#display_button').click(function(event) {
						jQuery(".display_token_edit").css('display', 'block');
						jQuery(".display_token").css('display', 'none');
						jQuery(this).css('display', 'none');
					});	
		});
	</script>
	<?php if(isset($_SESSION['login_user'])){ 
		include 'adminfunctions/header.php';	
	?>	
	<div class="row">
		<div style="margin-left:30px;margin-bottom:50px;"><h1 class="page-heading"><i class="fa fa-wrench fa-2"></i>  Settings</h1>
			<medium>Here you can change settings for slack token.</medium>
		</div>
	</div>

<div class="content bg-gray-lighter"><div class="myblock block block-rounded block-content">
<?php
// Css and all full functions will be working only if included in settings.php
$sql= "SELECT * FROM `slack_settings`";
$rs=$conn->query($sql);
$rs->setFetchMode(PDO::FETCH_ASSOC);

echo "<div class='display_token '>";
while($result=$rs->fetch()){	
	echo "<div class='block-header bg-modern-light'><strong>Link : </strong> ".$result['url']."</div>";
	echo "<div class='block-header bg-modern-light'><strong>Token : </strong>".$result['token']."</div>";
}?>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery(".display_token_edit").css('display', 'none');
			jQuery('#display_button').click(function(event) {
						jQuery(".display_token_edit").css('display', 'block');
						jQuery(".display_token").css('display', 'none');
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
	echo "<div class='col-sm-9'><label for='material-text'>Token url </label><input type=text class='form-control url form-control'  value=".$result['url']." name='slack_url'></div>";
	echo "<div class='col-sm-9'><label for='material-text'>Token id</label><input type=text class='form-control token' value=".$result['token']." name='slack_token'></div>";
}
echo "<div class='col-sm-9' style='padding-top:10px;'><input type='submit' class='btn btn-default' name='submitbtn' value='Submit'></div></form>";
echo "<div style='padding-top:10px;'><button id='display_button' class='btn btn-default'>change</button><br /></div>";
?>		<?php  
	}else{
			echo "<div><h2>Please Login to view this page!!!!!!!!!!</h2>
					please go to login page!!<br>
					<div><a href='index.php'><input type='button' class='btn btn-default login' name='login' value='Login'></a></div>
				</div>";
			}?>
</div>
</div>
<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>