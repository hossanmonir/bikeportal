<!DOCTYPE html>
<html>
	<head>
		<title>Bike Portal</title>
	<link rel="stylesheet" type="text/css" href="css/960_12_col.css"/>
	<link rel="stylesheet" type="text/css" href="css/index.css"/>
	<link rel="stylesheet" type="text/css" href="css/user.css"/>
	</head>
	<body>
	
	
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
		<div class="top1">
			<div class="container_12">
				<div class="grid_12">
					<h2 class="tag"><b>Sign-up here to be a member</b></h2>
				</div>
			</div>
		</div>
		<div class="container_12">
			<form name="myForm" id="myform" action="add_user.php"  method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<td class="last">Name</td>
						<td class="last"><input class="text" type="text" name="name" id="name"/><span id="msg1" style="color:red"></span></td>
					</tr>
					<tr>
						<td class="last">Gender</td>
						<td class="last">
							<select name="gender" id="gender">
								<option value="0">Select Gender</option>
								<option value="1">Male</option>
								<option value="2">Female</option>
							</select>
							<span id="msg2" style="color:red"></span>
						</td>
					</tr>
					<tr>
						<td class="last">Email</td>
						<td class="last"><input class="text" type="text" name="email" id="email"><span id="msg3" style="color:red"></span></td>
					</tr>
					<tr>
						<td class="last">Contact No</td>
						<td class="last"><input class="text" type="text" name="contact" id="contact" placeholder="+88"><span id="msg4" style="color:red"></span></td>
					</tr>
					<tr>
						<td class="last">City</td>
						<td class="last">
							<select name="city" id="city">
								<option value="0">Please select</option>
								<option value="dhaka">Dhaka</option>
								<option value="chittagong">Chittagong</option>
								<option value="comilla">Comilla</option>
								<option value="rajshahi">Rajshahi</option>
								<option value="khulna">Khulna</option>
								<option value="barishal">Barishal</option>
								<option value="rangpur">Rangpur</option>
								<option value="mymensingh">Mymensingh</option>
								<option value="sylhet">Sylhet</option>
							</select>
							<span id="msg5" style="color:red"></span>
						</td>
					</tr>
					<tr>
						<td class="last">Username</td>
						<td class="last"><input class="text" type="text" name="uname" id="uname"><span id="msg7" style="color:red"></span></td>
					</tr>
					<tr>
						<td class="last">Password</td>
						<td class="last"><input class="text" type="password" name="pass" id="pass"><span id="msg8" style="color:red"></span></td>
					</tr>
					<tr>
						<td class="last">Confirm Password</td>
						<td class="last"><input class="text" type="password" name="conpass" id="conpass"><span id="msg9" style="color:red"></span></td>
					</tr>
					<tr>
						<td class="last"></td>
						<td class="last"><input class="submit" type="submit" name="sbt" value="SUBMIT" onclick="formValidate()"></td>
					</tr>
				</table>
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
	
	
	
	
	<script>
		function formValidate(){
			var flag = true;
			var name = document.getElementById("name").value;
			var gender = document.getElementById("gender").value;
			var email = document.getElementById("email").value;
			var contact = document.getElementById("contact").value;
			var city = document.getElementById("city").value;
			var uname = document.getElementById("uname").value;
			var pass = document.getElementById("pass").value;
			var conpass = document.getElementById("conpass").value;
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					if(xmlhttp.responseText == "Success"){
						window.location = "index.php";
					}
					else{
						alert(xmlhttp.responseText);
						
					}
				}
			};
			var urlext = "name="+name+"&gender="+gender+"&email="+email+"&contact="+contact+"&city="+city+"&uname="+uname+"&pass="+pass+"&conpass="+conpass;
			var url="add_user.php?"+urlext;
			xmlhttp.open("GET", url, true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.send();
		}
		document.getElementById('myform').onsubmit = function(e){
			e.preventDefault();
		}
	</script>
</html>
		