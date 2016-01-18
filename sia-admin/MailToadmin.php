<?php
include 'connections.php';
echo $name=$_POST['user'];
echo $password=$_POST['pass'];
echo $email = $_POST['email'];

//multiple emails
error_reporting(E_STRICT | E_ALL);

date_default_timezone_set('Etc/UTC');

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$body = "Admin is added with username: ".$name." and and password: ".$password." please login using the given password!!!!";

$mail->isSMTP();
$mail->Host = 'email-smtp.us-east-1.amazonaws.com';
$mail->SMTPAuth = true;
$mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
$mail->Port = 587;
$mail->Username = 'AKIAJSGXEMDO7XF263NA';
$mail->Password = 'ApRz3QVxkWwaEAKvBZnhEkBS6S9HGZXEylwp5SyHizW4';
$mail->setFrom('do-not-reply@bsf.io', 'Brainstorm Force');
//$mail->addReplyTo('list@example.com', 'List manager');

$mail->Subject = "New Member entry";

//Same body for all messages, so set this before the sending loop
//If you generate a different body for each recipient (e.g. you're using a templating system),
//set it inside the loop
$mail->msgHTML($body);
//msgHTML also sets AltBody, but if you want a custom one, set it afterwards
$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';

//Connect to the database and select the recipients from your mailing list that have not yet been sent to
//You'll need to alter this to match your database
			$count=0;
			$sql="select * from `user_admin` WHERE `email`='".$email."'";
			$rs=$conn->query($sql);
			$rs->setFetchMode(PDO::FETCH_ASSOC);
			while($result=$rs->fetch()){
				$mail->addAddress($result['email'], $result['username']);
		 		if (!$mail->send()) {
		        	echo "Mailer Error " . $mail->ErrorInfo . '<br />';
		        	break; //Abandon sending
		   		 } else {	
		        $count++;
        //Mark it as sent in the DB
				}
    // Clear all addresses and attachments for next loop
    $mail->clearAddresses();
    $mail->clearAttachments();
}
 echo "Message sent to ".$count." member(s)";
?>