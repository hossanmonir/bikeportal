 
<?php

include ("include/config.php");


if (isset($_POST['sbt'])) {
	
	 $id = $_POST['bikeid'];
     $model = $_POST['bmodel'];
	 $brand = $_POST['brand'];
	 $price = $_POST['bprice'];
	 $qnt = $_POST['b_qnt'];
	 $sts = $_POST['b_status'];

		
	$sql="UPDATE bike SET model = '$model', brand_id = '$brand', price = '$price', quantity = '$qnt', status = '$sts' WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	}
	
		if($result){		
			echo "<script type = \"text/javascript\">
					alert(\"Bike has been updated successfully\");
					window.location = (\"adminPage.php\");
				</script>";
		
	}
	
	else{
		die ("Database query failed. " . mysqli_error($conn));
	}
	
	
	
	//close database connection
	mysqli_close($conn);

?>