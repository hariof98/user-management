<?php

include('config.php');
    
    if (isset($_POST['Submit']))
    {
     $Name = $_POST['Name'];
      $Username = $_POST['Username'];
      $pwd = $_POST['Password'];
      $Password = MD5($pwd);
      $Email = $_POST['Email'];
      $Mobile = $_POST['Mobile'];
      $Dob = $_POST['Dob'];
      $Address = $_POST['Address'];
     // $Status = $_POST['Status'];


      $number = 10;
      $num = '+1234567890';
    


    $str = rand();
    $ans = sha1($str);
    //echo($ans);

    $expire = 60;

    


     /* if(empty($Name))
      {
        echo "Enter Name";
      }*/
   /*   if(empty($Username))
      {
        echo "Enter Username";
      }

      elseif(empty($Password))
      {
        echo "Enter Password";
      }


    /*  if (isset($_POST['Email']) == true && !$Email = $_POST['Email']) == false)
      {
        if (filter_var($Email, FILTER_VALIDATE_EMAIL) == false)
        {
          echo "Enter a valid Email";
        }
      }*/

  if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
    {
      echo "<br>Enter a valid Email";
    }
  
      elseif (strlen($Mobile) != $number) {
          echo "<br>Enter a valid Mobile number";
      }

    /* elseif (!preg_match("[0-9]{4}-[0-1][0-9]-[0-3][0-9]$"),$Dob)
      {
        echo "Enter a valid DOB";
    }*/

    /*elseif (!preg_match($num, $Mobile)) 
    {
      echo "Enter a proper mobile.no";
    }*/
             //preg_match – this function is used to perform a pattern match on a string. It returns true if a match is found and false if a match is not found.


 //   elseif(empty($Address))
    //  {
    //    echo "Enter the Address";
     // }
     /* if(!$Status = $_POST['Status'])
      {
        echo "<br>Enter Status";
      }*/


       elseif ($Name && $Username  && $Password && $Email && $Mobile && $Dob && $Address)
        {
          $query = "insert into registerform(`Name`,`Username`,`Password`,
`Email`,`Mobile`,`Dob`,`Address`,`Status`,`authtoken`)
           values ('$Name','$Username','$Password','$Email',
           '$Mobile','$Dob','$Address','0','$ans')";

  $result = mysqli_query($connection,$query) or die(mysqli_error($connection));
      $status = "Registered Successfully.</br>
      <p>
     <a href = 'loginform.php'> Go to login page?</a>
      </p>";

    /*  $target = "loginform.php";
      $linkname = "mylink";
       link($target, $linkname);*/

     //echo "<a href = loginform.php></a>";
echo '<p style="color:green;">'.$status.'</p>';
         
      }
       else
        {
            echo "<br>Error";
        }
    }

               

 
  /*  $form = ('Name','Username','Email','Mobile',
      'Dob','Address','Status');

    if(empty($_POST['Name'||'Username'||'Email'||'Mobile'||
      'Dob'||'Address'||'Status']))
    {
      echo "<br>Enter All The Details";
    }
    elseif (in_array($connection, $form)) && ($connection && $form)
     {
      echo "Registered";
    }*/

/*if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
*/
 



       

?>



<!DOCTYPE html>
<html>
<head>
<title>
  REGISTER
</title>
<link rel="stylesheet" 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

  
<div class="jumbotron jumbotron-fluid" style="height: 650px;text-align: center;background-color: white;">
  <form action="" method="post">


   <!-- <style>
      .tablestyle
      {
       
      }
    </style>

        <div class="tablestyle">-->

          <center><table border="1" class="pure-table pure-table-bordered">
      <!--<tr>
        <td>Id :</td>
        <td><input type="number" name="Id"></td>
      </tr>-->
  
      <tr>
        <td>Name :</td>
         <td><input type="text" name="Name" required value=""></td>
      </tr>
      <tr>
        <td>Username :</td>
        <td><input type="text" name="Username" required value=""></td>
      </tr>
      <tr>
        <td>Password :</td>
        <td><input type="password" name="Password" required value=""></td>
      </tr>
      <tr>
        <td>Email :</td>
        <td><input type="text" name="Email" required value=""></td>
      </tr>
      <tr>
        <td>Mobile :</td>
        <td><input type="number" name="Mobile" required value=""></td>
      </tr>
      <tr>
        <td>Dob :</td>
        <td><input type="text" name="Dob" required value=""></td>
      </tr>
      <tr>
        <td>Address :</td>
        <td><input type="text" name="Address" required value=""></td>
      </tr>
      
    <!-- <tr>
        <td>Status :</td>
        <td><input type="number" name="Status"></td>
      </tr> -->

      <tr> 
        <td colspan="2">
          <input name='Submit' value="Submit" type="Submit" style="float: left;"></td>
      </tr>
    </table>
  </center>
    </div>







</form>
</div>
</body>
</html>