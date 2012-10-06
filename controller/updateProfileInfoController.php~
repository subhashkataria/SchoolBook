<?php

	

	
	session_start();
	$uid = $_SESSION['uid'];


	$eduflag = NULL;
	$profflag = NULL;
	
	$degree = NULL;
	$eduField = NULL;
	$eduSpl = NULL;
	$eduSkills = NULL;
	$eduInterest = NULL;
	$profField = NULL;
	$profSpl = NULL;
	$profInterest = NULL;
	$profExp = NULL;
	$profession = NULL;


	$flag_e = 1;
	$flag_f = 1;


	//Educational Information
	if($_POST['txteduflag'] == 0)
	{
		$flag_e = 0;
	}
	if($_POST['txtprofflag'] == 0)
	{
		$flag_f = 0;		
	}

	
	/*----------------------------------------------------------------*/
	
	//Authentication of Educational Details
		
	//Educational Degree
	if($_POST['txtdegree'] != "")
	{
		$degree = $_POST['txtdegree'];
	}
	else
	{
		$degree = "";
	}
	
	//Educational Field
	if($_POST['seledufield'] == "-1" && $_POST['txtedufield']=="")
	{
		$eduField = "";
	}
	else if($_POST['seledufield'] == "-1" && $_POST['txtedufield']!="")
	{
		$eduField = $_POST['txtedufield'];
	}
	else if($_POST['seledufield'] == "other" && $_POST['txtedufield']=="")
	{
		$eduField = $_POST['txtedufield'];
		//echo $eduField;
	}
	else if($_POST['seledufield'] == "other" && $_POST['txtedufield']!="")
	{
		$eduField = $_POST['txtedufield'];
		//echo $eduField;
	}
	else
	{
		$eduField = $_POST['seledufield'];
	}
	//echo $_POST['txtedufield']."-------";
	
	
	//Educational Specialisation
	if($_POST['seleduspl'] == "-1" && $_POST['txteduspl'] == "")
	{
		$eduSpl = "";
	}
	else if($_POST['seleduspl'] == "-1" && $_POST['txteduspl'] != "")
	{
		$eduSpl = $_POST['txteduspl'];
	}
	else if($_POST['seleduspl'] == "other" && $_POST['txteduspl'] == "")
	{
		$eduSpl = $_POST['txteduspl'];
	}
	else if($_POST['seleduspl'] == "other" && $_POST['txteduspl'] != "")
	{
		$eduSpl = $_POST['txteduspl'];
	}
	else //if($_POST['seleduspl'] != "-1" && $_POST['seleduspl'] != "other")
	{
		$eduSpl = $_POST['seleduspl'];
	}
	
	
	//Educational Skills
	if($_POST['txteduskills'] != "")
	{
		$eduSkills = $_POST['txteduskills'];
	}
	else
	{
		$eduSkills = "";
	}
	
	//Educational Interest
	if($_POST['txteduinterest'] != "")
	{
		$eduInterest = $_POST['txteduinterest'];
	}
	else
	{
		$eduInterest = "";
	}
	

	/*-----------------------------------------------------------------*/
	
	
	//Authentication of Professional Details
	
		
	
	//Proffessional Field
	if($_POST['selproffield'] == "-1" && $_POST['txtproffield'] == "")
	{
		$profField = "";
	}
	else if($_POST['selproffield'] == "-1" && $_POST['txtproffield'] != "")
	{
		$profField = $_POST['txtproffield'];
	}
	else if($_POST['selproffield'] == "other" && $_POST['txtproffield'] == "")
	{
		$profField = $_POST['txtproffield'];
	}
	else if($_POST['selproffield'] == "other" && $_POST['txtproffield'] != "")
	{
		$profField = $_POST['txtproffield'];
	}
	else
	{
		$profField = $_POST['selproffield'];
	}
	
	
	//Proffessional  Specialisation
	if($_POST['selprofspl'] == "-1" && $_POST['txtprofspl'] == "")
	{
		$profSpl = "";	
	}
	else if($_POST['selprofspl'] == "-1" && $_POST['txtprofspl'] != "")
	{
		$profSpl = $_POST['txtprofspl'];	
	}
	else if($_POST['selprofspl'] == "other" && $_POST['txtprofspl'] == "")
	{
		$profSpl = $_POST['txtprofspl'];
	}
	else if($_POST['selprofspl'] == "other" && $_POST['txtprofspl'] != "")
	{
		$profSpl = $_POST['txtprofspl'];
	}
	else
	{
		$profSpl = $_POST['selprofspl'];
	}
	
	//Proffessional Interest
	if($_POST['txtprofinterest'] != "")
	{
		$profInterest = $_POST['txtprofinterest'];
	}
	else
	{
		$profInterest = "";
	}
	
	//Proffessional Experience
	if($_POST['txtexp'] != "")
	{
		$profExp = $_POST['txtexp'];
	}
	else
	{
		$profExp = "";
	}
	
	//Proffessional Profession
	if($_POST['selprofession'] == "-1" && $_POST['txtprofession'] == "")
	{
		$profession = "";	
	}
	if($_POST['selprofession'] == "-1" && $_POST['txtprofession'] != "")
	{
		$profession = $_POST['txtprofession'];	
	}
	else if($_POST['selprofession'] == "other" && $_POST['txtprofession'] == "")
	{
		$profession = $_POST['txtprofession'];
	}
	else if($_POST['selprofession'] == "other" && $_POST['txtprofession'] != "")
	{
		$profession = $_POST['txtprofession'];
	}
	else
	{
		$profession = $_POST['selprofession'];
	}
	
	
	$eduflag = $_POST['txteduflag'];
	$profflag = $_POST['txtprofflag'];
	
	//include("../model/InitializeVariableInClass_class.php");
	
	//$obj = new InitializeVariableInClass(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
	//$obj->display();

	/*echo "<br>".$eduflag;
	echo "<br>".$profflag;
	echo "<br>".$uid;
	echo "<br>".$degree;
	echo "<br>".$eduField;
	echo "<br>".$eduSpl;
	echo "<br>".$eduSkills;
	echo "<br>".$eduInterest;
	echo "<br>".$profField;
	echo "<br>".$profSpl;
	echo "<br>".$profInterest;
	echo "<br>".$profExp;
	echo "<br>".$profession;*/


	include("../model/updateProfileInfoModel.php");

	$userProfileObj = new UserProfileClass($eduflag, $profflag, $uid, $degree, $eduField, $eduSpl, $eduSkills, $eduInterest, $profField, $profSpl, $profInterest, $profExp, $profession);
	$userProfileObj->UserProfile();
?>