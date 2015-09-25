<link rel="stylesheet" href="../../assets/css/tablestyle.css" />
<link rel="stylesheet" type="text/css" href="../../assets/css/buttonstyle.css" />

<?php 
	// This file will be called from settings.php
	//display notification email ids with status
	
	include '../functions/connections.php';
	try{		
			echo"<form method='post' name='notificationform'>
			<table class='tablemain'><thead><tr class='column-provider'><th>Name</th><th>Email</th><th>status</th><th>Action</th></tr></thead>
			";
			
			$sqlon="select * from `notification_emails` ";
			$rs=$conn->query($sqlon);
			$rs->setFetchMode(PDO::FETCH_ASSOC);
			while($result=$rs->fetch()){
				$name=$result['name'];
				$email=$result['email'];
				$status=$result['status'];
				echo "
				<tr>	
				<td>".$name."</td>
				<td >".$email."</td>
				<td>";
				// Display emails with  on status
				if($status=='on'){
					echo"<div class='switch_options'>
						<span class='switch_enable'> ON </span>
						<span class='switch_disable'> OFF </span>
						<input type='hidden' class='switch_val' value='1'/>
						<input type='hidden' class='email_val' value=".$email."/>
					</div>";
				}
				// Display emails with off status 
				else{
					echo "<div class='switch_options'>
						<span class='switch_enable'> ON </span>
						<span class='switch_disable'> OFF </span>
						<input type='hidden' class='switch_val' value='0'/>
						<input type='hidden' class='email_val' value=".$email."/>
					</div>";					
				}
				echo"</td><td><input class='delete_email' type='checkbox' value='".$email."'> Delete</td>
			</tr>";
			/*<td><div class='delete_email' value='".$email."'><i class='fa fa-trash-o '> </i>Delete</td>*/
			}
			
			echo "</table></form>";
		}catch(PDOException $e){echo $e;}
?>