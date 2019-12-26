<?php
require "config.php";
$username=$_POST["username"];

$password=$_POST["password"];



$sql = "SELECT * FROM manager WHERE username='$username' && password='$password';";
$result = $conn->query($sql);

 
    



if ($result->num_rows > 0) {
    
	session_start();
	$_SESSION['aloggedin'] = true;
	
	
	header("location: ../wlcmadmin.php");
    
} else {
    echo "0 results";
}
$conn->close();  ?>