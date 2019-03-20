<?php
session_start();
if ($_SESSION['username'] == ''){
header('Location: index.php');
} 
?>

<!DOCTYPE html>
<html>
<title>Committee About</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("image/Home2.png");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
body {
	background-color: 	#b2b2b2;
}
</style>
<body>
<!------------------------------------------------------------------------------------------------------------------------------------------>
<!-- Navbar (sit on top) -->
<div class="w3-top">
   <div class="w3-bar w3-black w3-card"  id="myNavbar">
    <a href="c_home.php" class="w3-bar-item w3-button w3-wide">HOME</a>
	<a>Welcome <?php
	echo  $_SESSION['username']; 
	?>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
	  <a href="view.php" class="w3-bar-item w3-button"><i class="fa fa-book"></i> PAPER ACCEPT</a>
      <a href="c_about.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> ABOUT</a>
      <a href="c_committee.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> COMMITTEE</a>
      <a href="c_payment.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PAYMENT</a>
      <a href="c_contact.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
	  <a href="logout.php" class="w3-bar-item w3-button">LOGOUT</a></div>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onClick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onClick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close</a>
  <a href="view.php" onClick="w3_close()" class="w3-bar-item w3-button">PAPER ACCEPT</a>
  <a href="c_about.php" onClick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="c_committee.php" onClick="w3_close()" class="w3-bar-item w3-button">COMMITTEE</a>
  <a href="c_payment.php" onClick="w3_close()" class="w3-bar-item w3-button">PAYMENT</a>
  <a href="c_contact.php" onClick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>
<!------------------------------------------------------------------------------------------------------------------------------------------>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class=" w3-row w3-container" style="margin-top:64px">
	<div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
      <h3>Committee</h3>
      <p>Patron: Paper & Proceeding</p>
	  <ol>
	  	<li>Assoc. Prof. Fadzilah Siraj</li>
	  	<li>Dr. Nafishah Othman</li>
	    <li>Dr. Nor Hazlyna Harun</li>
	    <li>Dr. Juhaida Binti Abu Bakar</li> 
	    <li>Dr. Hamirul 'Aini Hambali</li>
	  </ol>
    </div>

    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
      <h3>Topic And Track</h3>
      <p>Topics & Tracks:</p>
	  <ol>
	  	<li>Digital Economy</li>
		<li>Digital Inclusion</li>
		<li>Digital Content</li>
		<li>Universal Access and Service</li>
		<li>Internet of Things (IoT)</li>
		<li>Applications and Services</li>
	  </ol>
    </div>

    <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
      <h3>Important Date</h3>
	  <ol>
	  	<li>Paper Submission (Extended Deadline): </li>
		<p>31 July 2018</p>
		<li>Notification of Acceptance:</li>
		<p>30 June 2018</p>
		<li>Camera Ready:</li>
		<p>30 August 2018</p>
	  </ol>
    </div>

    <div class="w3-col l3 m6 w3-black w3-container w3-padding-16">
      <h3>Keynote</h3>
      <p><b>Invited Speaker I (Malaysia)</b></p>
	  	<li>Prof. Dr. Zulkhairi Md. Dahalin</li>
		<p style="text-align:center">(Universiti Utara Malaysia)</p>
	  <p><b>Invited Speaker II (Indonesia)</b></p>
	  	<li>Bapak Anang Achmad Latif</li>
		<p style="text-align:center">(President Director & CEO of BPPPTI (Balai Penyedia dan Pengelola Pembiayaan Telekomunikasi dan Informatika), Ministry of Communication and Information Technology of the Republic of Indonesia)</p>
    </div>
  </div>
</div>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
