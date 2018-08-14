<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_master";

require_once("class/dbo.class.php");
  
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$my_id=$_GET['id'];
$query = "SELECT * FROM toc_qbank WHERE id='$my_id'";
$res1 = $db->get($query);

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
  <h2 style="font-family:  initial;">Add Question</h2>
    <form id="myForm" name="myForm" class="login-form" action="updateaction.php" method="POST" > 
      <?php foreach($res1 as $value){ ?>

      <table>

      <tr>
      <td>
      <select name="subject">
      <option selected disabled>Select Subject</option>
      <option value="toc">TOC</option>  
      <option value="se">SE</option>
      </select>
      </td>
      </tr>

      <tr>
      <td><input type="text" placeholder="Type Question" name="question" id="question" size="300" value=<?php echo $value['questions']; ?>/></td>
      </tr>
      
      <tr>
      <td><input type="text" placeholder="Option (A)" name="opa" id="opa" value=<?php echo $value['opa']; ?>/></td>
      </tr>

      <tr>
      <td><input type="text" placeholder="Option (B)" name="opb" id="opb" value=<?php echo $value['opb']; ?>/></td>
      </tr>

      <tr>
      <td><input type="text" placeholder="Option (C)" name="opc" id="opc" value=<?php echo $value['opc']; ?>/></td>
      </tr>

      <tr>
      <td><input type="text" placeholder="Option (D)" name="opd" id="opd" value=<?php echo $value['opd']; ?>/></td>
      </tr>

      <tr>
      <td><input type="text" placeholder="Answer" name="ans" id="ans" value=<?php echo $value['ans']; ?>/></td>
      </tr>

      <tr>
      <td><!--<button type="submit" name="submit" id="login_btn" onclick="checkForm()">REGISTER</button></td>-->
      <input type='submit' name="update" id="login_btn" value='Update Question'>
      </tr>
      <tr>
      <td><p class="message"><a href="display.php">Go To Display Page</a></p></td>
      </tr>
    
    </table>
    <?php
       }
    ?>
    </form>
  </div>
</div>
</div>
</div>

</body>
</html>