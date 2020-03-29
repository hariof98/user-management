<?php
session_start();
include('config.php');

$str = rand();
$ans = sha1($str);

$Username = $_SESSION['Username'];
//$Username = stripslashes($_REQUEST['Username']); // 

$que = "UPDATE registerform SET authtoken = '$ans'
 WHERE Username = '$Username' ";

//$que = "UPDATE authtoken FROM registerform WHERE id = '$id' ";

mysqli_query($connection, $que);



session_destroy(); //Destroys entire session



setcookie('Username', $Username, time() - 3600); //deletes the cookies
	header("Location: loginform.php");


?>


