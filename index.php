<?php
include 'login/dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>CodeConnect</title>
	<link rel="stylesheet" type="text/css" href="./CSS/style.css"/>
	<link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>

	<div class="header">
		<div class="wrapper">
			<img src="images/logo2.png" width=228 height=68 class="animate__animated animate__zoomIn"/>
			<form action="" method="post" class="loginuser">
				<table id="login">
					<tr style="height: 20px">

					<?php
					$login= false;
					$showerror=false;
					if(isset($_POST['submit'])){
					 
					
					
					   $emailid=$_POST["emailid"];
					   $pwd=$_POST["pwd"];
					  
					   
						 $sql="Select * from joindt where email='$emailid' AND password='$pwd' ";
						 $result=mysqli_query($conn,$sql);
						 $num=mysqli_num_rows($result);
						 if($num==1){
							 $login=true;
							 session_start();
							 $_SESSION['loggedin'] = true;
							 $_SESSION['emailid'] = $emailid;
							 header("location:join/profile1.php");
					         
					
						 }
					  
						else{
						   $showerror="Invalid credentials";
				           
						}
					  }
					//  else{
					//	  echo $showerror;
					 // }

					  if($login){
						echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
					   <strong>Sucess!</strong> You are logged in.
					   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					 </div>';
						}
					 
					 if($showerror){
						echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">
					   <strong>Error!</strong> '.  $showerror.'
					   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					 </div>';
					 }

					  ?>




						<td><label for="email">Email</label> </td>
						<td><label for="logpassword">Password</label></td>
						<td rowspan=3><input type="submit"  id="loginbutton" name="submit"></td>
					</tr>
					
					<tr>
						<td><input type="text" id="email" name="emailid" class="inputtext" required/></td>
						<td><input type="password" id="pwd" name="pwd" class="inputtext" required/></td>
					</tr>

					<tr style="height: 20px">
						<td></td>
						<td><a href="" style="color:white;text-decoration:none;padding-top: 3px;">Forgot password?</a></td>
					</tr>
				</table>

			</form>
		</div>
	</div>


	<?php
    
	
	
	
	if (isset($_POST['join'])){
		echo 'signup';
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$emailid=$_POST['emailid'];
		$pwd=$_POST['pwd'];
		$sql="INSERT INTO `joindt` ( `fname`, `lname`, `email`, `password`) VALUES ( '$fname', '$lname', '$emailid', '$pwd')";
	   $result=mysqli_query($conn,$sql);
	   echo "$fname";
	

	
	if($result){
		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<strong>Success!</strong> Your entry has been submitted successfully!
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>';
	}
	
	else{
		echo "The record was not inserted";
	}
}
	
	
	?>




	<div class="main">
		<div class="wrapper">
			<img src="images/landing.jpg" class="logopic"/>

		<div class="signup">
			<h1>Welcome to CodeConnect</h1>

			<form action="" method="post">
				<table id="signuptable">
					<tr>
						<td><label for="fname">First Name:</label></td>
						<td><input type="text" id="fname" class="inputtext2" name="fname" required/></td>
					</tr>

					<tr>
						<td><label for="lname">Last Name:</label></td>
						<td><input type="text" id="lname" class="inputtext2" name="lname" required/></td>
					</tr>

					<tr>
						<td><label for="emailadd"> Email:</label></td>
						<td><input type="email" id="emailadd" class="inputtext2" name="emailid" required/></td>
					</tr>

					<tr>
						<td><label for="pwd">Password:</label></td>
						<td><input type="password" id="pwd" class="inputtext2" name="pwd" required/></td>
					</tr>

					<tr id="fm">
						<td style="text-align:right;"><input type="radio" name="sex" id="male" required/>
						<label for="male">Male</label></td>

						<td style="padding-left:20px;"><input type="radio" name="sex" id="female" required/>
						<label for="female" id="fm1">Female</label></td>
					</tr>

					<tr>
						<td><label for="date">Birthday:</label></td>
						<td id="dob"><select title="Day" id="date" name="date">
							<option value="0">Day</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12" selected="1">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
						<select title="month" style="width: 65px" name="month">
							<option value="0">Month</option>
							<option value="1">Jan</option>
							<option value="2">Feb</option>
							<option value="3">Mar</option>
							<option value="4">Apr</option>
							<option value="5">May</option>
							<option value="6">Jun</option>
							<option value="7">Jul</option>
							<option value="8">Aug</option>
							<option value="9">Sept</option>
							<option value="10" selected="1">Oct</option>
							<option value="11">Nov</option>
							<option value="12">Dec</option>
						</select>
						<select title="year" style="width: 65px" name="year">
							<option value="0">Year</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999" selected="1">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option>
						</select></td>
					</tr>


					<tr id="joinbut">
						<td colspan=2 style="padding-left:40px;padding-right: 0px"><input id="joinnowbttn" type="submit" name="join" value="Join now"/></td>
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

				<p></p>
			</div>
		</div>
	</div>

</body>
</html>