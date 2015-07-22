<link rel="stylesheet" href="../css/tablestyle.css">
<script type="text/javascript" src="../js/settings.js"></script>
<script src="../js/jquery-1.11.3.min.js" /></script>
<link rel="stylesheet" type="text/css" href="../css/buttonstyle.css" />
<?php 
	//display notification email ids with status
include '../functions/connections.php';
	try{		
			echo"<form method='post' name='notificationform'>
			<table >
			<tr><th>Name</th><th>Email</th><th>Change Status</th></tr>";
			
			$sqlon="select * from `notification_emails` ";
			$rs=$conn->query($sqlon);
			$rs->setFetchMode(PDO::FETCH_ASSOC);
			while($result=$rs->fetch()){
				$name=$result['name'];
				$email=$result['email'];
				$status=$result['status'];
				echo "
				<tr>	<td>".$name."</td>
				<td >".$email."</td>
				<td>";
				if($status=='on'){
					echo"<div class='switch_options'>
						<span class='switch_enable'> ON </span>
						<span class='switch_disable'> OFF </span>
						<input type='hidden' class='switch_val' value='1'/>
						<input type='hidden' class='email_val' value=".$email."/>
					</div>";
				}
				else{
					echo "<div class='switch_options'>
						<span class='switch_enable'> ON </span>
						<span class='switch_disable'> OFF </span>
						<input type='hidden' class='switch_val' value='0'/>
						<input type='hidden' class='email_val' value=".$email."/>
					</div>";					
				}
				echo"</td>
			</tr>";
			}
			
			echo "</table></form>";
		}catch(PDOException $e){echo $e;}
?>