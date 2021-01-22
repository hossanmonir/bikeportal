<!DOCTYPE html>
<html>
	<head>
		<title>Bike Portal</title>
		<link rel="stylesheet" type="text/css" href="css/960_12_col.css"/>
		<link rel="stylesheet" type="text/css" href="css/index3.css"/>
		
		<script type="text/javascript">
	function addBike() { 
		var bikeModel=document.myForm.bmodel.value; 
		var bikeBrand=document.myForm.brand.value;
		var bikePrice=document.myForm.bprice.value;
		var bikeQnt=document.myForm.b_qnt.value;
		var bikeFile=document.myForm.bike_img.value; 
		var ext = bikeFile.substring(bikeFile.lastIndexOf('.') + 1).toLowerCase();
	
	
	if(bikeModel=="" || (!isNaN(bikeModel))){  
	document.myForm.bmodel.focus();
	document.myForm.bmodel.style.border="1px solid red";
	document.getElementById("msg2").innerHTML= " <img src='logo/unchecked.gif'/> Please enter a bike model";  
	
	return false; 
	}
	else{  
	document.getElementById("msg2").innerHTML=" <img src='logo/checked.gif'/>";  
	}
	
	if(bikeBrand=="0"){
	document.myForm.brand.focus();
	document.myForm.brand.style.border="1px solid red";
	document.getElementById("msg3").innerHTML= " <img src='logo/unchecked.gif'/> Please select a Brand";  
	
	return false; 	
	}
	else{
		document.getElementById("msg3").innerHTML=" <img src='logo/checked.gif'/>";
	}
	
	if(bikePrice==""){  
	document.myForm.bprice.focus();
	document.myForm.bprice.style.border="1px solid red";
	document.getElementById("msg4").innerHTML= " <img src='logo/unchecked.gif'/> Please enter a bike price";  
	
	return false; 
	}
	else if(isNaN(bikePrice)){
	document.myForm.bprice.focus();
	document.myForm.bprice.style.border="1px solid red";
	document.getElementById("msg4").innerHTML= " <img src='logo/unchecked.gif'/>Price should be in number";  	
	return false; 	
	}
	else{  
	document.getElementById("msg4").innerHTML=" <img src='logo/checked.gif'/>";  
	}
	
	if(bikeQnt==""){  
	document.myForm.b_qnt.focus();
	document.myForm.b_qnt.style.border="1px solid red";
	document.getElementById("msg5").innerHTML= " <img src='logo/unchecked.gif'/> Please enter bike Quantity";  
	return false; 
	}
	else if(isNaN(bikeQnt)){
	document.myForm.b_qnt.focus();
	document.myForm.b_qnt.style.border="1px solid red";
	document.getElementById("msg5").innerHTML= " <img src='logo/unchecked.gif'/>Enter numbers only";  	
	return false; 	
	}
	else{  
	document.getElementById("msg5").innerHTML=" <img src='logo/checked.gif'/>";  
	}
	
	if (bikeFile == ""){
	document.myForm.bike_img.focus();
	document.myForm.bike_img.style.border="1px solid red";
	document.getElementById("msg6").innerHTML= " <img src='logo/unchecked.gif'/> Please upload a photo";  	
	return false; 
	}
	else if(ext == "jpeg" || ext == "jpg" || ext == "png"){
	document.getElementById("msg6").innerHTML=" <img src='logo/checked.gif'/>";
	}	
	else{  
	document.myForm.bike_img.focus();
	document.myForm.bike_img.style.border="1px solid red";
	document.getElementById("msg6").innerHTML= " <img src='logo/unchecked.gif'/>Image files only";  
	
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
					<h2 class="tag"><b>Add BIKE here</b></h2>
				</div>
			</div>
		</div>
		
		
		<div class="container_12">
			<form name="myForm" action="add_Bike.php" onsubmit="return addBike()" method="post" enctype="multipart/form-data">
<table>
	<tr>
		<td class="last">MODEL</td>
		<td class="last"><input class="text" type="text" name="bmodel"/><span id="msg2" style="color:red"></span></td>
	</tr>

	<tr>
		<td class="last">BRAND</td>
		<td class="last"><select name="brand"><option value="0">Please select</option>
			<?php foreach($jsn as $v){ ?>
			<option value="<?php echo $v["id"];?>"><?php echo $v["name"];?></option>
			<?php } ?>
			</select>
		<span id="msg3" style="color:red"></span></td>
	</tr>
	<tr>
		<td class="last">PRICE</td>
		<td class="last"><input class="text" type="text" name="bprice"/><span id="msg4" style="color:red"></span></td>
	</tr>
	<tr>
		<td class="last">QUANTITY</td>
		<td class="last"><input class ="text" type="text" name="b_qnt"/><span id="msg5" style="color:red"></span></td>
	</tr>
	<tr>
		<td class="last">IMAGE</td>
		<td class="last"><input class="file" type="file" name="bike_img" /><span id="msg6" style="color:red"></span></td>
	</tr>
	<tr>
        <td class="last" colspan="2" align="center"><input class="submit" type="submit" name="sbt" value="ADD BIKE">
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