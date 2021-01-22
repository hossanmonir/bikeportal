<!DOCTYPE html>
<html>
	<head>
		<title>Bike Portal</title>
		<link rel="stylesheet" type="text/css" href="css/960_12_col.css"/>
		<link rel="stylesheet" type="text/css" href="css/index3.css"/>
		
		<script type="text/javascript">
	function addPartsType() { 
	var typeName=document.myForm.typename.value; 
	var tFile=document.myForm.type_img.value; 
	var ext = tFile.substring(tFile.lastIndexOf('.') + 1).toLowerCase();
  
	if(typeName=="" || (!isNaN(typeName))){  
	document.myForm.typename.focus();
	document.myForm.typename.style.border="1px solid red";
	document.getElementById("msg2").innerHTML= " <img src='logo/unchecked.gif'/> Please enter a type name";  
	
	return false; 
	}
	else{  
	document.getElementById("msg2").innerHTML=" <img src='logo/checked.gif'/>";  
	} 

	if (tFile == ""){
	document.myForm.type_img.focus();
	document.myForm.type_img.style.border="1px solid red";
	document.getElementById("msg3").innerHTML= " <img src='logo/unchecked.gif'/> Please upload a photo";  
	
	return false; 
	}
	else if(ext == "jpeg" || ext == "jpg" || ext == "png"){
	document.getElementById("msg3").innerHTML=" <img src='logo/checked.gif'/>";
	}
	
	else{  
	//document.getElementById("msg3").innerHTML=" <img src='logo/checked.gif'/>"; 
	document.myForm.type_img.focus();
	document.myForm.type_img.style.border="1px solid red";
	document.getElementById("msg3").innerHTML= " <img src='logo/unchecked.gif'/>Image files only";  
	
	return false; 
	} 	
  
return true;  
}  
</script> 
		
	</head>
	<body>
	
	<?php
	
	session_start();
	if(!isset($_SESSION["pass"])){
	header("location: http://localhost/bike/adminLogin.php") ;
}
	else {
	
require("include/db_bike.php");
$ar=getBikeFromDB("select * from brand where status = '0' ");
$jsn=json_decode($ar,true);



?>

		<div class="header">
			<div class="container_12">
				<div class="grid_5">
					
				</div>
				<div class="nav grid_7">
					Welcome <b>Administrator |  </b>
					<a href="adminLogout.php">Log out</a>
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
							<td><a href="adminPage.php">Bike Management</a></td>
							<td><a href="brandMgm.php">Brand Management</a></td>
						
							<td><a href="partsMgm.php">Accessories Management</a></td>
							<td><a href="typeMgm.php">Accessories Type Management</a></td>
							<td class="last"><a href="add.php">Add Products</a></td>
							
						</tr>
					</table>
				</div>
			</div>
		</div>
		
		<div class="top1">
			<div class="container_12">
				<div class="grid_12">
					<h2 class="tag"><b>Add Accessories type here</b></h2>
				</div>
			</div>
		</div>
		
		
		<div class="container_12">
			<form name="myForm" onsubmit="return addPartsType()" action="add_Type.php" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td class="last">TYPE NAME</td>
					<td class="last">
						<input class="text" type="text" name="typename"/><span id="msg2" style="color:red"></span>
					</td>
				</tr>
				<tr>
					<td class="last">IMAGE</td>
					<td class="last">
						<input class="file" type="file" name="type_img"/><span id="msg3" style="color:red"></span>
					</td>
				</tr>
				<tr>
                <td class="last" colspan="2" align="center">
                    <input class="submit" type="submit" name="sbt" value="ADD TYPE">
                </td>
                </tr>
			</table>
		</form>
			
		</div>
	
			
			
		
		<div class="footer clearfix">
			<div class="container_12">
				<p class="grid_12"><a href="#">Legal Information</a> | <a href="#">Privacy Policy</a> | <a href="#">Copyright &copy: Bike Portal Project 2017</a></p>
			</div>
		</div>
	</body>
</html>
	<?php } ?>