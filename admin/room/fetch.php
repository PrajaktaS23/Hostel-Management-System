<?php 

$str = $_GET["x"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcl";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT regno,roomno,hostelname FROM user NATURAL JOIN room  WHERE fullname LIKE  '".$str."' ";
$result = $conn->query($sql);



if(!empty($str))
{
 

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "USERID:".$row["regno"]."<br>";
        echo "ROOM NO: ".$row["roomno"]."<br>";
        echo "HOSTEL NAME:".$row["hostelname"]."<br>";
    }
} else{
    echo "0 results";
} 
}

 ?>