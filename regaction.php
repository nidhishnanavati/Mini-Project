<?php

$servername = "localhost";
$username = "root";
$password = "admin1234";
$dbname = "quiz_master";

if(isset($_POST['submit'])){
 $uid = $_POST["userid"];
 $uname = $_POST["username"];
 $umail = $_POST["email"];
 $utype = $_POST["usertype"];
 $pass = $_POST["password"];
 $cpass = $_POST["conpass"];
 $mob = $_POST["mob"];

 if($pass != $cpass)
 {
    echo "<script> alert('Confirm password did not match')</script>";
    header("Refresh:0; url=reg.php");
 }
 else{

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
/*
if($utype=="student"){
  $sql1= "SELECT * FROM student_info WHERE student_id='$uid'";
}
elseif($utype=="faculty"){
  $sql1= "SELECT * FROM faculty_info WHERE faculty_id='$uid'";
}
*/
$res=mysqli_query($conn, $sql1);
if(mysqli_num_rows($res)>0)
{
  //header('Location: reg.php' );
  echo "<h1>'User Already Exist'</h1>";
  
}
else
{
if($utype=="student"){
  $sql = "INSERT INTO student_info (student_id,student_name,mobile_no,email_id,password) VALUES ('$uid','$uname','$mob','$umail','$pass')";
}
else if($utype=="faculty"){
  $sql = "INSERT INTO faculty_info (faculty_id,faculty_name,mobile_no,email_id,password) VALUES ('$uid','$uname','$mob','$umail','$pass')";
}
if (mysqli_query($conn, $sql)) {
    header('Location: login.php' );
} else {
    echo"alert()Could not Register;
    header('Location: reg.php' );
}
}
}
}
?>