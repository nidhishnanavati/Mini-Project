<?php

mysql_connect("localhost","root","");
mysql_select_db("quiz_master");
$email=$_REQUEST["email"];
$utype=$_REQUEST["usertype"];

if($utype=='student'){
  $query=mysql_query("select * from student_info where email_id='$email'");
}
else{
  $query=mysql_query("select * from faculty_info where email_id='$email'");
}
$row=mysql_fetch_array($query);

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "brijeshnasit7@gmail.com";
  $mail->Password = "9537871595";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "brijeshnasit7@gmail.com";
  $mail->FromName = "Quiz Master";
   
  $mail->addAddress($row["email_id"]);
  
  $mail->isHTML(true);
 
  $mail->Subject = "Your Recovered Password";
  $mail->Body = "<i>Your password is:</i>".$row["password"];
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
   //echo "Message has been sent successfully";
   header("Refresh:0; url=login.php");
  }
?>

<!DOCTYPE html>
<html>
<body>
	<br><br>
	<a href="login.php">Back to LogIn</a>
</body>
</html>


