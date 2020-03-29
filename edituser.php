<?php
include('config.php');
include("auth.php");

$id = isset($_GET['id']) ? $_GET['id'] : '';   ///******///
$query = "SELECT * FROM registerform WHERE id='".$id."'"; 
$result = mysqli_query($connection, $query)
              or die(mysqli_error());
$row = mysqli_fetch_assoc($result);

  
        if (isset($_POST['new']) && $_POST['new']==1) 
          {
            $id = $_REQUEST['id'];
            $Name = $_REQUEST['Name'];
            $Username = $_REQUEST['Username'];
            $Email = $_REQUEST['Email'];
            $Mobile = $_REQUEST['Mobile'];
            $Dob = $_REQUEST['Dob'];
            $Address = $_REQUEST['Address'];
            $Status = $_REQUEST['Status'];


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



$number = 10;

if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
    {
      echo "<br>Enter a valid Email";
    }
  
      elseif (strlen($Mobile) != $number) {
          echo "<br>Enter a valid Mobile number";
      }

    
   elseif ($Name && $Username && $Email && $Mobile && $Dob && $Address)
   
    {
            



$query = "UPDATE registerform SET Name = '$Name', Username = '$Username',Email = '$Email',Mobile = '$Mobile',Dob = '$Dob',Address = '$Address',Status = '$Status' WHERE id = '$id' ";

mysqli_query($connection, $query) or die (mysqli_error($connection));
$status = "<center><h2><b>Record Updated Successfully !<b></h2></center>";
echo $status;

}

?>

<p>
<center><a href = 'viewuser.php'>
<h2>View User Data</h2> 
 </a></center>
 </p> 
 
 <?php 
     }

          else{
            ?>



<!DOCTYPE html>
<html>
<head>
  <title>Edit User Data </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
         <div class="form" style="padding-left: 600px">
          <h1><u>Edit/Update Data</u></h1>

           <div>
            <div class="container">
          
            <form name="form" method="post" action=""> 

<input type="hidden" name="new" value="1"> <!--*****-->

<!--<input type="id" name="id" placeholder="id" required value="<?php //echo $row['id'];?>" >&nbsp;&nbsp;id<br><br>
-->
<input type="text" name="Name" placeholder="Name" required value="<?php echo $row['Name'];?>" >&nbsp;&nbsp;Name<br><br>

 <input type="text" name="Username" placeholder="Username" required value="<?php echo $row['Username'];?>" >&nbsp;&nbsp;Username<br> <br>

<input type="text" name="Email" placeholder="Email" 
required value="<?php echo $row['Email'];?>" >&nbsp;&nbsp;Email<br><br>

<input type="text" name="Mobile" placeholder="Mobile" required value="<?php echo $row['Mobile'];?>" >&nbsp;&nbsp;Mobile<br> <br>

<input type="text" name="Address" placeholder="Address" required value="<?php echo $row['Address'];?>" >&nbsp;&nbsp;Address<br> <br>

<input type="text" name="Dob" placeholder="Dob" required value="<?php echo $row['Dob'];?>" >&nbsp;&nbsp;Dob<br><br>

<?php if($id!=148)
{?>
<input type="number" name="Status" placeholder="Status" required value="<?php 


echo $row['Status'];?>" >&nbsp;&nbsp;Status<br><br><?php
}

else
{

}

?>


<input name="submit" type="submit" value="Update">

</form>
</div>


<?php  } ?>
 
<br /><br /><br /><br /> 
</div>  
</div>

</body>
</html>


                















