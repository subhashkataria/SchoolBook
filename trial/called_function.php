<?php
	function selectUserName($uid)
	{
		include("../connect.php");
		
		
		
					//$uid = $_SESSION['uid'];
					$sql = "SELECT usr_fname FROM user WHERE usr_id=".$uid;
					//echo $sql;
					$result = mysqli_query($con,$sql);
					
					echo mysqli_num_rows($result);
					
					while($row = mysqli_fetch_array($result)) 
					{
						echo "Welcome, ".$row[0];
					}
								
	}
?>