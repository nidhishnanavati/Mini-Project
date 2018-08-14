<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_master";
  session_start();
require_once("class/dbo.class.php");

  
  $uid = $_SESSION['f_id'];
  $pass = $_SESSION['f_pass'];


  $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "SELECT * from faculty_info WHERE faculty_id= '$uid' AND password='$pass' ";
$uname="faculty_name";



$result=mysqli_query($conn, $sql1);
$row=mysqli_num_rows($result);
if($row == 0){
  header('Location: login.php');
}
$res = $db->get($sql1);


?>
<!-- Header -->


<link href="css2/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css2/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css2/appointment_style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css2/font-awesome.css" rel="stylesheet">


<?php
foreach($res as $value){ 
?>

<!-- header -->

<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

  <div class="header" id="home">
    <div class="top_menu_w3layouts">
<div class="container">
      <div class="header_left">
        <ul>
          <li><i class="fa fa-map-marker" aria-hidden="true"></i> BVM Engineering College,Vidyanagar</li>
          <li><i class="fa fa-phone" aria-hidden="true"></i> 02692 230 104 </li>
          <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">quiz_master@bvmengineering.com</a></li>
        </ul>
      </div>
      <div class="header_right">
        <ul class="forms_right">
          <li style="color: white"><?php echo $value[$uname]; ?></li>
          <li>&nbsp;&nbsp;&nbsp;</li>
          <li><a href="login.php"> Log Out</a> </li>
        </ul>

      </div>
      <div class="clearfix"> </div>
      </div>
    </div>

    <div class="content white">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
            <a class="navbar-brand" href="">
              <h1><span class="fa fa-users" aria-hidden="true"></span>&nbsp;Quiz Master </h1>
            </a>
          </div>
          <!--/.navbar-header-->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <nav>
              <ul class="nav navbar-nav">
                <li><a href="home_fac.php">Home</a></li>
                <li><a href="qbank_sel.php" class="active">Question Banks</a></li>            
                <li><a href="history_details_fac.php">History Details</a></li>
                <li><a href="about_stud.php">About Us</a></li>
              </ul>
            </nav>
          </div>
          <!--/.navbar-collapse-->
          <!--/.navbar-->
        </div>
      </nav>
    </div>
  </div>
<?php
}
?>
 <!-- /Header-->

<html>
	<link rel="icon" type="image/png" href="images_table/icons/favicon.ico"/>
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="table_css/vendor_table/bootstrap/css/bootstrap.min.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_css/fonts_table/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_css/vendor_table_table/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_css/vendor_table/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_css/vendor_table/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_css/css_table/util.css">
	<link rel="stylesheet" type="text/css" href="table_css/css_table/main.css">

<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "quiz_master";

	require_once("class/dbo.class.php");
	
	$item = "select * from toc_qbank";
	$res = $db->get($item);
?>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<center><h2 style="color: white">TOC Question Bank</h2></center><br>
					<table border="2">
					<thead>
					<tr class="table100-head">
					<th class="column1">ID</th>
					<th class="column2">Question</th>
					<th class="column3">(A)</th>
					<th class="column4"><center>(B)</center></th>
					<th class="column5"><center>(C)</center></th>
					<th class="column6"><center>(D)</center></th>
					<th class="column7"><center>Answer</center></th>
					<th colspan="2" class="column8"><center>Action</center></th>
					</tr>
					</thead>
<?php
foreach($res as $value){ 
?>
	<tbody>

	<tr>
	<td class="column1"> 
	<?php echo $value['id']; ?>
	</td>
	<td class="column2"> 
	<?php echo $value['questions']; ?>
	</td>
	<td class="column3"> 
	<?php echo $value['opa']; ?>
	</td>
	<td class="column4"> 
	<?php echo $value['opb']; ?>
	</td>
	<td class="column5"> 
	<?php echo $value['opc']; ?>
	</td>
	<td class="column6"> 
	<?php echo $value['opd']; ?>
	</td>
	<td class="column7"> 
	<?php echo $value['ans']; ?>
	</td>

	<td class="column8">
	<?php echo "<a href=delete_toc.php?id=".$value['id']." onclick='return myFunction()'>Remove</a>"; ?> 
	</td>
	</tr>
<?php
}
?>
<thead>
<tr class="table100-head">
	<th colspan="9" rowspan="5" align="center"  class="column1">
	<?php echo "<a href=addque.php style='color:white;'><center>Click Here to Add Question</center></a>"; ?>
	</th>
	</tr> 
</thead>
	</tbody>
</table>
</div>
</div>
</div>
</div>

<script>
function myFunction()
{
  var x = confirm("Are you sure you want to delete?");
  if (x)
      return true;
  else
    return false;
}

</script>

</html>

<?php
include("f1.php");

?>
