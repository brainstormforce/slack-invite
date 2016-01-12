<?php require("header.php"); 
if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['notification_email']) && !empty($_POST['notification_email']) ){
	$sia_obj ->add_new_notfication_email($_POST['name'],$_POST['notification_email']);
	header("Location: set_new_emails.php");
}
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

<?php require("footer.php"); ?>