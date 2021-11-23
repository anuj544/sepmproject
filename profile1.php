
<?php
 session_start();


?>


<!DOCTYPE html>
<html>
<head>
	<title>CodeConnect profile 1</title>
	<link rel="stylesheet" type="text/css" href="../CSS/styleprofile.css"/>
</head>
<body>

	<div class="header">
		<div class="wrapper">
			<img src="../images/logo2.png" width=220 height=70 class="logoletter"/>
			
		</div>
	</div>

	<div class="main">
		<div class="wrapper">

		<div class="signup">
			
			<img src="../images/profile/profile1.png"/>
			<form action="profile2.html">
				<div>Welcome <?php echo  $_SESSION['emailid']?></div>
				<table id="signuptable">
					<tr>
						<td style="padding-top:18px;"><select title="country">
						<option value=0>India</option>
						<option value=0>Argentina</option>
						<option value=0>Spain</option>
						<option value=0>United States</option>
						</td>
					</tr>

					<tr>
						<td><input type="number" id="phoneno" class="inputtext2" placeholder="Phone number" required/></td>
					</tr>

					<tr>
						<td><input type="number" id="zipcode" class="inputtext2" placeholder="ZIP code" required/></td>
					</tr>

					<tr>
						<td><input type="text" id="state" class="inputtext2" placeholder="State" required/></td>
					</tr>

					<tr>
						<td><input type="text" id="District" class="inputtext2" placeholder="District" required/>
					</tr>

				


					<tr id="nextbut">
						<td><input id="nextbttn" type="submit" value="Next"/></td>
					</tr>

				</table>
			</form>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="wrapper">
			<div class="foot">
				<ul>
					<li><a href="">About</a></li>
					<li><a href="">Contact</a></li>
					<li><a href="">Privacy&Policy</a></li>
					<li><a href="">Help</a></li>
				</ul>
				
			</div>
		</div>
	</div>

</body>
</html>