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

            $regno=$_POST["regno"];
            $hostel=$_POST["hostel"];
            $room=$_POST["room"];

   $sql = "INSERT INTO room (regno,hostelname,roomno) VALUES ('$regno','$hostel','$room')";
   $sql .= "UPDATE user SET isallocated = 1 WHERE regno = '".$regno."';";

   if ($conn->multi_query($sql))
     	{
     echo " success";
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
$conn->close();

?>