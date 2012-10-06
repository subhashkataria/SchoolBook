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
		
			function showLink()
			{
				var editLink = document.getElementById("edit_image");
				editLink.style.visibility = 'visible';	
			}
			
			function hideLink()
			{
				var editLink = document.getElementById("edit_image");
				editLink.style.visibility = 'hidden';	
			}
		
			function showDiv()
			{
				var div = document.getElementById("upload_image");
				div.style.visibility = 'visible';	
			}
			function hideDiv()
			{
				var div = document.getElementById("upload_image");
				div.style.visibility = 'hidden';	
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
	
	<body onload="hideDiv();">
	<div id="main">
		<div id="inner1">
			<a href="homepage.php" style="text-decoration: none; color: black; float: left;"> <h1> SchoolBook </h1></a><br />
			<!--<a href="" style="text-decoration: none; color: white; float: right;"> <h3> Dashboard &nbsp; </h3></a>-->
			<a href="userprofile.php" style="text-decoration: none; color: white; float: right;"> <h3> Profile  &nbsp;&nbsp;</h3></a>
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

			<div id="image_menu" onmouseover="showLink()" onmouseout="hideLink()">
				<a href="javascript:;" onclick="showDiv()" style="text-decoration: none; color: #A49FA4; float: right; visibility: hidden;" id="edit_image"> <b> Edit Image </b> </a>
				<?php				
					echo "<img src=".$image." height='80' width='80'> <br /><br />";
				
					echo "<font color='#A49FA4'> <b>".$user_type."</b> </font><br /><br />";
				?>
				
				<div style="visibility: hidden;" id="upload_image">
					<form action="../model/upload_profile_image_model.php" method="POST" enctype="multipart/form-data">
						<input type="file" name="edit_image"> <br />
						<input type="submit" value="Upload">
					</form>				
				</div>				
				
				 <br /><br />
				<a href="#" style="text-decoration: none; color: black;">Message Box </a><br />
				<a href="#" style="text-decoration: none; color: black;">Activities </a> <br />
				<a href="#" style="text-decoration: none; color: black;"> Events </a> <br />
				<a href="literature.php" style="text-decoration: none; color: black;"> Literature </a> <br />
				<a href="edit_userprofile.php" style="text-decoration: none; color: black;">Edit Profile </a> <br /><br />
				<a href="logout.php" style="text-decoration: none; color: blue;">Logout </a>
				<br /><br /><br />
				<!--<h4> Profile Complete <br /> _% </h4>-->
			</div>			
			
			<div style="position: relative; right: 1%; float: right;">
			
			</div>
			
			<br /><br /><br />

			<div id="info">
				<?php
					//echo "<font color='#0B6DCF'><h4>".ucfirst($_SESSION['user_fname'])." ".ucfirst($_SESSION['user_lname'])."</h4></font>";
				 
				 	echo "<font color='#0B6DCF' size='4'>".ucfirst($user['fname'][0])." ".ucfirst($user['lname'][0])."</font>";
					echo "<br />";
					echo $user['email'][0];
				
				?>
				
				<form action="../controller/updateProfileInfoController.php" method="POST">
				
					<h3 align="left"> <font color="#A49FA4"> Educational Information </font> </h3> <br />
					<table width="80%">
							<tr>
								<td> Degree: </td>
								<?php
									echo "<td> <input type='text' name='txtdegree' value='".$degree."'> </td>";
								?>
							</tr>
							
							<tr>
								<td> Field: </td>
								<td>
									<select onchange="enableTxt();" name="seledufield" id="seledufield_id">
										<option value="-1">--Field--</option>
										<option value="other"> Other </option>
									</select>	
								</td>
								<td> OR </td>
								<td> Enter Field: </td>
								<?php
									echo "<td> <input type='text' name='txtedufield' value='".$field_e."' id='txtedufield_id'> </td>";
								?>
							</tr>
							
							<tr>
								<td> Specialisation: </td>
								<td>
									<select onchange="enableTxt();" name="seleduspl" id="seleduspl_id">
										<option value="-1">--Specialisation--</option>
										<option value="other"> Other </option>
									</select>	
								</td>
								<td> OR </td>
								<td> Enter Specialisation: </td>
								<?php
									echo "<td> <input type='text' name='txteduspl' id='txteduspl_id' value='".$special_e."'> </td>";
								?>
							</tr>
							
							<!--<tr>
								<td> Batch: </td> -->
								<?php
									//echo "<td> <input type='text' name='txtbatch' value='".$education['edu_batch'][0]."'> </td>";
								?>
							<!--</tr>-->
							
							<!-- Institute --> 
							<!--<tr>
								<td> Institute: </td>-->
								<?php
									//echo "<td> <input type='text' name='txtinstitute' value='".."'> </td>";
								?>
							<!--</tr>-->
							
							<tr>
								<td> Skills: </td>
								<?php
									echo "<td> <textarea name='txteduskills' rows='5' cols='20' >".$education["edu_skills"][0]."</textarea> </td>";
								?>
							</tr>
							
							<tr>
								<td> Your personal Interest: </td>
								<?php
									echo "<td> <textarea name='txteduinterest' rows='5' cols='20'>".$education["edu_interest"][0]."</textarea> </td>";
								?>
							</tr>
					</table>
					
					<br /><br /><br />
					<hr width="25%" align="center"/>
					<br /><br />

					<h3 align="left"> <font color="#A49FA4"> Professional Information </font> </h3>
					<br />
					<table width="80%">
										
						<tr>
							<td> Your Field: </td>
							<td>
								<select onchange="enableTxt();" name="selproffield" id="selproffield_id">
									<option value="-1">--Field--</option>
									<option value="other"> Other </option>
								</select>	
							</td>
							<td> OR </td>
							<td> Enter Field: </td>
							<?php							
								echo "<td> <input type='text' name='txtproffield' id='txtproffield_id' value='".$field_e."'> </td>";
							?>
						</tr>
						<tr>
							<td> You are specialised in: </td>
							<td>
								<select onchange="enableTxt();" name="selprofspl" id="selprofspl_id">
									<option value="-1">--Specialisation--</option>
									<option value="other"> Other </option>
								</select>	
							</td>
							<td> OR </td>
							<td> Enter Specialisation </td>
							<?php
								echo "<td> <input type='text' name='txtprofspl' id='txtprofspl_id' value='".$special_f."'> </td>";
							?>
						</tr>
						<tr>						
							<td> Your interest: </td>
							<?php
								echo "<td> <input type='text' name='txtprofinterest' value='".$professional["prof_interest"][0]."'> </td>";
							?>
						</tr>
						<tr>
							<td> Experience: </td>
							<?php
								echo "<td> <input type='text' name='txtexp' value='".$professional["prof_exp"][0]."'> </td>";
							?>
						</tr>
						<tr>
							<td> Profession: </td>
							<td>
								<select name="selprofession" onchange="enableTxt();" id="selprofession_id">
									<option value="-1">--Select Profession--</option>
									<option value="other">Other</option>
								</select>
							</td>
							<td> OR </td>
							<td> <label>Enter profession:</label> </td>
							<?php
								echo "<td> <input type='text' name='txtprofession' value='".$profession."' id='txtprofession_id'> </td>";
							?>
						</tr>
						
					<!--	<tr>
							<td colspan="2" align="center"> <input type="submit" value="Save"> </td>						
						</tr>	-->
					</table>
					
					<!--<table width="65%" id="table1">
						<tr>
							<td> Organisations Worked in: </td>
							<td> <input type="text" name="txtorg0"> </td>
						</tr>
					</table> --->
					<table width="60%">
						<!--<tr>
							<td align="right"><a href="javascript:;" onclick="addrow();" class="add-author" style="text-decoration: none; color: grey;"> <font color="#68656D"> +Add More </font> </a>​ </td>
						</tr>-->
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<!--<td align="center"> <a href="javascript:;" onclick="enableText();" style="text-decoration: none;" class="button" id="save_edit">Save</a> </td>-->
							<td align="center"> <input type="submit" value="  Save  "> </td>
							
						</tr>
					</table>
					<?php
						echo "<input type='hidden' name='txteduflag' value='".$flag_e."'>";
						echo "<input type='hidden' name='txtprofflag' value='".$flag_f."'>";
					?>
				</form>		
		
			</div>
		</div>
	</div>
	</body>
	
</html>