<html>

	<head>
		<title> search result </title>
		<link rel="stylesheet" type="text/css" href="home_page.css">

		<?php
			session_start();
			
			if(!isset($_SESSION['uid']) && !isset($_SESSION['login_uid']))
			{
				header("Location: signin-signup.php");
			}			
			
			include("../connect.php");
			
		?>
		

	</head>
	
	<body>
	<div id="main">
		<div id="inner1">
			<a href="" style="text-decoration: none; color: black; float: left;"> <h1> SchoolTime </h1></a><br />
			
			<a href="" style="text-decoration: none; color: #FFFFFF; float: right;"> <h3> &nbsp; Dashboard &nbsp;</h3></a>
			
			<a href="" style="text-decoration: none; color: #FFFFFF; float: right;"> <h3> &nbsp; Profile | </h3></a>
			
			<a href="" style="text-decoration: none; color: #FFFFFF; float: right;"> <h3> &nbsp; Home | </h3></a>
			
		</div>
		<br />
		<div id="inner2">
			<div style="width: 46%; border: groove; overflow: auto; height: 400px; position: relative; float:left;">
					<h3> <font color="#A49FA4"> Freinds </font> </h3>
			</div>
			<div style="width: 46%; border: groove; overflow: auto; height: 400px; position: relative; float: left; left: 4%;">
					<h3> <font color="#A49FA4"> Grow Your Circle </font> </h3>
			</div>
		</div>
	</div>
	</body>
</html>	