<?php

			$con = mysqli_connect("localhost","subhash","subhash","schoolbook");
			//mysql_select_db("schoolbook",$con);
			if(mysqli_connect_error($con))
			{
    			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}


			$sql = "SELECT country_id FROM countries WHERE country_name='india'";
			$result = mysqli_query($con,$sql);
			if(!$result)
			{
				echo ":-(";	
			}
			else
			{
				while($country_id = mysqli_fetch_array($result))
				{
					$country = $country_id[0];
				}
			}
			echo "<br /> country = ".$country;

			$sql = "SELECT ut_id FROM usertype WHERE ut_name='faculty'";
			$result = mysqli_query($con,$sql);
			
			if(!$result)
			{
				echo "<br /> :-(";	
			}
			else
			{
				while($ut_id = mysqli_fetch_array($result))
				{
					$id = $ut_id[0];	
				}
			}
			echo "<br /> id = ".$id;		
			
			
			
			
/*			$result = mysqli_query($con,"SELECT * FROM user");
			while($row = mysqli_fetch_array($result))
			{
				echo $row[0];
			} */
			
/*			$sql = "INSERT INTO user(usr_fname,usr_lname,usr_password,usr_pemail,usr_country,ut_id) values('subhash','kataria','subhash','subhash12345@gmail.com',".$country.",".$id.")";
				
				echo $sql;
				echo "<br />".$country;
				echo "<br />".$id;
			if(mysqli_query($con,$sql))
			{
				echo ":) inserted";	
			}
	*/

			//$sql = "INSERT INTO user(usr_fname, usr_lname, usr_password, usr_pemail, usr_semail, usr_mobile, usr_country, usr_website, usr_gender, ut_id) 
			//			VALUES ('subhash','kataria','subhash','subhash@yahoo.com','','9960841511',1,'','M',1)";
			//mysqli_query($con,$sql);
			
		/*	if(mysqli_query($con,$sql))
			{
				$sql = "SELECT usr_id FROM user WHERE usr_pemail='subhash1@gmail.com'";
				$id = mysqli_query($con,$sql);
				
				while($user_id = mysqli_fetch_array($id))
				{
					echo $user_id[0];	
				}
			 
				mysqli_close();
				
			}
			else 
			{
				mysqli_close();
				echo "<br /> -1";
			}
			*/

?>