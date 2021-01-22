<?php

require("include/db_bike.php");
$ar=getBikeFromDB("select model from parts where status = '0' ");
$jsn=json_decode($ar,true);

$conn = mysqli_connect("localhost", "root", "", "bike_portal");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


	$s=$_FILES['parts_img']['tmp_name'];
	$name=$_FILES['parts_img']['name'];
	$sz=$_FILES['parts_img']['size'];
$count=1;

foreach($jsn as $u){
	if($_REQUEST["pmodel"]==$u["model"])
	{
		echo "<script type = \"text/javascript\">
					alert(\"Sorry! Accessories is already exists...try another one\");
					window.location = (\"addParts.php\");
				</script>";	
				$count = 0;
	}
}

// check file already exists
if(file_exists("..\parts/".$name)){
	echo "<script type = \"text/javascript\">
					alert(\"Sorry! Image is already exists. Try another image\");
					window.location = (\"addParts.php\")
				</script>";
	$count = 0;
}
// Check file size
if ($sz > 2000000) {
    echo "<script type = \"text/javascript\">
					alert(\"Sorry, image size is too large. Try another image\");
					window.location = (\"addParts.php\")
				</script>";
    $count = 0;
}
if ($count == 0) {
    echo "<script type = \"text/javascript\">
					alert(\"Sorry, file not uploaded. Try again\");
					window.location = (\"addParts.php\")
				</script>";
}
else{
	move_uploaded_file($s,"..\parts/".$name);

	if(isset($_REQUEST["type"])  && isset($_REQUEST["pmodel"]) && isset($_REQUEST["pprice"]) && isset($_REQUEST["p_qnt"])){
	
	$sql="INSERT INTO parts VALUES ('pid','".$_REQUEST['type']."','".$_REQUEST['pmodel']."','".$_REQUEST['pprice']."','".$_REQUEST['p_qnt']."','status','parts/".$name."')";
	//echo $sql;
	if(mysqli_query($conn, $sql)){
		echo "<script type = \"text/javascript\">
					alert(\"Accessories has been added successfully\");
					window.location = (\"addParts.php\")
				</script>";
	}
}

else{
	die ("Database query failed. " . mysqli_error($conn));
}
}
	
	mysqli_close($conn);
?>