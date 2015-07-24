<link rel="stylesheet" href="../../assets/css/tablestyle.css">
<script type="text/javascript" src="../../assets/js/settings.js"></script>
<script src="../../assets/js/jquery-1.11.3.min.js" /></script>
<link rel="stylesheet" type="text/css" href="../../assets/css/buttonstyle.css" />
<?php 
	//display notification email ids with status
include '../../functions/connections.php';
	try{		
			echo"<form method='post' name='notificationform'>
			<table >
			";
			
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