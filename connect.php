<?php
	$con = mysqli_connect("localhost","subhash","subhash","schoolbook");
	
	if (mysqli_connect_errno($con))
	{
   	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>