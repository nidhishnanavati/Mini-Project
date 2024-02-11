<?php
ini_set('display_errors',0);
?>


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

if($utype=="student"){
  $sql1= "SELECT * FROM student_info WHERE student_id='$uid' OR mobile_no='$mob' OR email_id='umail'";
	// if(preg_match("/^[F]{1}[I]{1}[T]{1}[0-9]{3}$/",$uid)){
	// echo "<script>alert('invalid format');
	//  window.location.replace('reg.php');</script>";
	//}
  }
else if($utype=="faculty"){
 
 $sql1= "SELECT * FROM faculty_info WHERE faculty_id='$uid' OR mobile_no='$mob' OR email_id='umail'";
	// if (preg_match("/^[0-9]{2}[A-Z a-z]{2}[0-9]{3}$/",$uid)) {
	// echo "<script>alert('invalid format');
	// window.location.replace('reg.php');</script>";
 // }
}
$res=mysqli_query($conn, $sql1);
if(mysqli_num_rows($res)>0)
{
  //header('Location: reg.php' );
  echo"<script>alert('User Or Mobile No. Or Email ID Already Exist');
  window.location.replace('reg.php');</script>";  
}
else
{
if($utype=="student"){
  if(preg_match("/^[F]{1}[I]{1}[T]{1}[0-9]{3}$/",$uid)){
  echo "<script>alert('ID Format and User Type Does Not Match');
   window.location.replace('reg.php');</script>";}
   else{
        $sql = "INSERT INTO student_info (student_id,student_name,mobile_no,email_id,password) VALUES ('$uid','$uname','$mob','$umail','$pass')";
      }
 }
else if($utype=="faculty"){
  if (preg_match("/^[0-9]{2}[A-Z a-z]{2}[0-9]{3}$/",$uid)) {
  echo "<script>alert('ID Format and User Type Does Not Match');
  window.location.replace('reg.php');</script>";
 }
 else{
      $sql = "INSERT INTO faculty_info (faculty_id,faculty_name,mobile_no,email_id,password) VALUES ('$uid','$uname','$mob','$umail','$pass')";
    }
}
if (mysqli_query($conn, $sql)) {
    echo"<script>alert('Registered Successfully');
  window.location.replace('login.php');</script>";
} else {
    //echo "Could not Register";
	echo"<script>alert('Could not Register')</script>";
   //header('Location: reg.php' );
}
}
}
}
?>


<?php
include("h2.php");
?>

<html>
<head>

<script>


function checkForm() { 
// Fetching values from all input fields and storing them in variables.
var uid = document.getElementById("userid").value;
var name = document.getElementById("username").value;
var password1 = document.getElementById("password").value;
var email1 = document.getElementById("email").value;
var mob = document.getElementById("mob").value;
var conpassword = document.getElementById("conpass").value;

//Check input Fields Should not be blanks.
    if (uid == '' || name == '' || password1 == '' || email1 == '' || conpassword == '' || mob == '') {
      alert("Fill All Fields");
      } 
  else {
//Notifying error fields 
var uid1 = document.getElementById("userid1").innerHTML;
var user1 = document.getElementById("username1").innerHTML;
var pass1 = document.getElementById("password1").innerHTML;
var email2 = document.getElementById("email1").innerHTML;
var mob2 = document.getElementById("mob1").innerHTML;
var conpass2 = document.getElementById("conpass1").innerHTML;
        if (uid1 == 'Must Be in Format. Ex Student: 15IT065 Faculty: FIT001' || user1== 'Must be 3+ letters' || pass1 == 'Password too short' || email2 == 'Invalid email' || mob2 == 'Invalid mob' || conpass2 == 'Must be same as Password') {
        alert("Please enter Valid Information");
        } else {
        //Submit Form When All values are valid.
        document.getElementById("myForm").submit();
        }
  }
}
// AJAX code to check input field values when onblur event triggerd.
function validate(field, query) {
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState != 4 ) {
document.getElementById(field).innerHTML = "Validating..";
} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = xmlhttp.responseText;
} else {
document.getElementById(field).innerHTML = "Error Occurred. <a href='reg.php'>Reload Or Try Again</a> the page.";
}
}
xmlhttp.open("GET", "validation.php.?field=" + field + "&query=" + query, false);
xmlhttp.send();
}

</script>
<style type="text/css">
#myForm div{
color:red;
font-size:14px
}
</style>

<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>

<body>
<center></center>
<div class="login-page">
  <div class="form">
  <div id="mainform">
<div class="innerdiv">
  <h2 style="font-family:  Arial; color: #36648B">Registration Form</h2><br>
    <form id="myForm" name="myForm" class="login-form" action="reg.php" method="POST" > 
      <table>
      <tr>
      <td><input type="text" placeholder="User ID" name="userid" id="userid" onblur="validate('userid1', this.value)" required/></td>
      <td><div id='userid1'></div></td>
      </tr>
      
      <tr>
      <td><input type="text" placeholder="Username" name="username" id="username" pattern="^[a-zA-Z][a-zA-Z\s0-9-_\.]{3,20}" onblur="validate('username1', this.value)" required /></td>
      <td><div id='username1'></div></td>
      </tr>

      <tr>
      <td><input type="text" placeholder="Mobile Number" pattern="^[0-9]{10}" name="mob" id="mob" onblur="validate('mob1', this.value)" required/></td>
      <td><div id='mob1'></div></td>
      </tr>

      <tr>
      <td><input type="email" placeholder="Email" name="email" id="email" onblur="validate('email1', this.value)" required/></td>
      <td><div id='email1'></div></td>
      </tr>

      <tr>
      <td>
      <select name="usertype" required>
      <option selected disabled>Select User Type</option>
      <option value="student">Student</option>  
      <option value="faculty">Faculty</option>
      </select>
      </td>
      </tr>

      <tr>
      <td><input type="password" placeholder="Password" name="password" id="password" onblur="validate('password1', this.value)" required/></td>
      <td><div id='password1'></div></td>
      </tr>
      <tr>
      <td><input type="password" placeholder="Confirm Password" name="conpass" id="conpass" onblur="validate('conpass1', this.value)" required/></td>
      <td><div id='conpass1'></div></td>
      </tr>

      <tr>
      <td><input type="submit" name="submit" id="login_btn" onclick="checkForm()" value="REGISTER HERE"> 
      <!-- <input onclick="checkForm()" type='button' name="submit" id="login_btn" value='Register Here'> --></td>
      </tr>
      <tr>
      <td><p class="message"><a href="login.php">Back to LogIn</a></p></td>
      </tr>

      <!-- <tr>
      <td><div id="abc"> </div></td>
      </tr> -->
      
    </table>
    </form>
  </div>
</div>
</div>
</div>

</body>
</html>

