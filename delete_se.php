<?php

	require_once("class/dbo.class.php");
	
?>

<?php
$my_id=$_GET['id'];
$query = "DELETE FROM se_qbank WHERE id='$my_id'";
$res = $db->get($query);

?>

<?php
header('Location: display_se.php');
exit;
?>	