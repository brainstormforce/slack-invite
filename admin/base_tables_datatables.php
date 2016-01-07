<?php require('header.php');?>
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/datatables/jquery.dataTables.min.css">
<link rel="stylesheet" href="../assets/css/style.css" >

<script rel="stylesheet" src="assets/js/jquery-1.11.3.min.js"></script>
<script src="../assets/js/invitees.js"></script>
          
<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Invitees Table <small>Table Shows Users Who have requested to join slack</small>
            </h1>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block">
        <form method="post" name="invite" class="invite_form">
			<?php $get_result = $slack_obj ->get_slack_token_url(); ?>
            <input type="hidden" name="url" class="slc_url" value="<?php if(isset($get_result['url']) && !empty($get_result['url'])){ echo $get_result['url']; } ?>">
            <input type="hidden" name="token" class="slc_token" value="<?php if(isset($get_result['token']) && !empty($get_result['token'])){ echo $get_result['token']; } ?>">
        <div class="block-content">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
            <table class="table table-bordered table-striped js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center"></th>
                        <th>Name</th>
                        <th class="hidden-xs">Email</th>
                        <th class="hidden-xs" style="width: 15%;">Contact</th>
                        <th class="text-center" style="width: 10%;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
					$get_invitees_result = $slack_obj ->get_invities(); 
					while ($r = $get_invitees_result->fetch()):
                        $member_id=  htmlspecialchars($r['member_id']); 
						$email=htmlspecialchars($r['email']);
					?>
						<tr id="<?php echo $member_id; ?>">
                        <td class="text-center">
                            <?php
                                $size = 40;
                                $grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=mm&s=" . $size;
                            ?>
                            <img src="<?php echo $grav_url; ?>" alt="" />
                        </td>
                        <td class="font-w600 manage-column convert-plug"><?php echo htmlspecialchars($r['name']);?></td>
                        <td class="hidden-xs"><?php echo htmlspecialchars($r['email']); ?></td>
                        <td class="hidden-xs">
                            <?php echo htmlspecialchars($r['contact']); ?>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                 <?php 
                                $status=htmlspecialchars($r['status']);
                                if($status=='invited'){
                                    echo"<i class='fa fa-check-square-o'></i> Invited";
                                }
                                else if($status == 'already_in_team' ){
                            
                                    echo"<i class='fa fa-check-square-o'></i> Invited";
                                }
                                else if($status == 'already_invited' ){
                                    
                                    echo"<i class='fa fa-check-square-o'></i> Invited";
                                }
                                else if($status == 'declined' ){
                                    
                                    echo "<i class='fa fa-ban'></i> Declined";
                                }
                                else{
                                    echo "<div class='".$member_id." status '>
                                    <button type='submit' class='btn btn-default send_invitation' data-toggle='tooltip' title='Send Invitation' name='invitebtn' value=".$email."> <i class='fa fa-check-circle'></i></button>";
                                    echo "<button type='button' class='btn btn-default decline' data-toggle='tooltip' title='Decline Member' name='declinebtn' value=".$email." > <i class='fa fa-ban'></i></button></div>";
                                }
                                ?>
                            </div>
                        </td>
                    </tr>
                    <?php endwhile;  ?>
                </tbody>
            </table>
        </div>
        </form>
            
    </div>
</div>
<!-- END Page Content -->

<?php require("footer.php"); ?>
<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/datatables/jquery.dataTables.min.js"></script>
<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_tables_datatables.js"></script>