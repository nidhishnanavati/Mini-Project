
<?php

//header("Refresh:0; url=home_stud.php");

$servername = "localhost";
$username = "root";
$password = "admin1234";
$dbname = "quiz_master";

session_start();
require_once("class/dbo.class.php");

date_default_timezone_set("Asia/Kolkata");
$_SESSION['s_time']=date("h:i:sa");

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


<div>
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
          <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <nav>
              <ul class="nav navbar-nav">
                <li><a href="home_stud.php">Home</a></li>
                <li><a href="quiz_sel.php" class="active">Give Quiz</a></li>            
                <li><a href="history_details_stud.php">My History</a></li>
                <li><a href="about_stud.php">About Us</a></li>
              </ul>
            </nav>
          </div>-->
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
            padding-bottom: 10;
    		padding-left: 5;
        }
   </style>
 <script type="text/javascript">
      var hour=0,minutes=10,seconds=0;
	  var t=function timer(){
        seconds--;
        if(seconds == -1) {
            seconds = 59;
            minutes--;

            if(minutes == -1) {
                minutes = 59;
                hour--;

                if(hour==-1) {
                  alert("timer finished");
                  clearInterval(timer);
                  document.getElementById('quiz').submit();
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


<br>
<br>
<br>
<br>
<center>



<?php

ini_set('display_errors',0);
//this page is used to generated random questions.Add CSs here and make it as home page for Starting the quiz 

//session_start(['cookie_lifetime'=>86400]);
session_start();

$server="localhost";
$username="root";
$password="admin1234";
$database="quiz_master";

$con=mysqli_connect($server,$username,$password,$database);

//logic for selecting number of questions randomly,"Limit 4" is number of questions,Change it to "Limit 20"
$query="Select * from toc_qbank order by Rand() Limit 10";

$result = mysqli_query($con,$query);

$i=1;
//fetching rows and inserting tuple data into numerical array
while($row=mysqli_fetch_array($result))
{
$id[$i]=$row[0];
$i++;
}
//Session variables stores 'id' array
$_SESSION['que_id']=$id;
//line 27 to 34 is for checking the questions order 
// if(isset($_SESSION['que_id']))
// {
// foreach ($_SESSION['que_id'] as $key => $value) {
// 	echo "$key=$value;";
// }
// }
$_SESSION['current_que']=1;	
$_SESSION['score']=0;

for($j=1;$j<=4;$j++)
{
	$_SESSION['cans'][$j]='0';
}

?>

<html>
<head>
<!-- <link rel="stylesheet" href="xyz.css">
</link> -->
<!-- <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<script>
	//document.getElementById('val').innerHTML=ans;
	//var ans=document.querySelector('input[name="option"]:checked').value;
	
function next_que(que)
	{
		
		//var ans=document.querySelector('input[name="option"]:checked').value/;
	//	var ans=document.querySelector('input[name="option"]:checked').value;
		var options=document.getElementsByName("option");
		var ans;
				if(options[0].checked==true)
		{
			ans=2;
		}
		else if(options[1].checked==true)
		{
			ans=3;
		}
		else if(options[2].checked==true)
		{
			ans=4;		}
		else if(options[3].checked==true)
		{
			ans=5;
		}
		else
		{
			ans='';
		}
		//document.getElementById('abd').innerHTML=","+ans;
		//var abdc=document.getElementById("optionA").value;
		//ajax request object
		//var ans=document.getElementByName("option").value();
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{	
			document.getElementById("question_conatiner").innerHTML = xmlhttp.responseText;	
			
		}	 
	}
xmlhttp.open("GET", "next_toc.php?que="+que+"&ans="+ans,true);
xmlhttp.send();
	
	}
function prev_que(que)
{
	//var ans=document.querySelector('input[name="option"]:checked').value;
	var ans;
	var options=document.getElementsByName("option");
		if(options[0].checked==true)
		{
			ans=2;
		}
		else if(options[1].checked==true)
		{
			ans=3;
		}
		else if(options[2].checked==true)
		{
			ans=4;
		}
		else if(options[3].checked==true)
		{
			ans=5;
		}
		else
		{
			ans='';
		}
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
	{
		
		document.getElementById("question_conatiner").innerHTML = xmlhttp.responseText;
		
	}	 
	
}
xmlhttp.open("GET", "prev_toc.php?que="+que+"&ans="+ans,true);
xmlhttp.send();
}
function con()
{
// if(confirm("Are you sure you want to submit"))
// {
 document.getElementById('quiz').submit();
// }
}
</script>
</head>
<body onload="timer()">
<div id='val'></div>
<div>
	<div>

	<table border="1"  >
      <div>
      	<div>
			<b>Total Questions: 10 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total Marks: 10
			</b>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	      <th colspan="2"><div style="font-size:40; font-family: calibri; ">&nbsp;Time&nbsp;</div></th>
	      <tr>
	      <td  rowspan="2"><div>&nbsp;</div><div id="abc" style="font-size:40;" class="myClass">10 Min</div></td>
	      </tr>
	     </div>
      </div>
    </table>
    <br>
    </div>

	<div id="form_container">  
	<form method="post" name="quiz" id="quiz" action="result_toc.php" style="color: black;">
		<div id='question_conatiner'>
	<b><table id='quiz_table'>
	<tr>
	<td><div id="question_number"></div>
	<div  name="question" id="question_desc"></div> </td>
	</tr>
	<tr><td>
	<input type="radio" name="option" id='optionA'/>
	<label for="question_optionA" id="option_A">a</label><br>
	</td></tr>
	<tr><td>
	<input type="radio" name="option" id='optionB'/>
	<label for="question_optionB" id="option_B">b</label><br>
	</tr></td>
	<tr><td>
	<input type="radio" name="option" id='optionC'/>
	<label for="question_optionC" id="option_C">c</label><br>
	</tr></td>
	<tr><td>
	<input type="radio" name="option" id='optionD'/>
	<label for="question_optionD" id="option_D">d</label><br>
	</tr></td>
	</table><br></b>
	<!-- session_start(); -->
	<?php    $current_que_no=$_SESSION['current_que'];if($current_que_no!=1) 	echo"<input type='button' value='prev' onclick='prev_que($current_que_no)/>"; ?>
	<button type="button" onclick="next_que(<?php  echo $current_que_no  ?>)" class="btn btn-sm btn-primary">Next</button>
	
	</div>
</div>
<div id="abd"><div id="abd"><button type='button' value='submit' class='btn btn-lg btn-primary' onclick='con()' >Submit</button>
</div>
</form>
</div>
</body>
</html>

<?php
//for first question
//$score=$_SESSION['score'];
//echo $_SESSION['score'];
if($_SESSION['current_que']==1)
{
$current_que_no=$_SESSION['current_que'];
$server="localhost";
$username="root";
$password="admin1234";
$database="quiz_master";


$con=mysqli_connect($server,$username,$password,$database);

if(isset($_SESSION['que_id']))
$que_id=$_SESSION['que_id'][1];

$query="Select * from toc_qbank where id='$que_id'";
$exe1=mysqli_query($con,$query);

$a=mysqli_fetch_array($exe1,MYSQLI_NUM);
	//echo"<script>document.getElementById('question_number').innerHTML='$current_que_no' </script>";
	
	echo"<script>
			document.getElementById('question_number').innerHTML='$current_que_no)'
			document.getElementById('question_desc').innerHTML='$a[1]' </script>";
	echo"<script>document.getElementById('option_A').innerHTML='$a[2]' </script>";
	echo"<script>document.getElementById('option_B').innerHTML='$a[3]'</script> ";
	echo"<script>document.getElementById('option_C').innerHTML='$a[4]'</script>";
	echo"<script>document.getElementById('option_D').innerHTML='$a[5]'</script>";
	echo"<script>document.getElementById('optionA').value='$a[2]'</script>";
	echo"<script>document.getElementById('optionB').value='$a[3]'</script>";
	echo"<script>document.getElementById('optionC').value='$a[4]'</script>";
	echo"<script>document.getElementById('optionD').value='$a[5]'</script>";		
}

?>

</center>
<br>
<br>
<br>
<br>
</div>
<?php
include("f1.php");

?>