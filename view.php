<?php
include('config.php');
include('auth.php');
?>




<!DOCTYPE html>
<html>
<head>
	<title>View User</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
           <style>
           	.h1{
           		text-align: center;
           	}
           </style>

<div class="h1">
<h2>User Data<br><br></h2></div>
<a href="logout.php" style="float: right;">Logout&nbsp;</a>
<!--<h3><a href="insertuser.php">&nbsp;Insert New Data</a></h3>
 -->
<style>
	.view
	{
		background-color: #909497;
		text-align: center;
	}
</style>
<center>

<br><table  border="1" class="pure-table pure-table-bordered"> <!--*****-->

		<tr class="view">
			<!--<td><b>Insert</b></td>
			<td><b>Edit</b></td>
			<td><b>Delete</b></td> -->
			<td><b>S.No</b></td>
			<td><b>Name</b></td>
			<!--<td><b>Username</b></td>-->
			<td><b>Email</b></td>
		<!--	<td><b>Mobile</b></td>-->
			<td><b>Dob</b></td>
			<td><b>Address</b></td>
		<!--<td><b>Status</b></td>-->
		</tr>


<?php

if(isset($_SESSION['Username']))
           {
            if((time() - $_SESSION['last-time'])> 3600)

            {
              header("Location: logout.php");
            }
            else
            {
              $_SESSION['last-time'] = time();
            }
           }




$count = 1;
$query = "SELECT * FROM registerform where id!=148 ORDER by id asc";

	$result = mysqli_query($connection, $query);	

while($row = mysqli_fetch_assoc($result))
	 { ?>


<tr align="center">
<!--	<td>
		<a href="insertuser.php?id=<?php echo $row["id"]; ?>">
			<button style="background-color: #2E86C1 ;color: white">
				Insert
			</button>
		</a>
	</td>
	<td>
		<a href="edituser.php?id=<?php echo $row["id"]; ?>">
         <button style="background-color: #229954;color: white">
           &nbsp;Edit&nbsp;
        </button>
        </a>
   </td>
   <td>
         <a href="deleteuser.php?id=<?php echo $row["id"]; ?>"
         	onclick = "return confirm('Sure you want to Delete?')">
         	
         	<button style="background-color:#CB4335;color: white">
         		&nbsp;Delete&nbsp;
         	</button>
         </a>
     </td> -->
<td align="center">
	<?php
	   echo $count;
	?>
</td>

<td align="center">
	<?php
	echo $row["Name"]; 
	?>
</td>

<!--<td align="center">
	<?php
     echo $row["Username"];
	?>
</td>-->

<td align="center">
	<?php
	  echo $row["Email"];
	?>
</td>

<!--<td align="center">
	<?php
	  echo $row["Mobile"];
	?>
</td>-->

<td align="center">
	<?php
	  echo $row["Dob"];
	?>
</td>

<td align="center">
	<?php
	  echo $row["Address"];
	?>
</td>

<!--<td align="center">
	<?php
	  echo $row["Status"];
	?>
</td>
</tr>
-->


<?php
   
     $count++; } 

?>
</table>
</center>

</body>
</html>
		
	


