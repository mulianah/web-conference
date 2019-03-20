<?php
require('connect.php');
if(isset($_GET['id']) && !empty($_GET['id'])){
	$delsql="DELETE FROM `uploadfile` WHERE id=" . $_GET['id'];
	if(mysqli_query($connection, $delsql)){
		header("Location: view.php");
	}

else{
	header("Location: view.php");
}
}
?>