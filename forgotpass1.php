<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
    <div class="login-page">
    <div class="form">
    <form class="login-form" action="forgotpass2.php" method="POST">
    <center><h2 style="font-family:  Arial; color: #36648B">Enter Email-Id To Recove Password</h2></center>
      <input type="text" placeholder="Email Id" name="email" id="email" required="required" />
      <select name="usertype">
      <option selected disabled>Select User Type</option>
      <option value="student">Student</option>  
      <option value="faculty">Faculty</option>
      </select>
      <input type="submit" name="submit" id="submit" value="SEND MAIL">
      <tr>
      <td><p class="message"><a href="login.php">Back to LogIn</a></p></td>
      </tr>
    </form>
  </div>
</div>

</body>
</html>