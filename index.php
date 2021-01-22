<!DOCTYPE html>
<html>
	<head>
		<title>Bike Portal</title>
		<link rel="stylesheet" type="text/css" href="css/960_12_col.css"/>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
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
					<a href="#">User Login / </a>
					<a href="joinUs.php">Join Us</a>
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
					<h2 class="tag"><b>Find Your Desirable Bike Here</b></h2>
				</div>
			</div>
		</div>
		
		<div class="container_12">
		<?php foreach($jsn as $v){ ?>
			<div class="grid_4">
				<figure><img src="<?php echo $v["imgurl"];?>" alt="bike"/>
					<figcaption>
						<p>MODEL: <b><?php echo $v["model"];?></b></p>
						<p>PRICE: <b>Tk. <?php echo $v["price"];?></b></p>
						<p>QUANTITY: <b><?php echo $v["quantity"];?></b></p>
					</figcaption>
				</figure>
			</div>
			<?php } ?>
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
		