<?php
	include("../connect.php");


	$friend = $_GET['u'];

	$_SESSION['friend'] = $friend;
	

	$user = $_SESSION['uid'];
	
	$flag = 0;	
		
	$Already_friend = array();		
		
	$sql = "SELECT con_to FROM connections WHERE usr_id=".$user;
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result))
	{
		$Already_friend[] = $row[0];
	}
		
	
	for($i = 0; $i < count($Already_friend); $i++)
	{
		if($friend == $Already_friend[$i])
		{
			$flag = 2;			
		}
	}
	
	if($friend == $user)
	{
		$flag = 1;	
	}	
	
	$user_det = array('fname','lname','email');
	$image = NULL;
	$user_type_id = NULL;
	$sql1 = "SELECT usr_fname, usr_lname, usr_pemail , usr_image, ut_id FROM user WHERE usr_id=".$friend;
	$result = mysqli_query($con,$sql1);
	while($row = mysqli_fetch_array($result))
	{
		$user_det['fname'][] = $row[0];
		$user_det['lname'][] = $row[1];
		$user_det['email'][] = $row[2];
		$image = $row[3];
		$user_type_id = $row[4];
	}


	//$edu_id = NULL;
	$sql2 = "SELECT edu_id FROM useredu1 WHERE usr_id=".$friend;
	$result = mysqli_query($con,$sql2);
	while($row = mysqli_fetch_array($result))
	{
		$edu_id = $row[0];
	}
	
	
	$degree = NULL;
	$sql3 = "SELECT edu_degree FROM education WHERE edu_id=".$edu_id;
	$result2 = mysqli_query($con,$sql3);
	if(mysqli_num_rows($result2) > 0)
	{
		while($row = mysqli_fetch_array($result2))
		{
			$degree = $row[0];
		}
	}


	$special_id = NULL;
	$exp = NULL;
	$prof_id = NULL;
	
	$sql4 = "SELECT prof_special, prof_exp, prof_id FROM userprof WHERE usr_id=".$friend;
	$result = mysqli_query($con,$sql4);
	while($row = mysqli_fetch_array($result))
	{
		$special_id = $row[0];
		$exp = $row[1];
		$prof_id = $row[2];
	}
	
	
	$profession = NULL;
	$sql5 = "SELECT prof_name FROM profession WHERE prof_id=".$prof_id;
	$result = mysqli_query($con,$sql5);
	while($row = mysqli_fetch_array($result))
	{
		$profession = $row[0];		
	}
	
	$special = NULL;
	$sql6 = "SELECT grp_subcat_name FROM groupsubcategory WHERE grp_subcat_id=".$special_id;
	$result = mysqli_query($con,$sql6);
	while($row = mysqli_fetch_array($result))
	{
		$special = $row[0];		
	}	
	
	$user_type = NULL;
	$sql7 = "SELECT ut_name from usertype WHERE ut_id=".$user_type_id;
	$result = mysqli_query($con,$sql7);
	while($row = mysqli_fetch_array($result))
	{
		$user_type = $row[0];		
	}		
	
?>