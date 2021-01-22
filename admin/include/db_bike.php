<?php
	/*function getDataFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","bike_portal");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$arr=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return $arr;
}*/

function getBikeFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","bike_portal");
	//echo $sql;
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$arr=array();
	//print_r($result);
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
	
	return $arr;
}
?>