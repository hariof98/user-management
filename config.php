<?php
$connection = mysqli_connect('localhost:3308','root','','register');

   if ($connection)
   {
     //  echo "Connected Successfully";
   }
   else
   {
   	die("Database Not Connected");
   }
?>
