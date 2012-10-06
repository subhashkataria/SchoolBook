<?php
	$arr = explode("/",$_SERVER['HTTP_REFERER']);
	echo $arr[count($arr)-1];
	
	$array = array("uid","fname","lname","email");	

	//creates a 2d array	with fname, lname and email.
	$i = 0;
	while($i < 5)
	{
		$array['uid'][] = $i;
		$array['fname'][] = $i;
		$array['lname'][] = $i;
		$array['email'][] = $i;
		
		$i = $i+1;
	}
	
	echo "<br />". count($array);
	
	echo "<br /><br />";
	
	$i = 0;
	while($i < count($array))
	{
		echo $array['uid'][$i]."  ".$array['fname'][$i]."  ".$array['lname'][$i]."  ".$array['email'][$i]."<br />";
		
		$i = $i+1;
	}
	
?>