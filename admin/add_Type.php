

<?php
require("include/db_bike.php");
$ar=getBikeFromDB("select name from parts_type where status = '0' ");
$jsn=json_decode($ar,true);

$conn = mysqli_connect("localhost", "root", "", "bike_portal");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


	$s=$_FILES['type_img']['tmp_name'];
	$name=$_FILES['type_img']['name'];
	$sz=$_FILES['type_img']['size'];
$count=1;

foreach($jsn as $u){
	if($_REQUEST["typename"]==$u["name"])
	{
		echo "<script type = \"text/javascript\">
					alert(\"Sorry! Type is already exists...add another one\");
					window.location = (\"addType.php\");
				</script>";	
				$count = 0;
	}
}

// check file already exists
if(file_exists("..\aType/".$name)){
	echo "<script type = \"text/javascript\">
					alert(\"Sorry! Image is already exists. Try another image\");
					window.location = (\"addType.php\");
				</script>";
	$count = 0;
}
// Check file size
if ($sz > 2000000) {
	echo "<script type = \"text/javascript\">
					alert(\"Sorry, image size is too large. Try another image\");
					window.location = (\"addType.php\");
				</script>";
    $count = 0;
}
if ($count == 0) {
	echo "<script type = \"text/javascript\">
					alert(\"Sorry, file not uploaded. Try again\");
					window.location = (\"addType.php\");
				</script>";
}
else{
	move_uploaded_file($s,"..\aType/".$name);
	if(isset($_REQUEST["typename"])){
	
	$sql="INSERT INTO parts_type VALUES ('id','".$_REQUEST['typename']."','status','aType/".$name."')";
	if(mysqli_query($conn, $sql)){
		echo "<script type = \"text/javascript\">
					alert(\"Type has been added successfully\");
					window.location = (\"addType.php\")
				</script>";
	}
}

else{
	echo "Invalid parameter !";
}
}
?>