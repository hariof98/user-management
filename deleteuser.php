<?php

require('config.php');

$id = $_REQUEST['id'];
$query = "DELETE FROM registerform WHERE id = '$id' ";
$result = mysqli_query($connection,$query) or die(mysqli_error());

header("Location: viewuser.php");

?>