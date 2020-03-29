<?php
include('config.php');

session_start();


if(isset($_POST['Username']))
{
 // $Username = $_POST['Username'];
 // $pwd = $_POST['Password'];
 //$Password = md5($pwd);

    
         //TO PREVENT SQL INJECTION//
      $Username = stripslashes($_REQUEST['Username']); // removes backslashes
    $Username = mysqli_real_escape_string($connection,$Username); //escapes special characters in a string
    $Password = stripslashes($_REQUEST['Password']);
    $Password = mysqli_real_escape_string($connection,$Password);

    $query = "SELECT * FROM registerform WHERE Username = '$Username' and  Password='".md5($Password)."'";
    echo "$Username";

    $result = mysqli_query($connection,$query) or die(mysql_errno());
    //$rows = mysqli_num_rows($result);

 $rows = mysqli_fetch_array($result);


if ($rows['Status'] == '1' && $rows['authtoken'] == true) 
{
  if (isset($_POST['Submit'])) {
       
       setcookie('Username', $Username, time()+60*60*7);

  

$_SESSION['Username'] = $_POST['Username'];
$_SESSION['last-time'] = time();

}

header('Location:adminwelcome.php?Username='.$Username);
}

elseif ($rows['Status'] == '0' && $rows['authtoken'] == true) 
{
  if (isset($_POST['Submit'])) {
       
       setcookie('Username', $Username, time()+60*60*7);

  

$_SESSION['Username'] = $_POST['Username'];
$_SESSION['last-time'] = time();

}
//$_SESSION['last-time'] = time();

header('Location:userwelcome.php?Username='.$Username);
}


else 
{
 //echo "User does not exist";
header('Location: loginform.php');
}


}

    else
    { 
    
    /*    function is_admin()
           {
            if(isLoggedIn()){
                $que = "SELECT * FROM registerform WHERE Username = $Username";
                $res = mysqli_num_rows($que);
                if($res['Status'] = 1){
                    header("Location: viewuser.php");
                }
                else{
                    header("Location: loginform.php");
                }
            }
           }*/
            /*
 if($rows==1 && $_SESSION['Status']==1)
    {  $_SESSION['Status'] = $Status;
 header("Location: viewuser.php");
      }
     elseif($rows==1 && $_SESSION['Status']!=1)
      { 
        //$Username = $_POST["Username"];
      $_SESSION['Username'] = $Username;
      header('Location: loginwelcome.php?Username='.$Username); 
      }
   else
    { echo 'error';
      header("Location: loginform.php");  }
    */






?>



<!DOCTYPE html>
<html>
<head>
<title>
  LOGIN
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
  
.button{
  
  padding: 8px 24px;
  margin: 4px 2px;
  color: green;
  margin-left: 32px;
  border: 5px;
  float: left;
  margin-left: 2px;
}


</style>



<body style="background-color: #5F012D;
              height: 721px;
              padding-bottom: 147px;">
  <div>
  <div class="container">
            <form action="" method="post" name="Login">
      <h4 style="color: white">
        <br><br><br><br>
      Username
        </h4>
      <input type="text" name="Username" placeholder="Enter Username" required>
      <br><br>
      <h4 style="color: white">Password</h4>
      <input type="password" name="Password" placeholder="Enter Password" required>
      <br><br>
      <input type="Submit" name="Submit" value="Submit" class="button">


      <br><p style="color: white"> &nbsp;&nbsp;New User?
    <a href="register.php">&nbsp;Register !</a></p> 
   



    </form>
  </div>
</div>
<?php } ?>
</body>
</div>
</body>
</html>
