<?php
class UserSignupModel
{

	private $firstname;
	private $lastname;
	private $emailid;
	private $password;
	private $profession;
	private $gender;
	private $mobile;
	private $country;
	private $altemailid;
	private $website;
	private $image;	
	
	function __construct($firstname,$lastname,$emailid,$password,$profession,$gender,$mobile,$country,$altemailid,$website)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->emailid	= $emailid;	
		$this->password = $password;
		$this->profession = $profession;
		$this->gender = $gender;
		$this->mobile = $mobile;
		$this->country = $country;
		$this->altemailid = $altemailid;
		$this->website = $website;
	}
	
	
	
	function signup()
	{
		
		/*echo $this->firstname."<br />";
		echo $this->lastname."<br />";
		echo $this->emailid."<br />";	
		echo $this->password."<br />";
		echo $this->profession."<br />";
		echo $this->gender."<br />";
		echo $this->mobile."<br />";
		echo $this->country."<br />";*/
		//echo $this->altemailid."<br />";
		//echo $this->website;*/		
		
			$con = mysqli_connect("localhost","subhash","subhash","schoolbook");
			
			if (mysqli_connect_errno($mysqli))
			{
    			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
	
			$sql = "SELECT country_id FROM countries WHERE country_name='".$this->country."';";
			echo "<br />".$sql;			
		

			if($this->gender == "M")
			{
				$this->image = "../images/male-symbol.jpg";	
			}
			else
			{
				$this->image = "../images/female-symbol.jpg";
			}
		
			
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

			$sql = "SELECT ut_id FROM usertype WHERE ut_name='".$this->profession."';";
			echo "<br />".$sql;			
			
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
	
	
			if($this->altemailid == NULL)
			{
				$sql = "INSERT INTO user(usr_fname, usr_lname, usr_image, usr_password, usr_pemail, usr_semail, usr_mobile, usr_country, usr_website, usr_gender, ut_id) VALUES ('$this->firstname', '$this->lastname', '$this->image', '$this->password', '$this->emailid', NULL, '$this->mobile', ".$country.", '$this->website', '$this->gender', ".$id.")";
			}
			else
			{
				$sql = "INSERT INTO user(usr_fname, usr_lname, usr_image, usr_password, usr_pemail, usr_semail, usr_mobile, usr_country, usr_website, usr_gender, ut_id) VALUES ('$this->firstname', '$this->lastname', '$this->image', '$this->password', '$this->emailid', '$this->altemailid', '$this->mobile', ".$country.", '$this->website', '$this->gender', ".$id.")";	
			}
			
			echo "<br />".$sql;
			if(mysqli_query($con,$sql))
			{
				$sql = "SELECT usr_id, usr_fname FROM user WHERE usr_pemail='".$this->emailid."'";
				
				echo "<br /><br />".$sql."<br /><br />";
				
				$id = mysqli_query($con,$sql);
				
				$row = mysqli_fetch_array($id);
			 
				mysqli_close();
				//echo $subs_id[0];
				session_start();
				$_SESSION['user_fname'] = $row[1]; 
				return ($row[0]);
				//echo "inserted";	
				//$_SESSION['user_name'] = $row[1];
				//header("Location: ../view/homepage.php");
			}
			else 
			{
				//echo "<br />buuurrr";
				mysqli_close();
				//echo "-1";
				return (-1);
			}
	}
}
?>