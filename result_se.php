<?php
ini_set('display_errors',0);
session_start();

date_default_timezone_set("Asia/Kolkata");
$e_time=date("h:i:sa");
$st_time=$_SESSION['s_time'];
$quiz_duration=strtotime($e_time)-strtotime($st_time) ;
$server="localhost";
$username="root";
$password="";
$database="quiz_master";
$con=mysqli_connect($server,$username,$password,$database);

$score=0;
$ans=$_POST['option'];

//$_SESSION['ans'][4]=$ans;

$prev_que_id=$_SESSION['que_id'][10];
$ansquery="Select * from se_qbank where id='$prev_que_id'";
$exe1=mysqli_query($con,$ansquery);
$a=mysqli_fetch_array($exe1,MYSQLI_NUM);
//score increment logic
if($ans==$a[6])
{	
	$_SESSION['cans'][$prev_que_no]='1';
	//$score=$_SESSION['cans'][$prev_que_no];
	//$score++;
	//$_SESSION['score']=$score;
}
else
{
$_SESSION['cans'][$prev_que_no]='0';
	//$score=$_SESSION['cans'][$prev_que_no];	
}

for($i=1;$i<=10;$i++)
{
	$score+=$_SESSION['cans'][$i];
}
$uid2 = $_SESSION['s_id'];

$idquery="Select * from student_info where student_id='$uid2'";
$id1=mysqli_query($con,$idquery);
$id=mysqli_fetch_array($id1,MYSQLI_NUM);
$date=date("Y-m-d");
$sub='SE';
$query="INSERT INTO history_details(student_id,name,subject,marks,start_time,end_time,quiz_duration,q_date) VALUES ('$id[1]','$id[2]','$sub','$score','$st_time','$e_time','$quiz_duration','$date')";
$re=mysqli_query($con,$query); 
//session_write_close();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_master";
  //session_start();
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
                <li><a href="home_stud.php">Home</a></li>
                <li><a href="quiz_sel.php" class="active">Give Quiz</a></li>               
                <li><a href="history_details_stud.php">My History</a></li>
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


<br>
<br>
<br>
<br>
<center>
<!-- <div>Select Subject :</div> -->
<!-- <div class="col-md-3 footer_grid "> -->
        <h3>Your Score:</h3>
        <!-- <div class="footer_grid_right"> -->

	          <?php echo "<h2>".$score."</h2>";
			 // session_destroy()
	          ?>
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