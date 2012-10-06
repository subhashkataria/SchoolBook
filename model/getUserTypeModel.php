<?php
	include("../connect.php");
	
	$uid = $_SESSION['uid'];	
	
	$sql1 = "SELECT ut_id FROM user WHERE usr_id=".$uid;
	
	$result = mysqli_query($con,$sql1);
	while($row = mysqli_fetch_array($result))
	{
		$user_type_id = $row[0];
	}
	
	if(isset($user_type_id))
	{
		$query = "SELECT ut_name FROM usertype WHERE ut_id=".$user_type_id;
		
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_array($result);
		
		$user_type = $row[0];		
	}
	
?>