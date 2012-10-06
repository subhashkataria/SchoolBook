<html>

	<head>
		<title> profile </title>
		<link rel="stylesheet" type="text/css" href="home_page.css">
		<link rel="stylesheet" type="text/css" href="button.css">
		<link rel="stylesheet" type="text/css" href="info.css">
		<script type="text/javascript">
			
			function addrow()
			{
				var table = document.getElementById("table1");
				
				var rowcount = table1.rows.length;
				
				var row = table1.insertRow(rowcount);
				var cell1 = row.insertCell(0);
				cell1.innerHTML = "txtorg"+rowcount;//"company"+rowcount;
				
				//var row = table1.insertRow(rowcount);
				var cell2 = row.insertCell(1);
				var txtname = "txtorg"+rowcount; 
				var element1 = document.createElement("input");
				element1.setAttribute("type","text");
				element1.setAttribute("name",txtname);
				
				cell2.appendChild(element1);
			}
		
			/*function enableTxt()
			{
				var profession = document.getElementById("selprofession_id");
				var txt1 = document.getElementById("txtprofession_id");
				
				var edu_field = document.getElementById("seledufield_id");
				var txt2 = document.getElementById("txtedufield_id");
				
				var edu_spl = document.getElementById("seleduspl_id");
				var txt3 = document.getElementById("txteduspl_id");
				
				var prof_field = document.getElementById("selproffield_id");
				var txt4 = document.getElementById("txtproffield_id");
				
				var prof_spl = document.getElementById("selprofspl_id");
				var txt5 = document.getElementById("txtprofspl_id");
								
				
				if(profession.value == "other")
				{
					txt1.disabled = false;	
				}
				else
				{
					txt1.disabled = true;
				}
				
				if(edu_field.value == "other")
				{
					txt2.disabled = false;	
				}
				else
				{
					txt2.disabled = true;
				}
				
				if(edu_spl.value == "other")
				{
					txt3.disabled = false;	
				}
				else
				{
					txt3.disabled = true;
				}
				
				if(prof_field.value == "other")
				{
					txt4.disabled = false;	
				}
				else
				{
					txt4.disabled = true;
				}
				
				if(prof_spl.value == "other")
				{
					txt5.disabled = false;	
				}
				else
				{
					txt5.disabled = true;
				}
				//window.alert("other");
			}	*/		
			
			
		</script>
		<?php
			session_start();
			require("../model/getDataModel.php");
			//header("Location: ../model/getDataModel.php");
		?>
	</head>
	
	<body onload="enableTxt();">
	<div id="main">
		<div id="inner1">
			<a href="homepage.php" style="text-decoration: none; color: black; float: left;"> <h1> SchoolBook </h1></a><br />
			<!--<a href="" style="text-decoration: none; color: white; float: right;"> <h3> Dashboard &nbsp; </h3></a>-->
			<a href="userprofile.php" style="text-decoration: none; color: white; float: right;"> <h3> Profile  &nbsp;</h3></a>
			<a href="homepage.php" style="text-decoration: none; color: white; float: right;"> <h3> Home | &nbsp;</h3></a>
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
				<h4> Profile Complete <br /> _% </h4>
			</div>			
			
			

			<div id="info">
				<div style="width: 95%;">
					<font color='#636165'> <h3> Add Literature: </h3> </font> <br />
					<input type="file" name="literature"> <br />
					<textarea cols="60" rows="3" style="resize: none;"></textarea> <br />
					<input type="submit" value="Upload">
				</div>
		
			</div>
		</div>
	</div>
	</body>
	
</html>