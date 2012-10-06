<?php
	//session_start();
	include("../connect.php");
	
	$uid = $_SESSION['uid'];	
	
	$sql1 = "SELECT usr_id, usr_fname, usr_lname, usr_pemail ,ut_id, usr_image FROM user WHERE usr_id=".$uid;
	
	$sql2 = "SELECT edu_id, edu_field, edu_special, edu_skills, edu_interest FROM useredu1 WHERE usr_id=".$uid;
	
	$sql3 = "SELECT prof_field, prof_special, prof_interest, prof_exp, prof_id FROM userprof WHERE usr_id=".$uid;

	$user = array("id","fname","lname","email");
	//$education = array("edu_id","edu_field","edu_special","edu_skills","edu_interest");
	$education = array();
	$professional = array();
	//$professional = array("prof_field","prof_special","prof_interest","prof_exp","prof_id","prof_inst","org_id");
	$user_type = NULL;
	$degree = NULL;
	$flag_e = NULL;
	$flag_f = NULL;
	$field_e = NULL;
	$field_f = NULL;
	$special_e = NULL;
	$special_f = NULL;	
	$profession = NULL;
	$image = NULL;		
		
	$result = mysqli_query($con,$sql1);
	while($row = mysqli_fetch_array($result))
	{
		$user['id'][] = $row[0];
		$user['fname'][] = $row[1];
		$user['lname'][] = $row[2];
		$user['email'][] = $row[3];
		$user_type_id = $row[4];
		$image = $row[5];
	}
	
	if(isset($user_type_id))
	{
		$query = "SELECT ut_name FROM usertype WHERE ut_id=".$user_type_id;
		
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_array($result);
		
		$user_type = $row[0];		
	}		
	
	$result = mysqli_query($con,$sql2);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{ 
		
			$education["edu_id"][] = $row[0];
			$education["edu_field"][] = $row[1];
			$education["edu_special"][] = $row[2];
			//$education["edu_batch"][] = $row[4];
			//$education["edu_inst"][] = $row[5];
			$education["edu_skills"][] = $row[3];
			$education["edu_interest"][] = $row[4];
		}
		
		$sql = "SELECT edu_degree FROM education WHERE edu_id=".$education['edu_id'][0];
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0)
		{	
			$row = mysqli_fetch_array($result);
			$degree = $row[0];
		}
		
		$sql = "SELECT grp_cat_name FROM groupcategory WHERE grp_cat_id=".$education['edu_field'][0];
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0)
		{	
			$row = mysqli_fetch_array($result);
			$field_e = $row[0];			
		}
		
		$sql = "SELECT grp_subcat_name FROM groupsubcategory WHERE grp_subcat_id=".$education['edu_special'][0];
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0)
		{	
			$row = mysqli_fetch_array($result);
			$special_e = $row[0];			
		}
		
		$flag_e = 1;
	}
	else
	{
		$flag_e = 0;
		
		$special_e = "";
		//$education["edu_batch"][] = "";
		//$education["edu_inst"][] = "";
		$education["edu_skills"][] = "";
		$education["edu_interest"][] = "";
		$degree = "";
		$field_e = "";
	}
/*----------------------------------- professional--------------------------------*/
	
	$result = mysqli_query($con,$sql3);
	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_array($result))
		{
			$professional["prof_field"][] = $row[0]; 
			$professional["prof_special"][] = $row[1];
			$professional["prof_interest"][] = $row[2];
			$professional["prof_exp"][] = $row[3];
			$professional["prof_id"][] = $row[4];

		}

		$sql = "SELECT grp_cat_name FROM groupcategory WHERE grp_cat_id=".$professional['prof_field'][0];
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0)
		{	
			$row = mysqli_fetch_array($result);
			$field_e = $row[0];			
		}
		
		$sql = "SELECT grp_subcat_name FROM groupsubcategory WHERE grp_subcat_id=".$professional['prof_special'][0];
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0)
		{	
			$row = mysqli_fetch_array($result);
			$special_f = $row[0];			
		}		
		
		$sql = "SELECT prof_name FROM profession WHERE prof_id=".$professional['prof_id'][0];
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result) > 0)
		{	
			$row = mysqli_fetch_array($result);
			$profession = $row[0];			
		}		
		
		
		$flag_f = 1;
	}
	else
	{
		$flag_f = 0;
		
		$field_e = ""; 
		$special_f = "";
		$professional["prof_interest"][0] = "";
		$professional["prof_exp"][0] = "";
		$profession = "";
	}
	

	//echo mysqli_num_rows($result);

	/*$result = mysqli_query($con,$sql3);
	if(mysql_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{ 
			
		}
	}
	
	/*
	$len = mysqli_num_rows($result);
	//echo $len;
	
	$i = 0;
	echo count($user)."<br />";
	echo $user[0]." ".$user[1]." ".$user[2]." ".$user[3]."<br />";	
	
	while($i < $len)
	{
		echo $user['id'][$i]." ".$user['fname'][$i]." ".$user['lname'][$i]." ".$user['email'][$i];
		$i = $i + 1;
	}
	*/
	
?>