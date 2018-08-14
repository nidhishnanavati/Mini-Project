<?php

	require_once("class/dbo.class.php");
	
?>

<?php
$my_id=$_GET['id'];
$query = "DELETE FROM toc_qbank WHERE id='$my_id'";
$res = $db->get($query);

?>_toc

<?php
header('Location: display_toc.php');
exit;
?>	