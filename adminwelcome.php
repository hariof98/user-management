<?php
include('auth.php');
//include('logout.php');  //big mistake


/* $Username = $_REQUEST['Username'];
 echo $Username;*/




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="container-fluid" style="background-color: white">
          <h1 style="text-align: center;">WELCOME</h1>
      <strong><center><h1>
      	<?php  
        //$expire = 120;

        if(isset($_SESSION['Username']))
           {
            if((time() - $_SESSION['last-time']) > 3600)

            {
              header("Location: logout.php");
            }
            else
            {
              $_SESSION['last-time'] = time();
            }
           }

        echo $_SESSION['Username']; ?>


      	 </h1>	
      	 </center>
      	 </strong>  
        <a href="logout.php"><h3 style="text-align: right;font-size: 20px">Logout&nbsp;</h3></a>
        <a href="viewuser.php"><b style="font-size: 23px">Manage Users</b></a>

<div class="jumbotron jumbotron-fluid" style="color: #2577E3;;font-size: 30px ;font-family: 'Roboto', sans-serif;">
 <center><strong>ABOUT WORLDLINE,</strong></center><br>
</div>


<style>
  .text
  {
      font-size: 17px;
      font-family: 'Roboto', sans-serif;
      text-align: justify;
      background-color: white;
  }
</style>
              <!-- ABOUT -->

<p class="text"> 
At Worldline, connecting and securing transactions is what we do on a daily basis. Covering the entire payment value chain, our technological experts create and operate digital platforms that handle the millions of highly critical transactions between a company, its partners, and its customers.
<!--<br><br>-->
Our industrial processing capabilities allow us to process billions of electronic transactions per year in our highly secured data centers. We are proud of our commitment to security and continuous operational excellence - serving our clients is our top priority. Through our platforms, we empower the right person with exactly the right service at the right moment of engagement. And we do it using our knowledge of our customers, markets and the user journey – all powered by our innovation, creativity and A-to-Z support.
<br><br>
We focus on three pillars of business: Merchant Services, Financial Services including equensWorldline and Mobility & e-Transactional Services. Our team has grown to more than 11,000 people worldwide, with estimated pro forma revenue of circa 2.3 billion euros on a yearly basis.

Worldline formulates systems and solutions that ensure seamless execution for both our clients and their customers. A great end user experience is our mandate, and you have certainly seen us working for you in your every day life – from withdrawal of money to paying for your meals at a restaurant. If you purchased tickets online, you used our systems to do so. If you used an online payment system to shop, we were right there with you. We are proud to deliver a value-added experience to consumers around the world. Here are just a few of the places where you may have already encountered Worldline.

Our 45-year history has been written by the motivation and involvement of our employees. Since 1973, we have grown into an enterprise that helps companies provide their clients with innovative  and top-of-the-line services, worldwide.

</p>
 </div>

 <style>
 .footer
  {
   position: fixed;
   bottom: 0px;
   left: 0px;
   width: 100%;
   background-color: #7C838B;
   padding: 7px;
   text-align: center;
   font-size: 20px;
}


 </style>

<footer class="footer">

  Lets Stay in Touch<br><br>
  <i class="fa fa-facebook-official" style="font-size: 30px"></i> 
<i class="fa fa-twitter" style="font-size: 30px"></i>
<i class="fa fa-linkedin-square" style="font-size: 30px"></i>
 </footer>
</div>



</body>
</html>