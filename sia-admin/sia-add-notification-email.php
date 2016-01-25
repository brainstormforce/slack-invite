<?php require("sia-header.php"); 
if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['notification_email']) && !empty($_POST['notification_email']) ){
	$res = $sia_obj ->add_new_notfication_email($_POST['name'],$_POST['notification_email']);
	if($res == "exist"){
		header("Location: sia-add-notification-email.php?exs=yes");	
	}else{
		header("Location: sia-email-list.php");	
	}
	
}
//Client ID : 3989206462.18566968566
//Client Secret : f08ab3897febf32b0ac752f9cb8562c4
?>

<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Add New User <small>Add new user whose gonna receive notifications</small>
            </h1>
        </div>
    </div>
</div>


<div class="content">
    <div class="block">
		<div class="row">
			<div class="col-sm-7" style="margin-bottom:0">
				<form class="email_form form-inline" role="form"  method="post">
					<?php
					if (isset($_GET['exs']) && !empty($_GET['exs'])) {
					?>
					<p style="color:red;">Provided email is already in use. Please choose another.</p> 
					<?php	
					}
					?>
					
					<table>
						<tr>
							<td>
								<div class="form-group">
									<input type="text" class="form-control name"  name="name" placeholder="Add Name" required>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<input type="email" class="form-control email"  name="notification_email" placeholder="Add another email" required>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="form-group">
									<input type="submit" class="btn btn-default " id="exampleinput2" name="add_notification_email" value="Add Email">
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