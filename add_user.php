<?php

		require("include/db_bike.php");
		require("include/config.php");
	if(strlen($_REQUEST["name"]) == 0 || $_REQUEST["gender"] == "0" || strlen($_REQUEST["email"]) == 0 || strlen($_REQUEST["contact"]) == 0 || $_REQUEST["city"] == "0" || strlen($_REQUEST["uname"]) == 0 || strlen($_REQUEST["pass"]) == 0 || strlen($_REQUEST["conpass"]) == 0){
		echo "Mandatory fields cannot be empty!";
	}
	else{

		$ar=getBikeFromDB("select username, email, contact from user where username = '".$_REQUEST["uname"]."' or email = '".$_REQUEST["email"]."' or contact = '".$_REQUEST["contact"]."' or status = '0' ");
		$jsn=json_decode($ar,true);
		if(!preg_match("/^[a-zA-Z ]*$/", trim($_REQUEST["name"]))){
			echo "Ivalid name!";
		}
		else if(strlen($_REQUEST["uname"]) < 4){
			echo "Username must contain at least four characters.";
		}
		else if($_REQUEST["pass"] != $_REQUEST["conpass"]){
			echo "Passwords do not match.";
		}
		else if(!empty($jsn)){
			foreach($jsn as $v) {
				if($v["username"] == $_REQUEST["uname"]){
					echo "Username not available.";
					break;
				}
				else if($v["email"] == $_REQUEST["email"]){
					echo "Email already in use.";
					break;
				}
				else if($v["contact"] == $_REQUEST["contact"]){
					echo "Contact number already in use.";
					break;
				}
				
			}
		}
		else if(!filter_var(trim($_REQUEST["email"]), FILTER_VALIDATE_EMAIL)){
			echo "Invalid email!";
		}
		else if(!preg_match('/^[0]{1}[1]{1}[5-9]{1}[0-9]{8}+$/', trim($_REQUEST["contact"]))){
			echo "Invalid mobile no!";
		}
		else{
			if(isset($_REQUEST["name"]) && isset($_REQUEST["gender"]) && isset($_REQUEST["email"]) && isset($_REQUEST["contact"]) && isset($_REQUEST["city"]) && isset($_REQUEST["uname"]) && isset($_REQUEST["pass"])){
	
		$sql="INSERT INTO user VALUES ('".$_REQUEST['name']."','".$_REQUEST['gender']."','".$_REQUEST['email']."','".$_REQUEST['contact']."','".$_REQUEST['city']."','".$_REQUEST['uname']."','".$_REQUEST['pass']."','status')";
		
		if(mysqli_query($conn, $sql)){
		echo "Registration successfully.";
		}
			}
			else{
				echo "Error: ". mysqli_error($conn);
			}
		}
	}
?>