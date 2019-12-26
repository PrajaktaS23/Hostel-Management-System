<?php

require "../auth/config.php";

$roomNo = $_POST['roomNo'];
$sql = "SELECT count(roomno) as students FROM room WHERE roomno='".$roomNo."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row['students'];

?>