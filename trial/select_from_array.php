<?php
	include("../connect.php");

	//$gen = array(1,2,3);	
	//$g = implode(",",$gen);
	
	
	//$ut = array('usertype');
	$ut = array();
	$ut_name = array();
	$user = array();
	$sql1 = "SELECT ut_id FROM user";
	
	//echo $sql."<br><br>";
	//echo $g;
	$result = mysqli_query($con,$sql1);
	
	while($row = mysqli_fetch_array($result))
	{
		$ut[] = $row[0];
	}
	
	/*$len = mysqli_num_rows($result);
	
	for($i = 0; $i < $len; $i++)
	{
		echo $ut[$i];	
	}*/
	
	$usertype = implode(",",$ut);
	
	//echo $usertype;
	
	$sql1 = "SELECT ut_name FROM usertype WHERE ut_id in (".$usertype.")";
	
	//echo $sql."<br><br>";
	//echo $g;
	$result = mysqli_query($con,$sql1);
	
	while($row = mysqli_fetch_array($result))
	{
		$user[] = $row[0];
	}
	
	//echo $sql1."  ".count($user);
	
	for($i=0; $i < count($ut); $i++)
	{
		$ut_name[] = $user[$ut[$i]-1]."<br />";	
	}	
	
?>