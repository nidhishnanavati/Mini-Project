<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_master";
//$err=0;


  if(isset($_POST['submit'])){
 $uid = $_POST["userid"];
 $uname = $_POST["username"];
 $umail = $_POST["email"];
 $utype = $_POST["usertype"];
 $pass = $_POST["password"];
 $mob = $_POST["mob"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1= "SELECT * FROM reg_info WHERE userid='$uid'";
$res=mysqli_query($conn, $sql1);
if(mysqli_num_rows($res)>0)
{
  //header('Location: reg.php' );
  echo "<script>alert('User Already Exist')</script>";
  
}
else
{

$sql = "INSERT INTO reg_info (userid,username,mobile_no,email_id,user_type,password) VALUES ('$uid','$uname','$mob','$umail','$utype','$pass')";

if (mysqli_query($conn, $sql)) {
    header('Location: reg.php' );
} else {
    echo "Could not Register";
    header('Location: reg.php' );
}
}

  
}


?>