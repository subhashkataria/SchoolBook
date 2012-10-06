<?php
	
	
	class UserProfileClass
	{
		//variables for storing normal values.
		private $uid;
		private $degree;
		private $eduField;
		private $eduSpl;
		private $eduSkills;
		private $eduInterest;
		private $profField;
		private $profSpl;
		private $profInterest;
		private $profExp;
		private $profession;

		//variables for managing calling  of right function for updating or inserting values.
		private $eduflag;
		private $profflag;

		//counter variables.
		private $flag_e = 0;
		private $flag_e_field = 0;
		private $flag_e_spl = 0;
		
		private $flag_f = 0;
		private $flag_f_field = 0;
		private $flag_f_spl = 0;						
		
		//variables for storing different IDs.
		private $eduSpl_Id = NULL;
		private $eduField_Id = NULL;			
		
		private $profSpl_Id = NULL;
		private $profField_Id = NULL;
		
		private $edu_id = NULL;
		private $prof_id = NULL;				
		
		function __construct($eduflag,$profflag,$uid,$degree,$eduField,$eduSpl,$eduSkills,$eduInterest,$profField,$profSpl,$profInterest,$profExp,$profession)
		{
			$this->eduflag = $eduflag;
			$this->profflag = $profflag;			
			
			$this->uid = $uid;
			
			$this->degree = $degree; 
			$this->eduField = $eduField;
			$this->eduSpl = $eduSpl;
			$this->eduSkills = $eduSkills;
			$this->eduInterest = $eduInterest;			
			
			$this->profField = $profField;
			$this->profSpl = $profSpl;
			$this->profInterest = $profInterest;
			$this->profExp = $profExp;
			$this->profession = $profession;
			
		}
		
		function UserProfile()
		{
			require("../connect.php");			
			
			/*echo "<br>".$this->eduflag;
			echo "<br>".$this->profflag;
			echo "<br>".$this->uid;
			echo "<br>".$this->degree;
			echo "<br>".$this->eduField;
			echo "<br>".$this->eduSpl;
			echo "<br>".$this->eduSkills;
			echo "<br>".$this->eduInterest;
			echo "<br>".$this->profField;
			echo "<br>".$this->profSpl;
			echo "<br>".$this->profInterest;
			echo "<br>".$this->profExp;
			echo "<br>".$this->profession;*/			
			
			
			//Educational
			echo "education <br><br><br>";
			$sql = "SELECT edu_id FROM education WHERE edu_degree = '".$this->degree."'";
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result) > 0)
			{
				//echo "degree found <br>";
				$row = mysqli_fetch_array($result);
				$this->edu_id = $row[0];
				$this->flag_e = 1;
				//echo $edu_id;
			}
			else
			{
				//echo "degree not found -- inserting<br>";
				//echo $this->degree;
				$sql = "INSERT INTO education(edu_degree) VALUES('$this->degree')";
				mysqli_query($con,$sql); 	
			}
			
			if($this->flag_e == 0)
			{
				//echo "degree retriving <br>";
				$sql = "SELECT edu_id FROM education WHERE edu_degree = '$this->degree'";
				$result = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($result);
				$this->edu_id = $row[0];
				
			}
			
			//retrieving group category id
			$sql = "SELECT grp_cat_id FROM groupcategory WHERE grp_cat_name = '$this->eduField'";
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result) > 0)
			{
					//echo "group category found <br>";
					$row = mysqli_fetch_array($result);
					$this->eduField_Id = $row[0];
					$this->flag_e_field = 1;
			}
			else
			{
				//echo "group category not found -- inserting <br>";
				$sql = "INSERT INTO groupcategory(grp_cat_name) VALUES('$this->eduField')";
				mysqli_query($con,$sql); 	
			}
			
			if($this->flag_e_field == 0)
			{
				//echo "group category retriving <br>";
				$sql = "SELECT grp_cat_id FROM groupcategory WHERE grp_cat_name = '$this->eduField'";
				$result = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($result);
				$this->eduField_Id = $row[0];
			}			
			//----------------------------------------------/
			
			//retrieving group sub category id
			$sql = "SELECT grp_subcat_id FROM groupsubcategory WHERE grp_subcat_name = '$this->eduSpl'";
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result) > 0)
			{
				//echo "group sub category found <br>";
				$row = mysqli_fetch_array($result);
				$this->eduSpl_Id = $row[0];
				$this->flag_e_spl = 1;
			}
			else
			{
				//echo "group sub category not found -- inserting <br>";
				$sql = "INSERT INTO groupsubcategory(grp_cat_id,grp_subcat_name) VALUES('$this->eduField_Id','$this->eduSpl')";
				mysqli_query($con,$sql); 	
			}
			
			if($this->flag_e_spl == 0)
			{
				//echo "group sub category retriving <br>";
				$sql = "SELECT grp_subcat_id FROM groupsubcategory WHERE grp_subcat_name = '".$this->eduSpl."'";
				$result = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($result);
				$this->eduSpl_Id = $row[0];
			}
			//----------------------------------------------/

			//Professional

			echo "<br><br><br>professional <br><br>";
			$sql = "SELECT prof_id FROM profession WHERE prof_name='$this->profession'";
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result) > 0)
			{
				//echo "profession found <br>";
				$row = mysqli_fetch_array($result);
				$this->prof_id = $row[0];
				$this->flag_f = 1;
			}
			else
			{
				//echo "profession not found -- inserting <br>";
				$sql = "INSERT INTO profession(prof_name) VALUES('$this->profession')";
				mysqli_query($con,$sql); 	
			}
			
			if($this->flag_f == 0)
			{
				//echo "profession retriving <br><br>";
				$sql = "SELECT prof_id FROM profession WHERE prof_name = '$this->profession'";
				$result = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($result);
				$this->prof_id = $row[0];
			}			
			
			//retrieving group category id
			$sql = "SELECT grp_cat_id FROM groupcategory WHERE grp_cat_name = '$this->profField'";
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result) > 0)
			{
				//echo "group category found <br>";
				$row = mysqli_fetch_array($result);
				$this->profField_Id = $row[0];
				$this->flag_f_field = 1;
			}
			else
			{
				//echo "group category not found -- inserting <br>";
				$sql = "INSERT INTO groupcategory(grp_cat_name) VALUES('".$this->profField."')";
				mysqli_query($con,$sql); 	
			}
			
			if($this->flag_f_field == 0)
			{
				//echo "group category retriving <br><br>";
				$sql = "SELECT grp_cat_id FROM groupcategory WHERE grp_cat_name = '".$this->profField."'";
				$result = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($result);
				$this->profField_Id = $row[0];
			}			
			//----------------------------------------------/
			
			//retrieving group sub category id
			$sql = "SELECT grp_subcat_id FROM groupsubcategory WHERE grp_subcat_name = '$this->profSpl'";
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result) > 0)
			{
				//echo "group sub category found <br>";
				$row = mysqli_fetch_array($result);
				$this->profSpl_Id = $row[0];
				$this->flag_f_spl = 1;
			}
			else
			{
				//echo "group sub category not found -- inserting <br>";
				$sql = "INSERT INTO groupsubcategory(grp_cat_id,grp_subcat_name) VALUES('$this->profField_Id','$this->profSpl')";
				mysqli_query($con,$sql);
			}
			
			if($this->flag_f_spl == 0)
			{
				//echo "group sub category retriving <br><br>";
				$sql = "SELECT grp_subcat_id FROM groupsubcategory WHERE grp_subcat_name = '$this->profSpl'";
				$result = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($result);
				$this->profSpl_Id = $row[0];
			}


			/*echo "Correct";
			if($con != NULL)
			{
				echo "1";	
			}
			else
			{
				echo "0";	
			}*/
			
			$e = NULL;
			$f = NULL;			
						
			
			if($this->eduflag == 0)
			{
				$this->insert_useredu();
				$e = "i";
			}
			else
			{
				$this->update_useredu();
				$e = "u";
			}
			
			if($this->profflag == 0)
			{
				$this->insert_userprof();	
				$f = "i";
			}
			else
			{
				$this->update_userprof();
				$f = "u";
			}

			//header("Location: ../view/userprofile.php?e=".$e."&f=".$f);
			header("Location: ../view/edit_userprofile.php");
		}		

		function update_useredu()
		{
			include("../connect.php");
			
			//echo "update edu <br>";
			//echo $this->eduField_Id;
			$sql = "UPDATE useredu1 set edu_id='$this->edu_id', edu_field='$this->eduField_Id', edu_special='$this->eduSpl_Id', edu_skills='$this->eduSkills', edu_interest='$this->eduInterest' WHERE usr_id='$this->uid'";
			//echo $sql."<br />";
			mysqli_query($con,$sql);	
		}
		
		function insert_useredu()
		{
			include("../connect.php");
			
			//echo "insert edu <br>";
			$sql = "INSERT INTO useredu1(usr_id, edu_id, edu_field, edu_special, edu_skills, edu_interest) values('$this->uid', '$this->edu_id', '$this->eduField_Id', '$this->eduSpl_Id', '$this->eduSkills', '$this->eduInterest')";
			//echo $sql."<br />";
			mysqli_query($con,$sql);
		}

		function update_userprof()
		{
			include("../connect.php");
			
			//echo "update prof <br>";
			$sql = "UPDATE userprof set prof_field='$this->profField_Id', prof_special='$this->profSpl_Id', prof_interest='$this->profInterest', prof_exp='$this->profExp', prof_id='$this->prof_id' WHERE usr_id='$this->uid'";
			//echo $sql."<br />";
			mysqli_query($con,$sql);	
		}

		function insert_userprof()
		{
			include("../connect.php");
			
			//echo "insert prof <br>";
			$sql = "INSERT INTO userprof(usr_id, prof_field, prof_special, prof_interest, prof_exp, prof_id) values('$this->uid', '$this->profField_Id', '$this->profSpl_Id', '$this->profInterest', '$this->profExp', '$this->prof_id')";
			//echo $sql."<br />";
			mysqli_query($con,$sql);	
		}
	
	}
	
	
?>