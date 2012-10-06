<?php
	include("connect.php");
	
	$sql = "select * from profession";
	$result = mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result) > 0)
	{
		echo ":)";	
	}
	else
	{
		echo ":(";		
	}
	
	$row = mysqli_fetch_array($result);
	echo $row[1];
	//show();
	
	$sql = "INSERT INTO useredu(usr_id, edu_id, edu_field, edu_special, edu_skills, edu_interest) values(62,1,1,1,'java','pj')";
	mysqli_query($con,$sql);	
	
	
	function show() 
	{
		echo "hi";
		display();
	}
	
	function display() 
	{
		echo "hello";
	}
?>