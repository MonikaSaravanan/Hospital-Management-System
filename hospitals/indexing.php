<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device width,initial-scale=1.0">
  <meta name="keywords" content="HOSPITAL,HOSPITAL.COM,HOSPITAL WEBSITE,MEDICAN">
  <meta name="description" content="World's N0.1 Trusted Hospital">
  <meta name="author" content="hospital.com">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="animate.css">
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
  <link href="nav.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>GlobalHospitals.com</title>
  <style>

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background: linear-gradient(to right, #66ccff 0%, #ffffff 100%);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: black;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.video-section{
  margin-top: 10px;
  width: 15%;
  margin:0 auto;
}
</style>
</head>
<body>

<header>
  <div class="menu">
    <div class="brand-name">
      <a href="index.html">
        <h2 class="animated flash">

          GLOBAL HOSPITALS</h2>
      </a>
    </div>
    <nav>
      <ul>
        <li><a href="indexing.php">Home</a></li>
        <li><a href="gallery1.html">Gallery</a></li>
        <li><a href="registrationpat.php">Register</a></li>
        <li><a href="logggin.php">Login</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
    </nav>
</header>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h2>
  <a href="doctor.php">Doctor</a>
  <a href="patient.php">Patient</a>

</h2>
</div>
<div id="main">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
</div>
<script>
function openNav() {
document.getElementById("mySidenav").style.width = "250px";
document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
document.getElementById("mySidenav").style.width = "0";
document.getElementById("main").style.marginLeft= "0";
}
</script>
<section>
  <div class="w-80" style="padding:0;">
  <div class="section-img">
    <div class="section-bg-box">
      <h1 class = "animated slideInLeft">Health Care Services</h1>
      <h2 class = "animated slideInRight">We care About your Health</h2>
    </div>
  </div>
  <br/><br/>
  <h1 class = "welcometext">WELCOME TO HOSPITAL SERVICE</h1>
  <br/>
  <p>
    Global Hospitals is a network of hospital and healthcare in India founded in 1992 as an autonomous institiution to serve as a nucleus of nurtureing excellence in all aspects of health care.
  </p>
  <br/>

  <h1 class="welcometext">OUR OUTSTANDING SERVICES</h1>
  <h2>What We Offer!!</h2>

  <ul>
    <li>GYNACOLOGY</li>
    <li>HEALTH AND MEDICINE</li>
    <li>GENERAL MEDICINE</li>
    <li>PAEDIATRICS</li>

  </ul>

  	<br/>
  	<h1 class="welcometext" style= "width:25% ">About Us</h1>
  	<br/>
  	<h2>Best Medical & Health care Needs to Our Patients..</h2>
  	<div class="about-box">
  		<div>
        <p>
          Twenty clinical departments including four super speciality centres manage all type of disease conditions with suppport from pre and para clinical departments.However burn cases, patient suffering from infectious diseases are not entertained by us.We also manages a 60-beded hospital in the Comprehensive Rural Health Centre in Delhi and pprovides health cover overto about 2.5 lakh population through the Centre of Community Medicine.
        </p>
  		</div>
  		<div>
        <video width="100%" height="20%" controls >
          <source src="VID-20200930-WA0033.mp4"type="video/mp4">
        </video>
  		</div>
    </div>

  </section>

  <footer>
  	<div class="w-80">
  		<div class="footer-box">
   		<h2>Services</h2>
   		<a href="#">HEALTH AND MEDICINE</a>
   		<a href="#">GYNACOLOGY</a>
   		<a href="#">PAEDIATRICS</a>
   		<a href="#">GENERAL MEDICINE</a>
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
