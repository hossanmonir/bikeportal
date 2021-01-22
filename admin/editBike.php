<!DOCTYPE html>
<html>
	<head>
		<title>Bike Portal</title>
		<link rel="stylesheet" type="text/css" href="css/960_12_col.css"/>
		<link rel="stylesheet" type="text/css" href="css/index3.css"/>
	</head>
	<body>
	
	<?php
	
	session_start();
	if(!isset($_SESSION["pass"])){
	header("location: http://localhost/bike/adminLogin.php") ;
}
	else {
	
require("include/db_bike.php");
if(isset($_REQUEST["id"])){
	$ar=getBikeFromDB("SELECT * FROM bike where id='".$_REQUEST["id"]."'");
$jsn=json_decode($ar,true);
	}



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
					<h2 class="tag"><b>BIKE Information</b></h2>
				</div>
			</div>
		</div>
		
		
		<div class="container_12">
			
			<?php foreach($jsn as $v){ ?>
			<form name="myForm" action="updateBike.php" method="post">	
	<table>
		<tr>
			<td class="last">BIKE ID</td><td class="last"><input type="text" name="bikeid" value="<?php echo $v["id"];?>"</td>
		</tr>
		<tr>
			<td class="last">MODEL</td><td class="last"><input type="text" name="bmodel" value="<?php echo $v["model"];?>"</td>
		</tr>
		<tr>
			<td class="last">BRAND ID</td><td class="last"><input type="text" name="brand" value="<?php echo $v["brand_id"];?>"</td>
		</tr>
		<tr>
			<td class="last">PRICE</td><td class="last"><input type="text" name="bprice" value="<?php echo $v["price"];?>"</td>
		</tr>
		<tr>
			<td class="last">QUANTITY</td><td class="last"><input type="text" name="b_qnt" value="<?php echo $v["quantity"];?>"</td>
		</tr>
		<tr>
			<td class="last">STATUS</td><td class="last"><input type="text" name="b_status" value="<?php echo $v["status"];?>"</td>
		</tr>
		<tr>
        <td class="last" colspan="2" align="center"><input class="submit" type="submit" name="sbt" onclick="return confirm('Are you sure you want to edit this bike?')" value="UPDATE">
		</tr>
			
	</table>
	</form>
		<?php } ?>
			
			</table>
		</div>
	</div>
	
			
			
		
		<div class="footer clearfix">
			<div class="container_12">
				<p class="grid_12"><a href="#">Legal Information</a> | <a href="#">Privacy Policy</a> | <a href="#">Copyright &copy: Bike Portal Project 2017</a></p>
			</div>
		</div>
	</body>
</html>
	<?php } ?>
	
	