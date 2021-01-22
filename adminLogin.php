<!DOCTYPE html>
<html>
	<head>
		<title>Bike Portal</title>
		<link rel="stylesheet" type="text/css" href="css/960_12_col.css"/>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
	<script type="text/javascript">
		function checkLogin(){
			var uName = document.myForm.uname.value;
			var Pass = document.myForm.pass.value;
			
			if(uName==""){  
	document.myForm.uname.focus();
	document.myForm.uname.style.border="1px solid red";
	document.getElementById("msg1").innerHTML= " <img src='logo/unchecked.gif'/> Please enter your username";  
	return false; 
	}
	else{  
	document.getElementById("msg1").innerHTML=" <img src='logo/checked.gif'/>";  
	}
	
	if(Pass==""){  
	document.myForm.pass.focus();
	document.myForm.pass.style.border="1px solid red";
	document.getElementById("msg2").innerHTML= " <img src='logo/unchecked.gif'/>Please enter your password";  
	return false; 
	}
	else{  
	document.getElementById("msg2").innerHTML=" <img src='logo/checked.gif'/>";  
	}
	return true;  
		}
	
	</script>
	
	</head>
	<body>
	
	<?php
require("include/db_bike.php");
$ar=getBikeFromDB("select * from bike where status = '0' ");
$jsn=json_decode($ar,true);


?>

		<div class="header">
			<div class="container_12">
				<div class="grid_5">
					
				</div>
				<div class="nav grid_7">
					<a href="adminLogin.php">Admin Login / </a>
					<a href="#">User Login </a>
					
				</div>
			</div>
		</div>
		<div class="top1">
			<div class="container_12">
				<div class="grid_12">
					<h1><b>BIKE PORTAL</b></h1>
				</div>
				
			</div>
		</div>
		<div class="header">
			<div class="container_12">
				<div class="grid_12">
					<table>
						<tr>
							<td><a href="index.php">Home</a></td>
							<td><a href="index.php">Bike</a></td>
							<td><a href="bikeBrand.php">Bike Brand</a></td>
							<td><a href="bikeParts.php">Accessories</a></td>
							<td><a href="partsType.php">Accessories Type</a></td>
							<td><a href="#">About</a></td>
							<td class="last"><a href="#">Contact</a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		
		
	<div class="container_12">	
		
		<br/><br/><h1><b>Admin LOG IN</b></h1>
			
			<form name="myForm" action="auth_log.php" onsubmit="return checkLogin()" method="post" enctype="multipart/form-data">
			
			<b>Username</b>
			<input class="text" type="text" name="uname"/><span id="msg1" style="color:red"></span>
			<br/><br/><b>Password</b>
			<input class="text" type="password" name="pass"/><span id="msg2" style="color:red"></span>
			<br/><br/><input class="submit" type="submit" name="log" value="LOGIN"><br/>
	</form>
		
	</div>	
		
			<div class="more-articles container_12">
				<div class="grid_3">
					<p><b>Our Company</b></p>
					<p><a href="#">About us</a></p>
					<p><a href="#">Terms</a></p>
					<p><a href="#">Policy</a></p>
					<p><a href="#">Contact</a></p>
				</div>
				<div class="grid_3">
					<p><b>Social</b></p>
					<p><a href="#">Facebook</a></p>
					<p><a href="#">Twitter</a></p>
					<p><a href="#">Instragram</a></p>
					<p><a href="#">Youtube</a></p>
				</div>
				<div class="grid_3">
					<p><b>Our Products</b></p>
					<p><a href="#">Bike</a></p>
					<p><a href="#">Accessories</a></p>
					<p><a href="#">Brand</a></p>
					<p><a href="#">Accessories Type</a></p>
				</div>
				<div class="grid_3">
					<p></p>
					<img src="logo/bike.jpg" width="220px" />
					<p><q>Life is a beautiful ride</q></p>
				</div>
	
			</div>
		
		<div class="footer clearfix">
			<div class="container_12">
				<p class="grid_12"><a href="#">Legal Information</a> | <a href="#">Privacy Policy</a> | <a href="#">Copyright &copy: Bike Portal Project 2017</a></p>
			</div>
		</div>
	</body>
</html>
		