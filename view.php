<?php
 session_start();
if ($_SESSION['username'] == ''){
header('Location: index.php');
} 

$id="";
$name="";
$size="";
$type="";
$location="";
$delete="";
 
 
require_once('connect.php');
$sql="SELECT * FROM `uploadfile`";
$res=mysqli_query($connection, $sql);
//echo("Error description: " . mysqli_error($connection));
//exit;


?>
 
<!DOCTYPE html>
<html>
<head>
<title>Committee Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 
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
	background-color:	#b2b2b2;
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
 
 <div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center w3-card w3-white">PAPER ACCEPT</h3>
   <div class="w3-row-padding" style="margin-top:30px">
<div class="container" style="padding:92">
    <div class="row">
         <table class="table">
            <tr class="w3-black">
                <th>S.No</th>
                <th>Name</th>
                <th>Size</th>
                <th>Type</th>
                <th>Download</th>
                <th>Delete</th>
            </tr>
                           
        <?php
        if (mysqli_num_rows($res) > 0) {
            while ($r = mysqli_fetch_assoc($res)) {
                ?>
            <tr class="w3-white">
              <th scope="row"><?php echo $r['id'] ?></th>
              <td><?php echo $r['name'] ?></td>
              <td><?php echo $r['size'] ?></td>
              <td><?php echo $r['type'] ?></td>
              <td><a href="<?php echo $r['location'] ?>">View</a></td>
              <td><a href="delete.php?id=<?php echo $r['id'] ?>" onClick="confirm('Are you sure?')">Delete</a></td>    
            </tr>
                <?php
            }
        }
        ?>
         </table>
    </div>
</div>
 
</body>
</html>