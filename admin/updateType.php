 
<?php

include ("include/config.php");


if (isset($_POST['sbt'])) {
	
	 $id = $_POST['tid'];
     $name = $_POST['tname'];
	 $sts = $_POST['t_status'];

		
	$sql="UPDATE parts_type SET name = '$name', status = '$sts' WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	}
	
		if($result){		
			echo "<script type = \"text/javascript\">
					alert(\"Bike has been updated successfully\");
					window.location = (\"typeMgm.php\");
				</script>";
		
	}
	
	else{
		die ("Database query failed. " . mysqli_error($conn));
	}
	
	
	
	//close database connection
	mysqli_close($conn);

?>