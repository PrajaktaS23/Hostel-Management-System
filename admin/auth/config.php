<?php

$username="root";
$password="";
$host="localhost";
$db="dbcl";

$conn = new mysqli($host, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>