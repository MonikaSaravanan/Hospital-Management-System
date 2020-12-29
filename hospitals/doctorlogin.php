<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device width,initial-scale=1.0">
  <meta name="keywords" content="HOSPITAL,HOSPITAL.COM,HOSPITAL WEBSITE,MEDICAN">
  <meta name="description" content="World's N0.1 Trusted Hospital">
  <meta name="author" content="hospital.com">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="">
  <link rel="stylesheet" type="text/css" href="animate.css">

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
<h1><center> VIEW DOCTORS</center></h1>
<table border = 1><center>
  <tr>
    <th>DOCTOR ID</th>
    <th>DOCTOR NAME</th>
    <th>QUALIFICATION</th>
    <th>DEPARTMENT</th>
    <th>DESIGNATION</th>
    <th>EXPERIENCE</th>
</tr>
<?php

 $conn = mysqli_connect("localhost","root","","hospitals");
 $query = "SELECT * FROM doctorlogin ";
 global $conn;
 $result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){
?>
<tr>
    <th><?php echo $row['doctorid'] ;?></th>
    <th><?php echo $row['doctorname'];?></th>
    <th><?php echo $row['qualification'];?></th>
    <th><?php echo $row['department'];?></th>
    <th><?php echo $row['designation'];?></th>
    <th><?php echo $row['experience'];?></th>
</tr>
</center>
<?php
}
?>


 <!-- End footer Coding-->
 </body>
 </html>
