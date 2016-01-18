<?php require("sia-header.php");
if(isset($_POST['slack_url']) && !empty($_POST['slack_url']) && isset($_POST['slack_token']) && !empty($_POST['slack_token']) && isset($_POST['token_id']) && empty($_POST['token_id'])){
	$save_new = $sia_obj ->add_new_slack_token($_POST['name'],$_POST['slack_url'],$_POST['slack_token']);
	header("Location: sia-token.php");
}
if(isset($_POST['slack_url']) && !empty($_POST['slack_url']) && isset($_POST['slack_token']) && !empty($_POST['slack_token']) && isset($_POST['token_id']) && !empty($_POST['token_id'])){
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
				<form class="email_form form-inline" id="save_token_form" role="form" action="" method="post">
					<table >
						<tr>
							<td>
								<div class="form-group">
									<input type="hidden" class="form-control name"  name="name" placeholder="Enter name of person" required value="<?php if(isset($get_token['name']) && !empty($get_token['name'])){ echo $get_token['name']; } ?>"/>
									<input type="hidden" class="form-control name"  name="token_id" value="<?php if(isset($get_token['id']) && !empty($get_token['id'])){ echo $get_token['id']; } ?>"/>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<input type="text" class="form-control email" value="<?php if(isset($get_token['url']) && !empty($get_token['url'])){ echo $get_token['url']; } ?>" id="slack_url" name="slack_url" placeholder="teamdomain" required/>.slack.com
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<input type="text" class="form-control email" id="slack_token" name="slack_token" placeholder="Add Token" required value="<?php if(isset($get_token['token']) && !empty($get_token['token'])){ echo $get_token['token']; } ?>"/>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<input type="submit" class="btn btn-default " name="add_token" value="<?php if(isset($_GET['id']) && !empty($_GET['id'])){ echo "Save Token"; }else{ echo "Add Token"; }?>"/>
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
<script src="<?php echo BASE_PATH; ?>assets/js/core/jquery.min.js" ></script>
<script type="text/javascript">
$("document").ready(function(){
	$("#save_token_form").submit(function(e){
		e.preventDefault();
		var slack_url = "https://" + $("#slack_url").val() + ".slack.com/api/users.admin.invite";
		$.ajax({ //sending invitation to slack
			url: slack_url, //'https://slackinvite.slack.com/api/users.admin.invite',  
			type: 'POST',
			data: {
				token: $("#slack_token").val(),//'xoxp-7491394935-7491752069-7491000672-c6311f,
				set_active: 'false',
			},
			success:function(data){
				console.log(data);
				if(data.error =="no_perms" || data.error =="invalid_auth"){
					alert("This is not a valid Slack Token. Please login to slack as administrator and than pick up the token");
					return false;
				}else{
					 $("#save_token_form")[0].submit();
				}
			}
		});
	});
});
</script>

<?php require("sia-footer.php"); ?>