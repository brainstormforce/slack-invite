<?php session_start(); if(isset($_SESSION['login_user'])){
 require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>/js/plugins/datatables/jquery.dataTables.min.css">
<script rel="stylesheet" src="assets/js/jquery-1.11.3.min.js"></script>
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
                
            ?>
            <link rel="stylesheet" href="../assets/css/style.css" >
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
                        <?php $member_id=  htmlspecialchars($r['member_id']); $email=htmlspecialchars($r['email']);?>
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

<?php  require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>

<!-- Page JS Plugins -->
<script src="<?php echo $one->assets_folder; ?>/js/plugins/datatables/jquery.dataTables.min.js"></script>

<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_tables_datatables.js"></script>

<?php require 'inc/views/template_footer_end.php';
 } else{ header("Location: ../admin/index.php"); }
  ?>