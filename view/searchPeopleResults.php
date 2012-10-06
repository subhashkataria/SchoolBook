<html>

	<head>
		<title> profile </title>
		<link rel="stylesheet" type="text/css" href="home_page.css">
		<link rel="stylesheet" type="text/css" href="button.css">
		<link rel="stylesheet" type="text/css" href="info.css">
		
		<?php
			session_start();
			require("../model/getUserTypeModel.php");
			include("../model/getImage.php")
			//header("Location: ../model/getDataModel.php");
		?>
	</head>
	
	<body>
	<div id="main">
		<div id="inner1">
			<a href="" style="text-decoration: none; color: black; float: left;"> <h1> SchoolBook </h1></a><br />
			<a href="" style="text-decoration: none; color: white; float: right;"> <h3> Dashboard &nbsp; </h3></a>
			<a href="" style="text-decoration: none; color: white; float: right;"> <h3> Profile | &nbsp;</h3></a>
			<a href="" style="text-decoration: none; color: white; float: right;"> <h3> Home | &nbsp;</h3></a>
		</div>
		<br />
<!---->
		<div id="inner2">
			
		
			<div id="form1">
				<form name="form1" action="../controller/searchPeopleController.php" method="POST">
					<table align="right">
						<tr>
							<td>Find People </td>
							<td> <input type="text" name="txtfindpeople"> <input type="submit" style="background: url(../images/search.jpg) no-repeat;" value=""> </td>
						</tr>
					</table>			
				</form>
			</div>
			<br /><br /><br />

			<div id="image_menu">
				<?php
					echo "<img src=".$image." height='80' width='80'> <br /><br />";
				
					echo "<font color='#A49FA4'> <b>".$user_type."</b> </font>";
				?>
				 <br /><br />
				<a href="#" style="text-decoration: none; color: black;">Message Box </a><br />
				<a href="#" style="text-decoration: none; color: black;">Activities </a> <br />
				<a href="#" style="text-decoration: none; color: black;"> Events </a> <br />
				<a href="literature.php" style="text-decoration: none; color: black;"> Literature </a> <br />
				<a href="edit_userprofile.php" style="text-decoration: none; color: black;">Edit Profile </a> <br /><br />
				<a href="logout.php" style="text-decoration: none; color: blue;">Logout </a>
				<br /><br /><br />
				
			</div>			
			
			<div id="info">
				<?php
					$list = $_SESSION['list'];
					$len = $_SESSION['length'];
					$ut_name = $_SESSION['usertype'];
					$country_name = $_SESSION['country'];
					//echo $len;					
					
					$i = 0;
					echo "<table>";
					while($i < $len)
					{
						
						echo "<tr>";
						echo "<td rowspan='3'> <a href='../view/profile.php?u=".$list['uid'][$i]."'><img src='".$list['image'][$i]."' height='60' width='60'> </a> </td>";
						echo "<td> &nbsp; </td>";
						echo "<td> <a href='../view/profile.php?u=".$list['uid'][$i]."' style='text-decoration: none; color: #636165;'>".ucfirst($list['fname'][$i])."  ".ucfirst($list['lname'][$i])."</a></td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td> &nbsp; </td>";
						echo "<td>Lives in <b>".$country_name[$i]."</b></td>";
						echo "</tr>";
						
						echo "<tr>";
						echo "<td> &nbsp; </td>";
						echo "<td>".$ut_name[$i]."</td>";
						echo "</tr>";
						
						echo "<tr> <td> &nbsp; </td> </tr>";
						//echo "<hr />";
						
						$i = $i+1;
					}
					echo "</table>";
				?>		
			</div>	
			
		</div>
	</div>
	</body>
	
</html>