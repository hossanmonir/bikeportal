

<?php
require("include/db_bike.php");
$ar=getBikeFromDB("select * from bike where status = '0' ");
$jsn=json_decode($ar,true);

$conn = mysqli_connect("localhost", "root", "", "bike_portal");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


	$s=$_FILES['bike_img']['tmp_name'];
	$name=$_FILES['bike_img']['name'];
	$sz=$_FILES['bike_img']['size'];
$count=1;

foreach($jsn as $u){
	if($_REQUEST["bmodel"]==$u["model"])
	{
		echo "<script type = \"text/javascript\">
					alert(\"Sorry! Bike is already exists...try another model\");
					window.location = (\"addBike.php\");
				</script>";	
				$count = 0;
	}
}

// check file already exists
if(file_exists("..\bike/".$name)){
	echo "<script type = \"text/javascript\">
					alert(\"Sorry! Image is already exists. Try another image\");
					window.location = (\"addBike.php\");
				</script>";
	//echo "Sorry! Image is already exists<br/>";
	$count = 0;
}
// Check file size
if ($sz > 2000000) {
	echo "<script type = \"text/javascript\">
					alert(\"Sorry, image size is too large. Try another image\");
					window.location = (\"addBike.php\");
				</script>";
    $count = 0;
}
if ($count == 0) {
	echo "<script type = \"text/javascript\">
					alert(\"Sorry, file not uploaded. Try again\");
					window.location = (\"addBike.php\");
				</script>";
}
else{
	move_uploaded_file($s,"..\bike/".$name);

	if(isset($_REQUEST["bmodel"])  && isset($_REQUEST["brand"]) && isset($_REQUEST["bprice"]) && isset($_REQUEST["b_qnt"])){
	
	$sql="INSERT INTO bike VALUES ('id','".$_REQUEST['bmodel']."','".$_REQUEST['brand']."','".$_REQUEST['bprice']."','".$_REQUEST['b_qnt']."','status','bike/".$name."')";
	//echo $sql;
	if(mysqli_query($conn, $sql)){
		//echo "New records updated successfully";
		echo "<script type = \"text/javascript\">
					alert(\"Bike has been added successfully\");
					window.location = (\"addBike.php\");
				</script>";
	}
}

else{
	die ("Database query failed. " . mysqli_error($conn));
}
}
	
	mysqli_close($conn);
?>