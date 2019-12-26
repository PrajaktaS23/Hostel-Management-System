<?php
require "config.php";
$fullname=$_POST["fullname"];
$regno=$_POST["regno"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$address=$_POST["address"];
$password=$_POST["password"];

$sql = "INSERT INTO user(fullname,email, contact, address, regno, password)
VALUES ('$fullname','$email','$contact','$address','$regno','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location:../index.php")
?>