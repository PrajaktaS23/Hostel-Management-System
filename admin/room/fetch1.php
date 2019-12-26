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

// $sql = "SELECT * FROM data WHERE room LIKE  '".$str."' ";

$sql = "SELECT regno,fullname FROM user NATURAL JOIN room  WHERE roomno =$str ";
$result = $conn->query($sql);

if(!empty($str))
{
   

//if ($result->num_rows > 0) {
    // output data of each row
    //while($row = $result->fetch_assoc()) {
        //echo "REGNO:".$row["regno"]."<br>";
        //echo "NAME: ".$row["fullname"]."<br><br>";
        echo "prajakta sonvane <br>";
        echo "namrata sonvane <br>";
        echo "vaishnavi apsingkar<br>";
        echo "megha ghodse ";
    //}
//} else{
    //echo "0 results";
//} 
}

 ?>