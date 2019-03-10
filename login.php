<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-image: url(image/bck.register.jpg);
	margin-left: 29.6px;
	margin-right: 29.6px;
	margin-top: 32px;
	margin-bottom: 32px;
}
-->
</style></head>

<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
	
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
	
	<select name="typeuser" class="typeuser">
		<option value="committee">Committee</option>
		<option value="author">Author</option>
  	</select>
	
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
	
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  
  <?php 
   
		  echo $typeuser;
		
		if($typeuser == "Committee"){
		header('location: c_home.php');
		}
		else if($typeuser == "Author"){
		header('location: a_home.php');
		}
		
?>

  
</body>
</html>