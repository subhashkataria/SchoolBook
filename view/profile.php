<html>

	<head>
		<title> profile </title>
		<link rel="stylesheet" type="text/css" href="home_page.css">
		<link rel="stylesheet" type="text/css" href="button.css">
		<link rel="stylesheet" type="text/css" href="info.css">
		<?php
			session_start();
			require("../model/getProfileDataModel.php");
			//header("Location: ../model/getDataModel.php");
		?>
		
		<script type="text/javascript" >

			function connect_friend()
			{
				//var frm = document.getElementById("connect");
				//frm.submit;
				document.getElementById("frm1").submit();	
			}
				
		</script>		
		
	</head>

	<body>
	<div id="main">
		<div id="inner1">
			<a href="homepage.php" style="text-decoration: none; color: black; float: left;"> <h1> SchoolBook </h1></a><br />
			<!--<a href="" style="text-decoration: none; color: white; float: right;"> <h3> Dashboard &nbsp; </h3></a>-->
			<a href="userprofile.php" style="text-decoration: none; color: white; float: right;"> <h3> Profile  &nbsp;</h3></a>
			<a href="homepage.php" style="text-decoration: none; color: white; float: right;"> <h3> Home | &nbsp;</h3></a>
		</div>
		<br />
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
					echo" <br /><br />";
				?>
				<a href="#" style="text-decoration: none; color: black;">Message Box </a><br />
				<a href="#" style="text-decoration: none; color: black;">Activities </a> <br />
				<a href="#" style="text-decoration: none; color: black;">Events </a><br />
				<a href="#" style="text-decoration: none; color: black;">Literature </a><br />
				<a href="edit_userprofile.php" style="text-decoration: none; color: black;">Edit Profile </a> <br /><br />
				<a href="logout.php" style="text-decoration: none; color: blue;">Logout </a>
			</div>			
			
			<div style="position: relative; right: 1%; float: right; width: 40%;">
			<?php
				if($flag == 0)
				{
					echo "<div style='width: 40%; position: relative; float: right; right: 1%;'>";
						echo "<form>";
							echo "<a href='#' style='text-decoration: none;' class='button'> Leave a Message </a>";
						echo "</form>";
					echo "</div>";
					
					
					echo "<div style='width: 30%; position: relative; float: right; right: 2%;'>";
						echo "<form>";
							echo "<a href='#' style='text-decoration: none;' class='button'> Recommend </a> &nbsp;&nbsp;&nbsp;";
						echo "</form>";
					echo "</div>";					

					
					echo "<div style='width: 30%; position: relative; float: right; right: 1%;'>";
						echo "<form action='../model/connect_friend.php' method='post' id='frm1'>";
							echo "<a style='text-decoration: none;' class='button' onclick='connect_friend()'> Connect </a> &nbsp;&nbsp;&nbsp;";
						//<!--<input type="button" value="connect" onclick="connect_friend()">-->
						echo "</form>";
					echo "</div>";
										
				}
				else if($flag == 2)
				{
					echo "<div style='width: 40%; position: relative; float: right; right: 1%;'>";
						echo "<form>";
							echo "<a href='#' style='text-decoration: none;' class='button'> Leave a Message </a>";
						echo "</form>";
					echo "</div>";
					
					
					echo "<div style='width: 30%; position: relative; float: right; right: 2%;'>";
						echo "<form>";
							echo "<a href='#' style='text-decoration: none;' class='button'> Recommend </a> &nbsp;&nbsp;&nbsp;";
						echo "</form>";
					echo "</div>";
				}
			?>
			</div>
			
			<br /><br /><br />

			<div id="info">
				<?php
					echo "<font color='#0B6DCF' size='4'>".ucfirst($user_det['fname'][0])." ".ucfirst($user_det['lname'][0])."</font>";
					echo "<br />";
					echo $user_det['email'][0];
				?>
					
					<hr />
					
					<h3 align="left"> <font color="#A49FA4"> Educational Details </font> <br /><br />
					<table width="80%">
							<tr>
								<td> Degree: </td>
								<?php
									echo "<td> <label style='color:#636165;'> <b> ".$degree."</b> </label> </td>";
								?>
							</tr>
					</table>					
					
					<hr />
					
					<h3 align="left"> <font color="#A49FA4"> Professional Details </font> </h3>
					<table width="80%">
						<tr>
							<td> Specialised in: </td>
							
							<?php
								echo "<td> <label style='color:#636165;'><b>".$special."</b></label> </td>";
							?>
						</tr>
						
						<tr>
							<td> Experience: </td>
							<?php
								echo "<td> <label style='color:#636165;'> <b>".$exp." years </b> </label> </td>";
							?>
						</tr>
						
						<tr>
							<td> Profession: </td>
							
							<?php
								echo "<td> <label style='color:#636165;'><b>".$profession."</b></label> </td>";
							?>
						</tr>
					</table>
			</div>
			
		</div>
	</div>
	</body>
	
</html>