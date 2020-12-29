<?php
include("loggin.php");
 ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device width,initial-scale=1.0">
  <meta name="keywords" content="HOSPITAL,HOSPITAL.COM,HOSPITAL WEBSITE,MEDICAN">
  <meta name="description" content="World's N0.1 Trusted Hospital">
  <meta name="author" content="hospital.com">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="">
  <link rel="stylesheet" type="text/css" href="animate.css">z

  <title>GlobalHospitals.com</title>
</head>
<body>
<header>

  <div class="menu">
    <div class="brand-name">
      <a href="index.html">
        <h2 class="animated flash">
          <i class = "hospitalp"></i>&nbsp;
          GLOBAL HOSPITALS</h2>
      </a>
    </div>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="gallery1.html">Gallery</a></li>
        <li><a href="register.html">Register</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
    </nav>
</header>


<!-- End Header Coding-->
<!-- Start Section Coding-->
<section>
 <div class="w-80">
     <div class="form-box">
       <h1>User Login Page</h1>
       <hr>
       <form method="post" action="login1.php">
       <label for="Username"><b>Username :</b></label><br/>
       <input type="varchar" name="Username" id="Username" />
       <br/><br/>


       <label for="Password"><b>Password :</b></label>
       <br/>
       <input type="Password" name="Password" id="Password" />
       <br/><br/>


       <button type="Submit" name="Submit">Submit</button>

     </form>
     </div>
    </div>

    <?php
       if(isset($_POST['Submit']))
       {
         $Username = $_POST['Username'];
         $Password = $_POST['Password'];
         $result = mysqli_query($mysqli,"INSERT INTO userlogin(Username,Password) VALUES('$Username','$Password')");
        if($result)
        {
          echo "Success";
        }
        else
        {
          echo"Failed";
        }
  }

     ?>
</section>
<!-- End Section Coding-->
<!-- Start Footer Coding-->
<footer>
 <div class="w-80">
   <div class="footer-box">
     <h2>Services</h2>
     <a href="#">HEPATOLOGY</a>
     <a href="#">MEDICAL DRESSAGE</a>
     <a href="#">LABORATORY</a>
     <a href="#">VACCINATIONS</a>
     <a href="#">WHITENING</a>
   </div>
   <div class="footer-box">
     <h2>About Us</h2>
     <a href="#">Company Overview</a>
     <a href="#">Management</a>
     <a href="#">Initiatives</a>
     <a href="#">Carrers</a>
     <a href="#">Our Doctors Achieve</a>
   </div>
   <div class="footer-box">
     <h2>Contact Us</h2>
     <a href="#">Post a Query</a>
     <a href="#">Global Clinics</a>
     <a href="#">Global Hospitals</a>
     <a href="#">Global Cradle</a>
     <a href="#">Ask Question</a>
   </div>
  <img src="https://static.toiimg.com/thumb/msid-72275095,width-800,height-600,resizemode-75,imgsize-419574,pt-32,y_pad-40/72275095.jpg" alt="Doc" height=25% width=25%>

 </div>


</footer>
<!-- End footer Coding-->
</body>
</html>
