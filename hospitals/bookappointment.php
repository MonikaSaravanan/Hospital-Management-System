<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device width,initial-scale=1.0">
	<meta name="keywords" content="HOSPITAL,HOSPITAL.COM,HOSPITAL WEBSITE,MEDICAN">
	<meta name="description" content="World's N0.1 Trusted Hospital">
	<meta name="author" content="hospital.com">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<title>Book Appointment</title>
	<link rel="stylesheet" href="style.css">
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
	</header><br><br>

<div class="wrapper">
    <div class="title">
      Book Appointment
    </div>
    <div class="form">
			<form action="bookappointment.php" method="post">

       <div class="inputfield">
          <label>Patient Name</label>
          <input type="text" name="patname" id="patname" class="input" />
       </div>
        <div class="inputfield">
          <label>Patient Id</label>
          <input type="number" name="patid" id="patid" class="input" />
       </div>
      <div class="inputfield">
          <label>Appointment Date</label>
          <input type="Date" name="appdate" id="appdate" class="input">
       </div>

        <div class="inputfield">
						<label>Doctor ID</label>
	          <input type="number" name="docid" id="docid" class="input" />
          </div>


      <div class="inputfield">
          <label>Phone Number</label>
          <input type="number" name="phno" id="phno" class="input">
       </div>

      <div class="inputfield">
          <label>Reason for consultation</label>
          <textarea class="textarea" name="reason" id="reason"></textarea>
       </div>

      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div>
      <div class="inputfield">
        <input type="submit" value="Book-Appointment" class="btn">
      </div>
    </div>
</div>
</form>


<?php
$dbhost='localhost';
$dbname='hospitals';
$dbusername='root';
$dbpass='';
$mysqli=mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
$patname = $patid = $appdate = $docname = $phno = $reason = '';

	 if(isset($_POST['Book-Appointment'])){
		 echo "Retry";
	 }
	 else {
		 $patname = $_POST['patname'];
		 $patid = $_POST['patid'];
		 $appdate = $_POST['appdate'];
		 $docid = $_POST['docid'];
		 $phno = $_POST['phno'];
		 $reason = $_POST['reason'];
		 $result = mysqli_query($mysqli,"INSERT INTO appointments(patname,patid,appdate,docid,phno,reason) VALUES('$patname','$patid','$appdate','$docid','$phno','$reason')");
		 if($result)
		{
			echo "Your appointment is booked successfully";
		}
		else
		{
			echo "Failed";
   }
 }
 ?>
</body>
</html>
