<?php

	include_once("../model/User.php");
	
	$emailid = $_POST['txtemail'];
	$password = $_POST['txtpassword'];	
		
	 
	$u = new User($emailid,$password);
	$details = $u->display();
	
	//echo $details;
	
	/*echo $details[0];
	echo "<br />";
	echo $details[1];*/
	
	header("Location: ../view/details.php?emailid=".$details[0]."&password=".$details[1]);

?>