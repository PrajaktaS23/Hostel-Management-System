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
    $sql = "INSERT INTO room (regno,hostelname,roomno)
VALUES ('$regno','$hostel','$room')";
$sql1="UPDATE `user` SET `isallocated` = 1 WHERE `regno` = '".$regno."';";
// $sql = $conn->query($sql1);



if ($conn->query($sql)) {
    echo "assigned room successfuly";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->query($sql1)) {
    echo "add";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// if($result->rowCount() > 0)  {
//     echo "assigned =1  successfuly";
// } else {
//     echo "Error: " . $sql1 . "<br>" . $conn->error;
// }
$conn->close();


?>