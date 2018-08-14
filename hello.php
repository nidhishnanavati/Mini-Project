<?php include("h_new.php"); ?>

<!-- Header -->


<link href="cssd/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="cssd/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="cssd/appointment_style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="cssd/font-awesome.css" rel="stylesheet">


<?php

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
          <li style="color: white"><?php foreach($res as $value){ echo $value[$uname];} ?> </li>
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
            <a class="navbar-brand" href="index.html">
              <h1><span class="fa fa-users" aria-hidden="true"></span>&nbsp;Quiz Master </h1>
            </a>
          </div>
          <!--/.navbar-header-->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <nav>
              <ul class="nav navbar-nav">
                <li><a href="home_stud.html" class="active">Home</a></li>
                <li><a href="quiz_sel.php">Give Quiz</a></li>               
                <li><a href="history_stud.html">History Details</a></li>
                <li><a href="about.php">About Us</a></li>
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

?>
 <!-- /Header-->

<!-- TIMER -->


<html lang="en">
<head>

    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
        .myClass {
            font-family: verdana; 
            font-size: 16px; 
            font-weight: normal;  
            color: black;
            line-height: 30px;
        }
   </style>
 <script type="text/javascript">
      var hour=0,minutes=20,seconds=0;
    var t=function timer(){
        seconds--;
        if(seconds == -1) {
            seconds = 59;
            minutes--;

            if(minutes == -1) {
                minutes = 59;
                hours--;

                if(hours==-1) {
                  alert("timer finished");
                  clearInterval(timer);
                  return;
                }
            }
        }
        document.getElementById("abc").innerHTML=(minutes+":"+seconds);
      };
    setInterval(t,1000);
        //var timer = setInterval(
      </script>
     
 </head>
 
</html>
 <!-- /TIMER -->

 <?php



?>



<?php
//for first question
//$score=$_SESSION['score'];
//echo $_SESSION['score'];


?>


<br>
<br>
<br>
<br>
<center>
<!-- <div>Select Subject :</div> -->
<!-- <div class="col-md-3 footer_grid "> -->
        <h3>Select Subject:</h3>
        <!-- <div class="footer_grid_right"> -->

          <form action="start_quiz_toc.php" method="post">
            <input type="submit" value="Theory Of Computation">
          </form>
         
          <form action="start_quiz_se.php" method="post">
            <input type="submit" value=" Software Engineering ">
          </form>
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