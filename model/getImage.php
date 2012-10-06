<?php
	include("../connect.php");
	
	$uid = $_SESSION['uid'];	
	
	$sql = "SELECT usr_image FROM user WHERE usr_id=".$uid;
	$result = mysqli_query($con,$sql);
	
	$row = mysqli_fetch_array($result);
	$image = $row[0];
?>