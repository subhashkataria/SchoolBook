<?php
	class UserSignin
	{
		private $emailid;
		private $password;
		function __construct($e,$p)
		{
			$this->emailid = $e;
			$this->password = $p;	
		}
		
		function signin()
		{
			/*echo $this->emailid;
			echo $this->password;*/
			include("../connect.php");
			
			$sql = "SELECT usr_id, usr_fname, usr_lname FROM user WHERE usr_pemail='".$this->emailid."' AND usr_password='".$this->password."'";
			$result = mysqli_query($con,$sql);
			//echo $sql;
			if(mysqli_num_rows($result) == 1)
			{
				session_start();
				while($row = mysqli_fetch_array($result))
				{
					$_SESSION['uid'] = $row[0];
					$_SESSION['user_fname'] = $row[1];
					$_SESSION['user_lname'] = $row[2];
					//echo $_SESSION['user_name'];
					header("Location: ../view/homepage.php");
				}
			}
			else
			{
				//echo "-1";
				header("Location: ../view/signin-signup.php?atmpt=-1");
			}
		} 
	}
	
?>