<link rel="stylesheet" type="text/css" href="table_css/fonts_table/font-awesome-4.7.0/css/font-awesome.min.css">



<?php

ini_set('display_errors',0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_master";

if(isset($_POST['submit'])){
 $sub = $_POST["subject"];
 $que = $_POST["question"];
 $opa = $_POST["opa"];
 $opb = $_POST["opb"];
 $opc = $_POST["opc"];
 $opd = $_POST["opd"];
 $ans = $_POST["answer"];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($sub=="toc"){
  $sql = "INSERT INTO toc_qbank (questions,opa,opb,opc,opd,ans) VALUES ('$que', '$opa', '$opb', '$opc', '$opd', '$ans')";
}
elseif($sub=="se"){
  $sql = "INSERT INTO se_qbank (questions,opa,opb,opc,opd,ans) VALUES (`$que`, `$opa`, `$opb`, `$opc`, `$opd`, `$ans`)";
}


if (mysqli_query($conn, $sql)) {
    echo "<script>alert('New Question Added Successfully')</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



}
?>


<html>
<head>

<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>

<body>

<div class="login-page">
  <div class="form">
  <div id="mainform">
<div class="innerdiv">
  <h2 style="font-family:  Arial; color: #36648B">Add Question</h2>
    <form id="myForm" name="myForm" class="login-form" action="addque.php" method="POST" > 
      <table>

      <tr>
      <td>
      <select name="subject" required>
      <option selected disabled>Select Subject</option>
      <option value="toc">TOC</option>  
      <option value="se">SE</option>
      </select>
      </td>
      </tr>

      <tr>
      <td><input type="text" placeholder="Type Question" name="question" id="question" required/></td>
      </tr>
      
      <tr>
      <td><input type="text" placeholder="Option (A)" name="opa" id="opa" required /></td>
      </tr>

      <tr>
      <td><input type="text" placeholder="Option (B)" name="opb" id="opb" required/></td>
      </tr>

      <tr>
      <td><input type="text" placeholder="Option (C)" name="opc" id="opc" required/></td>
      </tr>

      <tr>
      <td><input type="text" placeholder="Option (D)" name="opd" id="opd" required/></td>
      </tr>

      <tr>
      <td>
      <select name="answer" required>
      <option selected disabled>Select Answer</option>
      <option value="(a)">(A)</option>  
      <option value="(b)">(B)</option>
      <option value="(c)">(C)</option> 
      <option value="(d)">(D)</option> 
      </select>
      </td>
      
      </tr>

      <tr>
      <td><!--<button type="submit" name="submit" id="login_btn" onclick="checkForm()">REGISTER</button></td>-->
      <input type='submit' name="submit" id="login_btn" value='Add Question'>
      </tr>
      <tr>
      <td><p class="message" style="color: black">Go To : <a href="display_toc.php">TOC Question Bank</a></p></td>
      </tr>
      <tr>
      <td><p class="message">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="display_se.php">SE Question Bank</a></p></td>
      </tr>
    </table>
    </form>
  </div>
</div>
</div>
</div>

</body>
</html>

