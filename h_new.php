<html>
<head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
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

if($_SESSION['current_que']==1)
{
$current_que_no=$_SESSION['current_que'];
$server="localhost";
$username="root";
$password="";
$database="quiz_master";


$con=mysqli_connect($server,$username,$password,$database);

if(isset($_SESSION['que_id']))
$que_id=$_SESSION['que_id'][1];

$query="Select * from se_qbank where id='$que_id'";
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

ini_set('display_errors',0);
//this page is used to generated random questions.Add CSs here and make it as home page for Starting the quiz 

//session_start(['cookie_lifetime'=>86400]);
session_start();

$server="localhost";
$username="root";
$password="";
$database="quiz_master";

$con=mysqli_connect($server,$username,$password,$database);

//logic for selecting number of questions randomly,"Limit 4" is number of questions,Change it to "Limit 20"
$query="Select * from se_qbank order by Rand() Limit 10";

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
//  echo "$key=$value;";
// }
// }
$_SESSION['current_que']=1; 
$_SESSION['score']=0;

for($j=1;$j<=4;$j++)
{
  $_SESSION['cans'][$j]='0';
}

?>


<link rel="stylesheet" href="xyz.css">
</link>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  //document.getElementById('val').innerHTML=ans;
  //var ans=document.querySelector('input[name="option"]:checked').value;
  
function next_que(que)
  {
    
    //var ans=document.querySelector('input[name="option"]:checked').value/;
  //  var ans=document.querySelector('input[name="option"]:checked').value;
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
      ans=4;    }
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
xmlhttp.open("GET", "next_se.php?que="+que+"&ans="+ans,true);
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
xmlhttp.open("GET", "prev_se.php?que="+que+"&ans="+ans,true);
xmlhttp.send();
}

</script>
</head>