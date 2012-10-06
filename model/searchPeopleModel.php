<?php
	class SearchPeople
	{
		function search($user)
		{
			include("../connect.php");
	
			if(strpos($user,"@") > -1)
			{
				$sql = "SELECT usr_id, usr_fname, usr_lname, usr_image, ut_id, usr_country FROM user WHERE usr_pemail='".$user."'";
			}
			else
			{
				$sql = "SELECT usr_id, usr_fname, usr_lname, usr_image, ut_id, usr_country FROM user WHERE usr_fname='".$user."' OR usr_lname='".$user."'";
			}
			
			$array = array("uid","fname","lname","image");
			$ut_id = array();
			$user = array();			
			$ut_name = array();
			
			$country_id = array();			
			$country_name = array();			
			
			$result = mysqli_query($con,$sql);	

			//creates a 2d array	with fname, lname and email.
			while($row = mysqli_fetch_array($result))
			{
				$array['uid'][] = $row[0];
				$array['fname'][] = $row[1];
				$array['lname'][] = $row[2];
				$array['image'][] = $row[3];
				$ut_id[] = $row[4];
				$country_id[] = $row[5];
			}
			
			$len = mysqli_num_rows($result);
			
			for($i = 0; $i < count($ut_id); $i++)
			{
				$sql = "SELECT ut_name FROM usertype WHERE ut_id=".$ut_id[$i];
				$result = mysqli_query($con,$sql);
				
				$row = mysqli_fetch_array($result);
				$ut_name[] = $row[0];	
			}
			
			
			for($i = 0; $i < count($country_id); $i++)
			{
				$sql = "SELECT country_name FROM countries WHERE country_id=".$country_id[$i];
				$result = mysqli_query($con,$sql);
				
				$row = mysqli_fetch_array($result);
				$country_name[] = $row[0];	
			}
		/*	for($i = 0; $i < count($ut_name);$i++)
			{
				echo $ut_name[$i];	
			}*/
			
			
			session_start();
			$_SESSION['list'] = $array;
			$_SESSION['length'] = $len;
			$_SESSION['usertype'] = $ut_name;
			$_SESSION['country'] = $country_name;
			
			//echo count($ut_name);
			/*for($i=0;$i < count($ut_name);$i++)
			{
				echo $ut_name[$i];
			}	*/		
			
			header("Location: ../view/searchPeopleResults.php");
	
			mysqli_close();
			
		}
	}
?>