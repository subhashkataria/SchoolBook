<?php
		//session_start();
		function select_User_Name($uid)
		{
			//$uid = $_SESSION['uid'];
			include("../connect.php");
			$sql = 'SELECT usr_fname FROM user WHERE usr_id='.$uid;
			
			//echo $sql;
			
			$result = mysqli_query($con,$sql) or die(mysql_error());
			
			while($row = mysqli_fetch_array($result)) 
			{
				$str = "Welcome, ".$row[0];
				//echo $str;
			}
			//echo $uid;			
			
			return $str;
			
		}
?>