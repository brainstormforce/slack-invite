<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/datatables/jquery.dataTables.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/invitees.js">
<?php require 'inc/views/template_head_end.php'; 
 require 'inc/views/base_head.php'; 
    $data;
    include 'adminfunctions/header.php';
    try {
        //myconn();
        $sql = 'SELECT *   FROM members';
        $sql_slack = 'SELECT *   FROM  slack_settings';
        $q = $conn->query($sql); //select rows
        $q_slack = $conn->query($sql_slack);
        $q_slack->setFetchMode(PDO::FETCH_ASSOC); //retrieve in resultset $q_slack
        $q->setFetchMode(PDO::FETCH_ASSOC); //retrieve in resultset $q
        
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

            $slc=$q_slack->fetch();
             $url=$slc['url'];
             $token=$slc['token'];
            
                if(1){
                
            ?>
            <link rel="stylesheet" href="../assets/css/style.css" >
            <script src="../assets/js/invitees.js"></script>
<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                DataTables <small>Tables transformed with dynamic features. Powered by DataTables.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Tables</li>
                <li><a class="link-effect" href="">DataTables</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Dynamic Table <small>Full</small></h3>
        </div>
        <form method="post" name="invite" class="invite_form">
            <input type="hidden" name="url" class="slc_url" value="<?php echo $url; ?>">
            <input type="hidden" name="token" class="slc_token" value="<?php echo $token; ?>">
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
                    <?php while ($r = $q->fetch()):?>
                        <?php $member_id=  htmlspecialchars($r['member_id']);?>
                    <tr id="<?php echo $member_id; ?>">
                        <td class="text-center"><img src="avatar9.jpg" width="38" height="38"/></td>
                        <td class="font-w600 manage-column convert-plug"><?php echo htmlspecialchars($r['name']);?></td>
                        <td class="hidden-xs"><?php echo htmlspecialchars($r['email']); ?></td>
                        <td class="hidden-xs">
                            <?php echo htmlspecialchars($r['contact']); ?>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                 <?php 
                                $status=htmlspecialchars($r['status']);
                                $email=htmlspecialchars($r['email']);
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
                    <?php endwhile; } ?>
                </tbody>
            </table>
            </div>
            </form>
            
        </div>
    </div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/datatables/jquery.dataTables.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_tables_datatables.js"></script>

<?php require 'inc/views/template_footer_end.php'; ?>