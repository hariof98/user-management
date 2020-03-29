<?php
  include('config.php');
  include('auth.php');

  $id = isset($_GET['id']) ? $_GET['id'] : '';

  $query = "SELECT * FROM registerform WHERE id = ' ".$id." ' ";
  $result = mysqli_query($connection,$query);

/*if(isset($_SESSION['Username']))
           {
            if((time() - $_SESSION['last-time'])> 60)

            {
              header("Location: logout.php");
            }
            else
            {
              $_SESSION['last-time'] = time();
            }
           }*/

if(isset($_POST['new']) && $_POST['new']==1)
{
      //$id = $_REQUEST['id'];
      $Name = $_REQUEST['Name'];
      $Username = $_REQUEST['Username'];
      $pwd = $_REQUEST['Password'];
      $Password = md5($pwd);
      $Email = $_REQUEST['Email'];
      $Mobile = $_REQUEST['Mobile'];
      $Dob = $_REQUEST['Dob'];
      $Address = $_REQUEST['Address'];
      //$Status = $_REQUEST['Status'];



$number = 10;



  $str = rand();
    $ans = sha1($str);
    //echo($ans);

    $expire = 60;



if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
    {
      echo "<br>Enter a valid Email";
    }
  
      elseif (strlen($Mobile) != $number) {
          echo "<br>Enter a valid Mobile number";
      }

    
   elseif ($Name && $Username  && $Password && $Email && $Mobile && $Dob && $Address)
   
    {
      
      $que = "INSERT INTO registerform (`Name`, `Username`,`Password`, `Email`, `Mobile`, `Dob`, `Address` , `Status`,`authtoken`)
       values ('$Name','$Username','$Password','$Email',
           '$Mobile','$Dob','$Address','0','$ans')";

      mysqli_query($connection, $que)  or die(mysqli_error($connection));
       $status = "<center>
       <h2>
       <b>
       New Record Inserted Successfully !
        <b>
        </h2>
        </center><br>";

       echo $status;
      } 
        
   ?>    
      <p>
       <center><a href= viewuser.php><h2>View User<h2></a></center>
      </p>

<?php 
    //echo $status;
}    
        else
      {
        ?>
      
 
      



<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<center>
          <h1><u>Insert New Record</u></h1>
              <div>
                
              	<table class="pure-table pure-table-borderded" 
              	style="margin-top: 100px;">
              		
              	<form action="" method="post">
              		<input type="hidden" name="new" value="1" required>

              	<tr>
              	   <td>
              	    <input type="text" name="Name" placeholder="Name"  required>
              	   </td>
              	</tr>

              		<tr>
              			<td>
              				<input type="text" name="Username" placeholder="Username" required>
              			</td>
              		</tr>

              		<tr>
              		<td>
              			<input type="password" name="Password" placeholder="Password" required>
              		</td>
              	</tr>

              	<tr>
              		<td>
              			<input type="text" name="Email" placeholder="Email" required>
              		</td>
              	</tr>

              		<tr>
              			<td>
              				<input type="text" name="Mobile" placeholder="Mobile" required>
              			</td>
              		</tr>

              	<tr>	
              		<td>
              			<input type="text" name="Address" placeholder="Address" required>
              		</td>
              	</tr>

              		<tr>
              			<td>
              				<input type="text" name="Dob" placeholder="Date of Birth" required>
              			</td>
              		</tr>

              <!--		<tr>
              			<td>
              				<input type="number" name="Status" placeholder="Status">
              			</td>
              		</tr>  -->

              			<tr>
              			<td>
              				<button type="submit">
              					<b>Insert<b>
              				</button>
              			</td>
              		</tr> 

              	</form>
              	
                </table>
                </center>


         <?php } ?>


            </div>
              </div>

</body>
</html>