<?php
$conn = mysqli_connect("localhost", "root", "","bike_portal");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>