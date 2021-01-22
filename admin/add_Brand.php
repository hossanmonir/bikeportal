

<?php
require("include/db_bike.php");
$ar=getBikeFromDB("select name from brand where status = '0' ");
$jsn=json_decode($ar,true);

$conn = mysqli_connect("localhost", "root", "", "bike_portal");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


	$s=$_FILES['brand_img']['tmp_name'];
	$name=$_FILES['brand_img']['name'];
	$sz=$_FILES['brand_img']['size'];
$count=1;

foreach($jsn as $u){
	if($_REQUEST["bname"]==$u["name"])
	{
		echo "<script type = \"text/javascript\">
					alert(\"Sorry! Brand is already exists...add another one\");
					window.location = (\"addBrand.php\");
				</script>";	
				$count = 0;
	}
}

// check file already exists
if(file_exists("..\brand/".$name)){
	echo "<script type = \"text/javascript\">
					alert(\"Sorry! Image is already exists. Try another image\");
					window.location = (\"addBrand.php\");
				</script>";
	$count = 0;
}
// Check file size
if ($sz > 2000000) {
	echo "<script type = \"text/javascript\">
					alert(\"Sorry, image size is too large. Try another image\");
					window.location = (\"addBrand.php\");
				</script>";
    $count = 0;
}
if ($count == 0) {
	echo "<script type = \"text/javascript\">
					alert(\"Sorry, file not uploaded. Try again\");
					window.location = (\"addBrand.php\");
				</script>";
}
else{
	move_uploaded_file($s,"..\brand/".$name);
	if(isset($_REQUEST["bname"])){
	
	$sql="INSERT INTO brand VALUES ('brandid','".$_REQUEST['bname']."','status','brand/".$name."')";
	if(mysqli_query($conn, $sql)){
		echo "<script type = \"text/javascript\">
					alert(\"Brand has been added successfully\");
					window.location = (\"addBrand.php\")
				</script>";
	}
}

else{
	echo "Invalid parameter !";
}
}
?>