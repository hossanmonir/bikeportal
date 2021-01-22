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
$ar=getBikeFromDB("select * from parts_type where status = '0' ");
$jsn=json_decode($ar,true);



?>

		<div class="header">
			<div class="container_12">
				<div class="grid_5">
					
				</div>
				<div class="nav grid_7">
					Welcome <b> Administrator |  <b>
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
					<h2 class="tag"><b>Our all Accessories type</b></h2>
				</div>
			</div>
		</div>
		
		<div class="container_12">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr class="head">
				<th>Type ID</th>
				<th>Name</th>
				<th>Operation</th>
			</tr>
			<?php foreach($jsn as $v){ ?>
			<tr>
				<td><?php echo $v["id"];?></td>
				<td><?php echo $v["name"];?></td>
				<td class="last"><a href="editType.php?id=<?php echo $v["id"];?>">Edit</a></td>
			</tr>
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
		