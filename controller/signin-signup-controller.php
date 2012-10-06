<?php
	
	if(isset($_POST['btnsignin']))	
	{
		include("../model/UserSigninModel.php");
		$emailid = $_POST['txtemailid'];
		$password = $_POST['txtpassword'];
		
		if($emailid != "" && $password != "")
		{
			$user = new UserSignin($emailid,$password);
			$user->signin();		
		}		
		else 
		{
			header("Location: ../view/signin-signup.php?error_in=1");
		}
		
	}
		
	else if(isset($_POST['btnsignup']))
	{
		
		include_once("../model/UserSignupModel.php");		
		
		$firstname = $_POST['txtfirstname'];
		$lastname = $_POST['txtlastname'];
		$emailid = $_POST['txtemailid'];
		$altemailid = $_POST['txtaltemailid'];
		$password = $_POST['txtpassword'];
		$confirmpassword = $_POST['txtconfirmpassword'];
		$profession = $_POST['usertype'];
		
		$mobile = $_POST['txtmobile'];
		$website = $_POST['txtwebsite'];
		$country = $_POST['country'];
	
		
	
		if($_POST['gender'] == -1)
		{
			header("Location: ../view/signin-signup.php?error_up=3");
		}
		else if($_POST['gender'] == "male") 
		{		
			$gender = "M";
		}
		else 
		{
			$gender = "F";
		}
		
		if($mobile == "")
		{
			$mobile = 'NULL';	
		}
		
		if($altemailid == "")
		{
			$altemailid = NULL;	
		}
		
		if($website == "")
		{
			$website = 'NULL';	
		}
		
		//validation for empty fields.
		if($firstname == "" || $lastname == "" || $emailid == "" || $password == "" || $profession == "-1" || $gender == "-1" || $country == "-1")
		{
			header("Location: ../view/signin-signup.php?error_up=1");
		}
		
		//validating Password.
		elseif($password != $confirmpassword) 
		{
			header("Location: ../view/signin-signup.php?error_up=2");
		}
				
		
		else 
		{ 
			$user = new UserSignupModel($firstname,$lastname,$emailid,$password,$profession,$gender,$mobile,$country,$altemailid,$website);
			$success = $user->signup();
			
			//a reffers to "id".
			if($success > -1)
			{
				session_start();
				
				$_SESSION['uid'] = $success;
				
				header("Location: ../view/homepage.php");
			}
			else 
			{
				header("Location: ../view/signin-signup.php?error_up=4");
			}
		}
	}
	
?>