 
<?php

include ("include/config.php");


if (isset($_POST['sbt'])) {
	
	 $id = $_POST['brandid'];
     $name = $_POST['bname'];
	 $sts = $_POST['br_status'];

		
	$sql="UPDATE brand SET name = '$name', status = '$sts' WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	}
	
		if($result){		
			echo "<script type = \"text/javascript\">
					alert(\"Bike has been updated successfully\");
					window.location = (\"brandMgm.php\");
				</script>";
		
	}
	
	else{
		die ("Database query failed. " . mysqli_error($conn));
	}
	
	
	
	//close database connection
	mysqli_close($conn);

?>