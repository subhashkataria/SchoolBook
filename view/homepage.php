<html>

	<head>
		<title> home </title>
		<link rel="stylesheet" type="text/css" href="home_page.css">

		<?php
			session_start();
			
			if(!isset($_SESSION['uid']) && !isset($_SESSION['login_uid']))
			{
				header("Location: signin-signup.php");
			}			
			
			include("../connect.php");
			include("../model/getUserTypeModel.php");
			include("../model/getConnectionModel.php");
			
		?>
		

	</head>
	
	<body>
	<div id="main">
		<div id="inner1">
			<a href="homepage.php" style="text-decoration: none; color: black; float: left;"> <h1> SchoolBook </h1></a><br />
			
			<!--<a href="" style="text-decoration: none; color: #FFFFFF; float: right;"> <h3> &nbsp; Dashboard &nbsp;</h3></a>-->
			
			<a href="userprofile.php" style="text-decoration: none; color: #FFFFFF; float: right;"> <h3> &nbsp; Profile &nbsp;&nbsp; </h3></a>
			
			<a href="homepage.php" style="text-decoration: none; color: #FFFFFF; float: right;"> <h3> &nbsp; Home | </h3></a>
			
		</div>
		<br />
		<div id="inner2">
			<div id="welcome" style="width: 60%;">
				<?php
					include("../model/getImage.php");
					/*include("../model/selectUserName.php");
					
					if(isset($_SESSION['uid']))
					{
						$uid = $_SESSION['uid'];
					}
					/*if(isset($_SESSION['login_uid']))
					{
						$uid = $_SESSION['login_uid'];
					}
					//echo $uid;
					
					$username = select_User_Name($uid);
					echo $username;
					//echo "hi";*/
					echo "welcom, ";
					echo $_SESSION['user_fname'];
				?>
			</div>
		
			<div id="form1" style="width: 25%;">
				<form name="form1" action="../controller/searchPeopleController.php" method="POST">
					Find People <input type="text" name="txtfindpeople"> <input type="submit" style="background: url(../images/search.jpg) no-repeat;" value="">			
				</form>
			</div>
			<br /><br /> <br />
			<div id="GC">
				<div style="background-color: #348781;"> 
					Groups Created
				</div>
				<br />
				<div style="overflow: scroll; height: 74%;">
					<h2 align="center"> <font color="#A49FA4"> No groups created </font> </h2>
				</div> 
			</div>
			
			<div id="GJ">
				<div style="background-color: #348781;"> 
					Groups Joined
				</div>
				<br />
				<div style="overflow: scroll; height: 74%;">
					<h2 align="center"> <font color="#A49FA4"> No groups joined </font> </h2>
				</div> 
			</div>
			
			<div id="OG">
				<div style="background-color: #348781;"> 
					Open Group Suggessions.
				</div>
				<br />
				<div style="overflow: scroll; height: 74%;">
					<h2 align="center"> <font color="#A49FA4"> No group suggessions </font> </h2>
				</div> 
			</div>
		
			
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

			<div id="image_menu">
				<?php
					echo "<img src=".$image." height='80' width='80'> <br /><br />";
					echo "<font color='#A49FA4'> <b>".$user_type."</b> </font>";
					echo" <br /><br />";
				?>
				<a href="#" style="text-decoration: none; color: black;">Message Box </a><br />
				<a href="#" style="text-decoration: none; color: black;">Activities </a> <br />
				<a href="#" style="text-decoration: none; color: black;">Events </a><br />
				<a href="literature.php" style="text-decoration: none; color: black;">Literature </a><br />
				<a href="edit_userprofile.php" style="text-decoration: none; color: black;">Edit Profile </a> <br /><br />
				<a href="logout.php" style="text-decoration: none; color: blue;">Logout </a>
			</div>			
			
			<div id="updates">
			
			</div>			
			
			<div id="connections">
				<?php
					echo "<font color='#A49FA4' size='4'> <b> Connections </b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; 
					echo $connections."</font>";
				?>
				<!--<br /> <br />
				Recomended &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; count;  <br /> <br />
				Recomending &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; count; <br />-->
			</div>			
			
			<div id="connections">
				<?php
					echo "<font color='#A49FA4' size='4'> <b> Pending Requests </b>  &nbsp;&nbsp;&nbsp;"; 
					echo $requests."</font>";
				?>
			</div>
			
		</div>
	</div>
	</body>
	
</html>