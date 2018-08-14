<?php
ini_set('display_errors',0);
session_start();

$server="localhost";
$username="root";
$password="";
$database="quiz_master";
$con=mysqli_connect($server,$username,$password,$database);

$prev_que_no=$_GET["que"];
$ans=$_GET["ans"];

//$_SESSION['ans'][$prev_que_no]=$ans;
//$ans1=$_SESSION['ans'][$prev_que_no];

$prev_que_id=$_SESSION['que_id'][$prev_que_no];
$ansquery="Select * from toc_qbank where id='$prev_que_id'";
$exe1=mysqli_query($con,$ansquery);
$a=mysqli_fetch_array($exe1,MYSQLI_NUM);
//score increment logic
if($ans==(2||3||4||5))
	$_SESSION['ans'][$prev_que_no]=$a[$ans];
else
	$_SESSION['ans'][$prev_que_no]='';

$ans=$_SESSION['ans'][$prev_que_no];
if($ans==$a[6])
{	
	$_SESSION['cans'][$prev_que_no]='1';
	$score=$_SESSION['cans'][$prev_que_no];
	//$score++;
	//$_SESSION['score']=$score;
}
else
{
$_SESSION['cans'][$prev_que_no]='0';
	$score=$_SESSION['cans'][$prev_que_no];	
}
	//end of score increment logic
$current_que_no=$prev_que_no+1;
$current_que_id=$_SESSION['que_id'][$current_que_no];

$query="Select * from toc_qbank where id='$current_que_id'";

$exe1=mysqli_query($con,$query);
$a=mysqli_fetch_array($exe1,MYSQLI_NUM);

if(isset($_SESSION['que_id']))
{
$_SESSION['current_que']=$current_que_no;
}

if($current_que_no<10)
{
$current_que_ans=$_SESSION['ans'][$current_que_no];	
if($current_que_ans==$a[2])
{
	echo"
	<table align='center'>
	<tr>
	<b><td><div id='question_number'>$current_que_no)</div></td>
	</tr>
	<tr><td>
 	<div name='question' id='question_desc'>$a[1]</div> </b></td>
	</tr>
	<tr><td>
	<input type='radio'name='option' id='option' value='$a[2]' checked='true'/>
	<label for='question_optionA' id='option_A'>$a[2]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[3]'/>
	<label for='question_optionB' id='option_B'>$a[3]</label><br>
	</tr></td>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[4]'/>
	<label for='question_optionC' id='option_C'>$a[4]</label><br>
	</tr></td>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[5]'/>
	<label for='question_optionD' id='option_D'>$a[5]</label><br>
	</tr></td>
	</table><br>
	<button type='button' onclick='prev_que($current_que_no)' class='btn btn-sm btn-primary'>Prev</button>
	<button type='button' onclick='next_que($current_que_no)' class='btn btn-sm btn-primary'>Next</button>
";
}

else if($current_que_ans==$a[3])
{
	echo"
	<table align='center'>
	<tr>
	<b><td><div id='question_number'>$current_que_no)</div></td>
	</tr>
	<tr><td>
 	<div name='question' id='question_desc'>$a[1]</div></b> </td>
	</tr>
	<tr><td>
	<input type='radio'name='option' id='option' value='$a[2]'/>
	<label for='question_optionA' id='option_A'>$a[2]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[3]' checked='true'/>
	<label for='question_optionB' id='option_B'>$a[3]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[4]'/>
	<label for='question_optionC' id='option_C'>$a[4]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[5]'/>
	<label for='question_optionD' id='option_D'>$a[5]</label><br>
	</td></tr>
	</table><br>
	<button type='button' onclick='prev_que($current_que_no)' class='btn btn-sm btn-primary'>Prev</button>
	<button type='button' onclick='next_que($current_que_no)' class='btn btn-sm btn-primary'>Next</button>
";
}

else if($current_que_ans==$a[4])
{
	echo"
	<table align='center'>
	<tr>
	<b><td><div id='question_number'>$current_que_no)</div></td>
	</tr>
	<tr><td>
 	<div name='question' id='question_desc'>$a[1]</div> </b></td>
	</tr>
	<tr><td>
	<input type='radio'name='option' id='option' value='$a[2]' checked='true'/>
	<label for='question_optionA' id='option_A'>$a[2]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[3]'/>
	<label for='question_optionB' id='option_B'>$a[3]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[4]' checked='true'/>
	<label for='question_optionC' id='option_C'>$a[4]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[5]'/>
	<label for='question_optionD' id='option_D'>$a[5]</label><br>
	</td></tr>
	</table><br>
	<button type='button' onclick='prev_que($current_que_no)' class='btn btn-sm btn-primary'>Prev</button>
	<button type='button' onclick='next_que($current_que_no)' class='btn btn-sm btn-primary'>Next</button>
";
}

else if($current_que_ans==$a[5])
{
	echo"
	<table align='center'>
	<tr>
	<b><td><div id='question_number'>$current_que_no)</div></td>
	</tr>
	<tr><td>
 	<div name='question' id='question_desc'>$a[1]</div></b></td>
	</tr>
	<tr><td> 
	<input type='radio'name='option' id='option' value='$a[2]'/>
	<label for='question_optionA' id='option_A'>$a[2]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[3]'/>
	<label for='question_optionB' id='option_B'>$a[3]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[4]'/>
	<label for='question_optionC' id='option_C'>$a[4]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[5]' checked='true'/>
	<label for='question_optionD' id='option_D'>$a[5]</label><br>
	</td></tr>
	</table><br>
	<button type='button' onclick='prev_que($current_que_no)' class='btn btn-sm btn-primary'>Prev</button>
	<button type='button' onclick='next_que($current_que_no)' class='btn btn-sm btn-primary'>Next</button>
";
}


else
{
	echo"<table align='center'>
	<tr>
	<b><td><div id='question_number'>$current_que_no)</div></td>
	</tr>
	<tr><td>
 	<div name='question' id='question_desc'>$a[1]</div></b></td>
 	</tr>
	<tr><td>
	<input type='radio'name='option' id='option' value='$a[2]' />
	<label for='question_optionA' id='option_A'>$a[2]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[3]'/>
	<label for='question_optionB' id='option_B'>$a[3]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[4]'/>
	<label for='question_optionC' id='option_C'>$a[4]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[5]' />
	<label for='question_optionD' id='option_D'>$a[5]</label><br>
	</td></tr>
	</table><br>
	<button type='button' onclick='prev_que($current_que_no)' class='btn btn-sm btn-primary'>Prev</button>
	<button type='button' onclick='next_que($current_que_no)' class='btn btn-sm btn-primary'>Next</button>
";	
}

}
else
{
	echo"
	<table align='center'>
	<tr>
	<b><td><div id='question_number'>$current_que_no)</div></td>
	</tr>
	<tr><td>
 	<div name='question' id='question_desc'>$a[1]</div></b></td>
 	</tr>
	<tr><td> 
	<input type='radio' name='option' id='option' value='$a[2]'/>
	<label for='question_optionA' id='option_A'>$a[2]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[3]'/>
	<label for='question_optionB' id='option_B'>$a[3]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[4]'/>
	<label for='question_optionC' id='option_C'>$a[4]</label><br>
	</td></tr>
	<tr><td>
	<input type='radio' name='option' id='option' value='$a[5]'/>
	<label for='question_optionD' id='option_D'>$a[5]</label><br>
	</td></tr>
	</table><br>
	<button type='button' onclick='prev_que($current_que_no)' class='btn btn-sm btn-primary'>Prev</button>
	";
}
	
?>







