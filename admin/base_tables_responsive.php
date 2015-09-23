<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>
<?php
session_start();
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
            
                if(isset($_SESSION['login_user'])){
                
            ?>
            <link rel="stylesheet" href="../assets/css/style.css" >
            <script src="../assets/js/invitees.js"></script>
<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">
                Responsive Tables <small>Mobile friendly tables that work across all screen sizes.</small>
            </h1>
        </div>
        <div class="col-sm-5 text-right hidden-xs">
            <ol class="breadcrumb push-10-t">
                <li>Available users Table</li>
                <li><a class="link-effect" href="">Responsive</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- Full Table -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Available Users</h3>
        </div>
        <div class="block-content">
            <p class="push-30">The first way to make a table responsive,  all data will be accessible on smaller screens (&lt; 768px).</p>
            <div class="table-responsive">
            <form method="post" name="invite" class="invite_form">
            <input type="hidden" name="url" class="slc_url" value="<?php echo $url; ?>">
            <input type="hidden" name="token" class="slc_token" value="<?php echo $token; ?>">
                <table class="table table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 120px;"><i class="si si-user"></i></th>
                            <th>First Name</th>
                            <th style="width: 30%;">Email</th>
                            <th style="width: 15%;">Contact</th>
                            <th class="text-center" style="width: 100px;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($r = $q->fetch()):?>
                        <?php $member_id=  htmlspecialchars($r['member_id']);?>
                        <tr id="<?php echo $member_id; ?>" class="rowp">
                            <td  class="text-center">
                                <?php $one->get_avatar(0, 'female', 48); ?>
                            </td>
                            <td class="font-w600 manage-column convert-plug"><?php echo htmlspecialchars($r['name']);?></td>
                            <td><?php echo htmlspecialchars($r['email']); ?></td>
                            <td>
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
                                    <button type='submit' class='btn btn-default send_invitation' name='invitebtn' value=".$email."> <i class='fa fa-check-circle'></i></button>";
                                    echo "<button type='button' class='btn btn-default decline' name='declinebtn' value=".$email." > <i class='fa fa-ban'></i></button></div>";
                                }
                                ?>
                                </div>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                </form>
            </div>
        </div>
    </div><?php } ?>
    <!-- END Full Table -->
</div>
<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>
<?php require 'inc/views/template_footer_end.php'; ?>