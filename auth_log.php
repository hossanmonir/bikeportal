<html>
<head>
	
</head>
<body>

<pre>
<?php

require("include/db_bike.php");
$ar=getBikeFromDB("select * from admin where status = '0' ");
$jsn=json_decode($ar,true);




$x=0;
foreach($jsn as $u)
{
	if($_REQUEST["uname"]==$u["uname"] && $_REQUEST["pass"]==$u["pass"])
	{
		echo "<script type = \"text/javascript\">
					alert(\"Login successfull\");
					window.location = (\"admin/adminPage.php\");
				</script>";
		$x=1;
		session_start();
		$_SESSION["uname"]=$_REQUEST["uname"];
		$_SESSION["pass"]=$_REQUEST["pass"];
		//header("location: http://localhost/session/home.php");
		
	}
	
}

if($x==0)
{
	echo "<script type = \"text/javascript\">
					alert(\"wrong username and password....Please try again\");
					window.location = (\"adminLogin.php\");
				</script>";
	
}





?>
</pre>
</body>
</html>