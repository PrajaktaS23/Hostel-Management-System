<?php
require "config.php";
$regno=$_POST["regno"];

$password=$_POST["password"];



$sql = "SELECT * FROM user WHERE regno='$regno' && password='$password';";
$result = $conn->query($sql);

 
    $row = $result->fetch_array();
    if ($result->num_rows > 0)
    {
    $fullname= $row['fullname'];
    $email= $row['email'];
    $contact= $row['contact'];
    $address= $row['address'];
    $regno= $row['regno'];
    $isallocated=$row['isallocated'];

    }
    else
    {
    $fullname = '0';
    $email='0';
    $contact= '0';
    $address='0';
    $regno= '0';
    $isallocated='0';
     }

 if ($isallocated==1)
 {

    $sql = "SELECT * FROM room WHERE regno='$regno';";
    $roomresult = $conn->query($sql);

     $row = $roomresult->fetch_array();
    if ($roomresult->num_rows > 0)
    {
    $roomno= $row['roomno'];
    $hostelname=$row['hostelname'];
    }
    else
    {
   
    $roomno='0 result';
    $hostelname='0 result';
     }


    
   

    
     
 }




if ($result->num_rows > 0) {
    session_start();
	$_SESSION['loggedin'] = true;
	$_SESSION['regno']=$regno;
	$_SESSION['fullname']=$fullname;
	$_SESSION['email']=$email;
	$_SESSION['contact']=$contact;
	$_SESSION['address']=$address;
    $_SESSION['isallocated']=$isallocated;
	$_SESSION['roomno']=$roomno;
    $_SESSION['hostelname']=$hostelname;
	header("location: ../wlcmstudent.php");
    
} else {
    echo "0 results";
}
$conn->close();  ?>