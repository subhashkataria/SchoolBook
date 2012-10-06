<html>

	<head>
		<title> groups </title>
		<link rel="stylesheet" type="text/css" href="home_page.css">
		<link rel="stylesheet" type="text/css" href="button.css">
		<link rel="stylesheet" type="text/css" href="info.css">
	</head>
	
	<body>
	<div id="main">
		<div id="inner1">
			<a href="" style="text-decoration: none; color: black; float: left;"> <h1> SchoolTime </h1></a><br />
			<a href="" style="text-decoration: none; color: black; float: right;"> <h3> Dashboard </h3></a>
			<a href="" style="text-decoration: none; color: black; float: right;"> <h3> Profile </h3></a>
			<a href="" style="text-decoration: none; color: black; float: right;"> <h3> Home </h3></a>
		</div>
		<br />
		<div id="inner2">
			<div id="welcome">
				Welcome, --username--
			</div>
		
			<div id="form1">
				<form name="form1">
					Find People <input type="text" name="txtfindpeople"> <input type="submit" style="background: url(../images/search.jpg) no-repeat;" value="">			
				</form>
			</div>
			<br /><br /><br />

			<div id="image_menu" style="height: 100px; border: none;">
				<img src="../images/male-symbol.jpg" height="80" width="80">
			</div>
			<div style="position: relative; float: left; left: 1%;">
				<font size="5"> <b> Group Name </b> </font> <br /><br />
				<b> Created By: Username </b>
			</div>
			
			<br /><br /><br /><br /><br /><br /><br />
			
			<div style="width: 60%; border: groove;">
					Description goes here...
			</div>
			
			<br />
			
			<div style="width: 60%; border: groove;">
				<form name="f2">
					<table>
						<tr> 
							<td colspan="2"> Search Discussion: </td>
						</tr>
						
						<tr>
							<td> By Topic: </td>
							<td> <input type="text" name="txttopic"> </td>
						</tr>
						
						<tr>
							<td> By Username: </td> 
							<td> <input type="text" name="txtusername"> </td>
						</tr>
						
						<tr>
							<td>By Date: </td>
							<td> <???????> </td>
						</tr>
						
						<tr>
							<td colspan="2"> &nbsp; </td>						
						</tr>
						
						<tr>
							<td colspan="2"> <input type="submit" name="btnsubmit" value="Search"> </td>						
						</tr>
					</table>
				</form> 			
			</div>
			
			<br />
		
		<!-- check for session here.... following div comes within if condition -->	
			<div style="width: 100%; border: groove;">
					<table width="100%" border="1">
						<tr>
							<th> &nbsp; </th>
							<th width="50%"> Topics </th>
							<th> Date </th>
							<th> Refered By People </th>						
						</tr>
					</table>
			</div>
		</div>
	</div>
	</body>
</html>