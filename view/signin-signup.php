
<html>
	<head>

		<?php
			include("../connect.php");
		?>	
	
		<title> SchoolTime </title>
		<link rel="stylesheet" type="text/css" href="homepage.css">
	</head>
	
	<body>


<!--header-->		
		<div id="main1">
			<div style="width:100%; background-color: #348781; height:60px; overflow: hidden;">
				<a href="../index.html" style="text-decoration: none; color: black;"> <h1> SchoolBook </h1> </a>
			</div>
		</div>
		<br /><br />

		 
		<div id="main">
			<div style="position: relative; left: 5%; float: left;">
			<br /><br /><br /><br /><br /><br />
				<form name="signin" action="../controller/signin-signup-controller.php" method="POST">
				<center>
				<?php
					if(isset($_GET['atmpt']))
					{
						echo "<font color='red'> invalid email id or password. </font>";	
					}
				?>
				<table>
					<tr>
						<td> Email ID : </td>
						<td> <input type="text" name="txtemailid"> </td>
					</tr>
					
					<tr>
						<td> Password : </td> 
						<td> <input type="password" name="txtpassword"> </td>
					</tr>
					
					<tr>
						<td colspan="2"> &nbsp; </td>					
					</tr>
					
					<tr>
						<td><input type="submit" value="signin" name="btnsignin"> </td> 
						<td> <a href="#"> Forgot Password? </a> </td>
					</tr>
				</table>				
				</center>
				</form> 		
			</div>
		
			<div style="border: groove; border-left: 10px; border-color: #348781; position: relative; left: 20%;; float: left; height: 300px;">
			</div>
		
			<div style="position: relative; left: 35%; float: left;">
			<br />
			
			<form name="signup" action="../controller/signin-signup-controller.php" method="POST">
				<center>
					<?php
						if(isset($_GET['error_up'])) 
						{
							if($_GET['error_up'] == 1) 
							{
								echo "<font color='red'><h3> Please don't leave any field blank... </h3></font>";
							}
							
							elseif($_GET['error_up'] == 2) 
							{
								echo "<font color='red'><h3> Password does not match... </h3></font>";
							}
							
							elseif($_GET['error_up'] == 3) 
							{
								echo "<font color='red'><h3> Please select gender... </h3></font>";
							}
							else 
							{}
						}										
					?>
					
					<table>
						<tr>
							<td> First Name: </td>
							<td> <input type="text" name="txtfirstname"> </td>						
							
						</tr>
						
						<tr>
							<td> Last Name: </td>
							<td> <input type="text" name="txtlastname"> </td>						
						</tr>
						
						<tr>
							<td> Mobile Number: </td>
							<td> <input type="text" name="txtmobile"> </td>						
						</tr>						
						
						<tr>
							<td> Email ID: </td>
							<td> <input type="text" name="txtemailid"> </td>						
						</tr>
								
						<tr>
							<td> Alternate Email ID: <br /> (optional) </td>
							<td> <input type="text" name="txtaltemailid"> </td>						
						</tr>						
						
						<tr>
							<td> Password: </td>
							<td> <input type="password" name="txtpassword"> </td>						
						</tr>
						
						<tr>
							<td> Re-enter Password: </td>
							<td> <input type="password" name="txtconfirmpassword"> </td>						
						</tr>

						<tr>
							<td> User Type: </td>
							<td>
									<select name="usertype">
										<option value="-1">--Select Type--</option>
										<!--<option value="faculty"> Teacher </option>
										<option value="student"> Student </option>-->
										<?php
												$sql = "SELECT ut_name FROM usertype;";
												$result = mysqli_query($con,$sql);
												
												while($row = mysqli_fetch_array($result)) 
												{
													echo "<option value=".$row[0].">". ucfirst($row[0]) ."</option>";
												}
										?>									
									</select>
							</td>						
						</tr>
						
						<tr>
							<td> Website owned by you: <br /> (optional) </td>
							<td> <input type="text" name="txtwebsite"> </td>						
						</tr>						
						
						<tr> 
							<td> Country: </td>
							<td>
									<select name="country">
											<option value="-1"> --Country-- </option>
											<?php
												$sql = "SELECT country_name FROM countries;";
												$result = mysqli_query($con,$sql);
												
												while($row = mysqli_fetch_array($result)) 
												{
													echo "<option value=".$row[0].">". ucfirst($row[0]) ."</option>";
												}
											?>
											
									</select>							
							</td>						
						</tr>						
						
						<tr>
							<td> I am: </td>
							<td>
									<select name="gender">
										<option value="-1">--Select Gender--</option>
										<option value="male"> Male </option>
										<option value="female"> Female </option>									
									</select>
							</td>						
						</tr>						
						
						<tr>
							<td colspan="2"> &nbsp; </td>		
						</tr>						
						
						<tr>
							<td colspan="2" align="center"> <input type="submit" value="signup" name="btnsignup"> </td>		
						</tr>
						
					</table>				
				</center>
				
				</form>
				
			</div>
		</div>
		
		<!--<hr style="color: #348781;" width="75%" align="center" size="2px">-->
		<br /><br /><br />
		
		<div style="border: groove; border-bottom: 10px; border-color: #348781; position: relative; left: 10%; float: left; width: 80%;">
		</div>
	</body>
</html>