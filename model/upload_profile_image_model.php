<?php

	session_start();

	$user = $_SESSION['uid'];

	include("../connect.php");

		

	if($_FILES['edit_image']['error'] > 0)
	{
			echo "Error".$_FILES['edit_image']['error']."<br />";
	}
	else 
	{

		$filename = $_FILES['edit_image']['name'];
		
		$tmp_path = $_FILES['edit_image']['tmp_name'];		
		
		$path = $_SERVER['DOCUMENT_ROOT'];		
		
		//echo "Upload: ".$_FILES['edit_image']['name']."<br />";
		//echo "Type: ".$_FILES['edit_image']['type']."<br />";
		//echo "Size: ".($_FILES['edit_image']['size']/1024)." kb <br />";
		//echo "Stored in: ".$_FILES['edit_image']['tmp_name'];
		
		//echo "<br /><br />".$path."/php/uploadFiles/image/".$filename;
		
		if(file_exists($path."/schoolbook/images/".$filename))
		{
			//echo "<br /><br />".$filename." already exists";
		}
		
		else 
		{
			//echo "<br /><br /><br />".$tmp_path."<br /><br /><br />";
			//echo "<br /><br /><br />".$path."/schoolbook/images/".$filename."<br /><br /><br />";
			
			
			move_uploaded_file($tmp_path, "../images/".$filename);

			//move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);			
			
			//echo "<br /><br />file uploaded successfully...";
		}

		$image_path = "../images/".$filename;

		$sql = "UPDATE user set usr_image='".$image_path."' WHERE usr_id=".$user;
		if(mysqli_query($con,$sql))
		{
				echo "<br /><br />file uploaded successfully...";
		}		
		//echo "<br />".$image_path."<br />".$user;
	}
	header("Location: ../view/edit_userprofile.php");
?>