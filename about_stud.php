
<?php
$servername = "localhost";
$username = "root";
$password = "admin1234";
$dbname = "quiz_master";
  session_start();
require_once("class/dbo.class.php");

  
  $uid = $_SESSION['s_id'];
  $pass = $_SESSION['s_pass'];


  $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "SELECT * from student_info WHERE student_id= '$uid' AND password='$pass' ";
$uname="student_name";



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
                <li><a href="home_stud.php">Home</a></li>
                <li><a href="quiz_sel.php">Give Quiz</a></li>               
                <li><a href="history_details_stud.php">My History</a></li>
                <li><a href="about_stud.php" class="active">About Us</a></li>
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

<center>

<div class="team">
  <div class="container">
    <h3 class="heading-agileinfo">Our Team<span>We build websites that will build your business</span></h3>
    <div class="teamgrids">
      <div class="col-md-3 teamgrid1">
        <img src="css3/images/t1.jpg" class="img-responsive" alt="" />
        <div class="teaminfo">
          <h3>Brijesh Nasit</h3>
          <!-- <div class="team-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
          </div> -->
          <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i>BACK END DEVELOPER</p>
          <p><i class="fa fa-phone" aria-hidden="true"></i>+91 95378 71595</p>
          <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="brijeshnasit7@gmail.com"> brijeshnasit7@gmail.com</a></p>
        </div>
      </div>

      <div class="col-md-3 teamgrid1">
        <img src="css3/images/t2.jpg" class="img-responsive" alt="" />
        <div class="teaminfo">
          <h3>Nidhish Nanavati</h3>
          <!--<div class="team-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
          </div>-->
          <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i>BACK END DEVELOPER</p>
          <p><i class="fa fa-phone" aria-hidden="true"></i>+91 91570 02716</p>
          <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:nidhishnanavati@gmail.com"> nidhishnanavati@gmail.com</a></p>
        </div>
      </div>
      <div class="col-md-3 teamgrid1">
        <img src="css3/images/t3.jpg" class="img-responsive" alt="" />
        <div class="teaminfo">
          <h3>Maulik Bhatt</h3>
          <!-- <div class="team-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
          </div> -->
          <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i>FRONT END DEVELOPER</p>
          <p><i class="fa fa-phone" aria-hidden="true"></i> +91 90335 89179</p>
          <p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:mbhatt@gmail.com"> mbhatt@gmail.com</a></p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>

</center>
<br>
<br>
<br>
<br>

<?php
include("f1.php");

?>