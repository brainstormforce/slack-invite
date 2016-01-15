<?php
require("sia-header.php");
?>
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Dashboard
            </h1>
        </div>
    </div>
</div>
<div class="content">
	<?php
	$invitees = $sia_obj->get_invities();
	//if(chk_result_if_empty($invitees) > 0){
	?>
	<a href="sia-invitees.php">
		<div class="dashboard-block">
			<div class="dashboard-block-title">
				Total Invitees
			</div>
			<div class="dashboard-block-content">
				<?php echo chk_result_if_empty($invitees);?>
			</div>
		</div>
	</a>
	<?php
	//}
	?>
</div>
<?php
require("sia-footer.php");
?>
