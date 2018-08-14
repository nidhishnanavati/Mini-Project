<?php
	ini_set('display_errors',0);
?>

<style>
span{
color:green;
}
</style>


<?php
//$val = $_GET['query2'];
//$ff = $_GET['field2'];
$value = $_GET['query'];
$formfield = $_GET['field'];

if ($formfield == "userid1") {
if (preg_match("/^[0-9]{2}[A-Z a-z]{2}[0-9]{3}$/",$value)) {
	echo "<span>Valid</span>";
}
else if(preg_match("/^[F]{1}[I]{1}[T]{1}[0-9]{3}$/",$value)){
	echo "<span>Valid</span>";
}
else {
	echo "Must Be in Format. Ex Student: 15IT065 Faculty: FIT001";
}
}

// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "username1") {
if (strlen($value) < 4) {
echo "Must be 3+ letters";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "password1") {
	setcookie("pass",$value,time()+20000);
if (strlen($value) < 6) {
echo "Password too short";
} else {
echo "<span>Strong</span>";
}
}

if($formfield == "conpass1") {
if ($value != $_COOKIE['pass']){
echo "Must be same as Password";
}elseif($_COOKIE['pass']==''){
echo "Password must be filled.";
}
else{
echo "<span>Strong</span>";
}
}

// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email1") {
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
echo "Invalid email";
} else {
echo "<span>Valid</span>";
}
}

if ($formfield == "mob1") {
if (!preg_match("/^[0-9]{10}$/",$value)) {
echo "Invalid mob";
} else {
echo "<span>Valid</span>";
}
}

?>