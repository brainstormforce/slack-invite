<?php require('header.php');?>

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
			<div class='display_token '>
				<?php
				$rs = $slack_obj ->get_all_slack_token_url();
				while($result=$rs->fetch()){
				?>
					<div class='block-header'><strong>Link : </strong><?php echo $result['url']; ?> </div>
					<div class='block-header'><strong>Token : </strong><?php echo $result['token']; ?></div>
				<?php
				}
				?>
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
			</div>
			<form  method='post' class='form display_token_edit' >
				<?php
				$rs = $slack_obj ->get_all_slack_token_url();
				while($result=$rs->fetch()){
				?>
					<div class='col-sm-9'>
						<label for='material-text'>You only need to change your Token Id !!! </label>
						<input type="text" class='form-control url form-control'  value="<?php echo $result['url'];?>" name='slack_url'/>
					</div>
					<div class='col-sm-9'>
						<label for='material-text'>Token id</label>
						<input type="text" class='form-control token' value="<?php echo $result['token']; ?>" name='slack_token'/>
					</div>
				<?php
				}
				?>
				<div class='col-sm-9' style='padding-top:10px;'>
					<input type='submit' class='btn btn-default' name='submitbtn' value='Submit'/>
				</div>
			</form>
			<div class='block-content' style='padding-top:10px;'>
				<button id='display_button' class='btn btn-default'>change</button>
				<br />
			</div>
		</div>
	</div>
</div>
<?php require 'footer.php'; ?>