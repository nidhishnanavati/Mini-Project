<?php
include("h2.php");
?>
<?php
//<?php
//include("login.php");
session_start();
$servername = "localhost";
$username = "root";
$password = "admin1234";
$dbname = "quiz_master";


	
if(isset($_POST['submit'])){

 	$uid = $_POST["userid"];
 	$pass = $_POST["password"];
 	$utype = $_POST["usertype"];
	
	$con=mysqli_connect($servername,$username,$password,$dbname);
		
	
 	if($utype=="faculty")
 	{
		$query="Select * from faculty_info  where faculty_id='$uid' and password='$pass'";
		$out=mysqli_query($con,$query);
		$rc=mysqli_num_rows($out);
		if($rc!=1)
		{
		echo"<script>alert('Wrong username or password')</script>";
		//	header('Location: login.php' );
		}	
		else if($rc==1)
		{
		$_SESSION["f_id"]=$uid;
 		$_SESSION["f_pass"]=$pass;	
 		header('Location: home_fac.php' );	
 		}
	}
 	else if($utype=="student")
 	{
		$query="Select * from  student_info where student_id='$uid' and password='$pass'";
		$out=mysqli_query($con,$query);
		$rc=mysqli_num_rows($out);
		if($rc!=1)
		{
		echo "<script>alert('Wrong username or password')</script>";
		//header('Location: home_stud.php' );
		}
		else if($rc==1)
		{
		$_SESSION["s_id"]=$uid;
 		$_SESSION["s_pass"]=$pass;
 		header('Location: home_stud.php' );
 		}
	}
 	

}
 	
?>

<!-- Header -->
<?php
//session_unset(); 

?>

<html>
<head>
<script src="js/jquery-1.10.2.min.js"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
		
<div class="login-page">
  <div class="form">
    <form class="login-form" action="login.php" method="POST">
    <center><h2 style="font-family:  Arial; color: #36648B">Log In</h2></center><br>
      <input type="text" placeholder="User Id" name="userid" id="userid" required />
      <select name="usertype">
      <option selected disabled="true">Select User Type</option>
      <option value="student" selected>Student</option>  
      <option value="faculty">Faculty</option>
      </select>
      <input type="password" placeholder="Password" name="password" id="password" required />
      <input type="submit" name="submit" id="login_btn" value="Log In">
      <p class="message"><a href="forgotpass1.php">Forgot Password?</a></p>
      <p class="message">Not registered? <a href="reg.php">Create an account</a></p>

    </form>
  </div>
</div>

</body>
</html>

