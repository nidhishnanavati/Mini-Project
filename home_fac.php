
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
/*if($row == 0){
  echo"<script>alert('Not A Valid User !');
  window.location.replace('login.php');</script>";
}*/
$res = $db->get($sql1);

?>

<!-- Header -->


<link href="cssd/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="cssd/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="cssd/appointment_style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="cssd/font-awesome.css" rel="stylesheet">


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
                <li><a href="home_fac.php" class="active">Home</a></li>
                <li><a href="qbank_sel.php">Question Banks</a></li>               
                <li><a href="history_details_fac.php">History Details</a></li>
                <li><a href="about_fac.php">About Us</a></li>
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



<center><div><img src="images/bg.jpg" height="65%" width="100%"/></div></center>

<?php
include("f1.php");

?>