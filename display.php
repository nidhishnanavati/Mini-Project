<html>
<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "quiz_master";

	require_once("class/dbo.class.php");
	
	$item = "select * from toc_qbank";
	$res = $db->get($item);
?>
	<center><h2>TOC Questions</h2></center>
	<table border="1">
	<tr>
	<th>ID</th>
	<th>Question</th>
	<th>(A)</th>
	<th>(B)</th>
	<th>(C)</th>
	<th>(D)</th>
	<th>Answer</th>
	<th colspan="2">Action</th>
	</tr>
<?php
foreach($res as $value){ 
?>

	<tr>
	<td> 
	<?php echo $value['id']; ?>
	</td>
	<td> 
	<?php echo $value['questions']; ?>
	</td>
	<td> 
	<?php echo $value['opa']; ?>
	</td>
	<td> 
	<?php echo $value['opb']; ?>
	</td>
	<td> 
	<?php echo $value['opc']; ?>
	</td>
	<td> 
	<?php echo $value['opd']; ?>
	</td>
	<td> 
	<?php echo $value['ans']; ?>
	</td>

	<td>
	<?php echo "<a href=delete.php?id=".$value['id']." onclick='return myFunction()'>Remove</a>"; ?> 
	</td>
	</tr>
<?php
}

 ?>
<tr>
	<td colspan="9" align="center">
	<?php echo "<a href=addque.php>Click Here to Add Question</a>"; ?>
	</td>
	</tr> 
</table>

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

