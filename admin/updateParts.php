 
<?php

include ("include/config.php");


if (isset($_POST['sbt'])) {
	
	 $id = $_POST['pid'];
     $model = $_POST['pmodel'];
	 $type = $_POST['type'];
	 $price = $_POST['pprice'];
	 $qnt = $_POST['p_qnt'];
	 $sts = $_POST['p_status'];

		
	$sql="UPDATE parts SET model = '$model', type_id = '$type', price = '$price', quantity = '$qnt', status = '$sts' WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	}
	
		if($result){		
			echo "<script type = \"text/javascript\">
					alert(\"Bike has been updated successfully\");
					window.location = (\"partsMgm.php\");
				</script>";
		
	}
	
	else{
		die ("Database query failed. " . mysqli_error($conn));
	}
	
	
	
	//close database connection
	mysqli_close($conn);

?>