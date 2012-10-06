<?php
	
	include("../connect.php");
	
	$user = $_SESSION['uid'];	

	//$friend = $_SESSION['friend'];
	
	$sql = "SELECT con_to FROM connections WHERE usr_id=".$user." AND con_status = 1";
	$result = mysqli_query($con,$sql);
	
	$connections = mysqli_num_rows($result);
	
	$sql = "SELECT usr_id FROM connections WHERE con_to=".$user." AND con_status=2";
	$result = mysqli_query($con,$sql);
	
	$requests = mysqli_num_rows($result);
?>