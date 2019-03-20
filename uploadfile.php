<?php 
session_start();
if ($_SESSION['username'] == ''){
header('Location: index.php');
} 

require_once('connect.php');
if(isset($_FILES) & !empty($_FILES)){
	$name=$_FILES['fileupload']['name'];
	$size=$_FILES['fileupload']['size'];
	$type=$_FILES['fileupload']['type'];
	$tmp_name=$_FILES['fileupload']['tmp_name'];
}

$location="uploads/";
if(isset($name) & !empty($name)){
	if($type == "image/jpeg" || "."){
		if(move_uploaded_file($tmp_name, $location.$name)){
			$sql = "INSERT INTO `uploadfile` (name, size, type, location) VALUES ('$name', '$size', '$type', '$location$name')";
			$res = mysqli_query($connection, $sql);
			if ($res){
				echo "uploaded successfully";
			}
		}else{
			echo "Failed to upload";
		}
	}
	
}
?>

<!DOCTYPE html>
<html>
<title>Author pages</title>
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
	background-color: #b2b2b2;
}
</style>
</head>

<body>
<!------------------------------------------------------------------------------------------------------------------------------------------>
<!-- Navbar (sit on top) -->
<div class="w3-top">
 <div class="w3-bar w3-black w3-card" id="myNavbar">
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
  <a href="uploadfile.php" onClick="w3_close()" class="w3-bar-item w3-button">AUTHOR</a>
  <a href="a_about.php" onClick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="a_committee.php" onClick="w3_close()" class="w3-bar-item w3-button">COMMITTEE</a>
  <a href="a_payment.php" onClick="w3_close()" class="w3-bar-item w3-button">PAYMENT</a>
  <a href="a_contact.php" onClick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>
<!------------------------------------------------------------------------------------------------------------------------------------------>


<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center w3-card w3-white">UPLOAD FILE</h3>
   <div class="w3-row-padding" style="margin-top:64px">
   
	   <table width="200" border="1" align="center">
		  <tr class="w3-black">
			<td height="51"><b>Upload File here:</b></td>
		  </tr>
		  <tr class="w3-white">
			<td>
				<div class="container" style="padding:70px 10px">
					<div class="row">
						 <form class="col-md-6 col-md-offset-3" method="post" enctype="multipart/form-data">
						  <div class="form-group">
							<label for="exampleInputFile">File input</label>
							<input type="file" name="fileupload" id="exampleInputFile">
							<p class="help-block">Upload your paper here.</p>
						  </div>
						  <button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
				</div>
			</td>
		  </tr>
		</table>

	</div>
</div>
</body>
</html>
