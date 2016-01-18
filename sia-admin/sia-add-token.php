<?php require("sia-header.php");
if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['slack_url']) && !empty($_POST['slack_url']) && isset($_POST['slack_token']) && !empty($_POST['slack_token']) && isset($_POST['token_id']) && empty($_POST['token_id'])){
	$save_new = $sia_obj ->add_new_slack_token($_POST['name'],$_POST['slack_url'],$_POST['slack_token']);
	header("Location: sia-token.php");
}
if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['slack_url']) && !empty($_POST['slack_url']) && isset($_POST['slack_token']) && !empty($_POST['slack_token']) && isset($_POST['token_id']) && !empty($_POST['token_id'])){
	$save_new = $sia_obj ->edit_new_slack_token($_POST['token_id'],$_POST['name'],$_POST['slack_url'],$_POST['slack_token']);
	header("Location: sia-token.php");
}
if(isset($_GET['id']) && !empty($_GET['id'])){
	$get_token = $sia_obj ->get_slack_token_url_by_id($_GET['id']);
}
?>
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Add Your Token <small>Add new token from slack</small>
            </h1>
        </div>
    </div>
</div>


<div class="content">
    <div class="block">
		<div class="row">
			<div class="col-sm-7" style="margin-bottom:0">
				<form class="email_form form-inline" role="form" action="" method="post">
					<table >
						<tr>
							<td>
								<div class="form-group">
									<input type="text" class="form-control name"  name="name" placeholder="Enter name of person" required value="<?php if(isset($get_token['name']) && !empty($get_token['name'])){ echo $get_token['name']; } ?>"/>
									<input type="hidden" class="form-control name"  name="token_id" value="<?php if(isset($get_token['id']) && !empty($get_token['id'])){ echo $get_token['id']; } ?>"/>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<input type="text" readonly class="form-control email" value="https://slackinvite.slack.com/api/users.admin.invite" name="slack_url" placeholder="Enter url" required/>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<input type="text" class="form-control email"  name="slack_token" placeholder="Add Token" required value="<?php if(isset($get_token['token']) && !empty($get_token['token'])){ echo $get_token['token']; } ?>"/>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<input type="submit" class="btn btn-default " name="add_token" value="Add Token"/>
								</div>
							</td>	
						</tr>
						<tr><td>&nbsp;</td></tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
<?php require("sia-footer.php"); ?>