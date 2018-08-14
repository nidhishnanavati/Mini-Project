<?php
//<?php
//include("login.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_master";

session_start();
	
if(isset($_POST['submit'])){

 	$uid = $_POST["userid"];
 	$pass = $_POST["password"];
 	$utype = $_POST["usertype"];
	
	$con=mysqli_connect($servername,$username,$password,$dbname);
		
	
 	if($utype=="student")
 	{
		$query="Select * from student_info where student_id='$uid' and password='$pass'";
		$out=mysqli_query($con,$query);
		$rc=mysqli_num_rows($out);
		if($rc!=1)
		{
		echo"<script>alert('Hello')</script>";
		//include("login.php");
		}	
		else
		{
 		header('Location: home_fac.php' );
 		
 		$_SESSION["f_id"]=$uid;
 		$_SESSION["f_pass"]=$pass;
		}
	}
 	elseif($utype=="faculty")
 	{
		$query="Select * from faculty_info where faculty_id='$uid' and password='$pass'";
		$out=mysqli_query($con,$query);
		$rc=mysqli_num_rows($out);
		if(rc!=1)
		{
		echo"<script>alert('Wrong username or password')<script>";
		header('Location: login.php' );
		}
 		header('Location: home_stud.php' );
 	
 		$_SESSION["s_id"]=$uid;
 		$_SESSION["s_pass"]=$pass;
 	}
 	

}
 	
?>