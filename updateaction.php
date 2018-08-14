<?php

	require_once("class/dbo.class.php");
	
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test2";

//$uid=$_GET['aid'];
$uid = isset($_GET["id"]) ? $_GET["id"] : '';
 

if(isset($_POST['update'])){
 
 $sub = $_POST["subject"];
 $que = $_POST["question"];
 $opa = $_POST["opa"];
 $opb = $_POST["opb"];
 $opc = $_POST["opc"];
 $opd = $_POST["opd"];
 $ans = $_POST["ans"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "UPDATE toc_qbank SET questions='$que', opa='$opa', opb='$opb', opc='$opc', opd='$opd', ans='$ans' WHERE id='$uid' ";

if (mysqli_query($conn, $sql)) {
    header(Location("display.php"))
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

?>