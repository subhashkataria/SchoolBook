<?php
	include("../connect.php");
	
	session_start();	
	
	$user = $_SESSION['uid'];
	$friend = $_SESSION['friend'];
	
	$sql = "INSERT into connections(usr_id, con_to, con_status) values(".$user.",".$friend.",2)";
	if(mysqli_query($con,$sql))
	{
		header("Location: ../view/profile.php?u=".$friend);	
	}
	//echo "user = ".$user."     friend = ".$friend;
?>