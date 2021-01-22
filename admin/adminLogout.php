<pre>
<?php
session_start();
unset($_SESSION["uname"]);
unset($_SESSION["pass"]);
header("location: http://localhost/bikeshop/adminLogin.php");

?>
</pre>