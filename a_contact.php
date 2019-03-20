<?php
session_start();
if ($_SESSION['username'] == ''){
header('Location: index.php');
} 
?>

<!DOCTYPE html>
<html>
<title>Author Contact</title>
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
	background-color: #b2b2b2;
}
</style>
<body>
<!------------------------------------------------------------------------------------------------------------------------------------------>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card"  id="myNavbar">
    <a href="a_home.php" class="w3-bar-item w3-button w3-wide">HOME</a>
	<a>Welcome <?php
	echo  $_SESSION['username']; 
	?>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="a_about.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> ABOUT</a>
	  <a href="uploadfile.php" class="w3-bar-item w3-button"><i class="fa fa-book"></i> SUBMISSION</a>
      <a href="a_committee.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> COMMITTEE</a>
      <a href="a_payment.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PAYMENT</a>
      <a href="a_contact.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
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
  <a href="uploadfile.php" onClick="w3_close()" class="w3-bar-item w3-button">SUBMISSION</a>
  <a href="a_about.php" onClick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="a_committee.php" onClick="w3_close()" class="w3-bar-item w3-button">COMMITTEE</a>
  <a href="a_payment.php" onClick="w3_close()" class="w3-bar-item w3-button">PAYMENT</a>
  <a href="a_contact.php" onClick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>
<!------------------------------------------------------------------------------------------------------------------------------------------>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center w3-card w3-white">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a email:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Kedah, Malaysia</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +604 928 5051/5172/5132</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: ic_ict4t@uum.edu.my 
</p>
    <br>
   
   
    <!-- Image of location/map -->
	
    <img src="image/googlemap.png" class="w3-image" style="width:100%;margin-top:48px">
	
  </div>
</div>

<script>
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
