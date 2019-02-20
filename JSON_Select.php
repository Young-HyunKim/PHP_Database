<?php
$conn = mysqli_connect('host','id','pw','DB_Name');
$sql = "SELECT * FROM Table_Name";
$row = mysqli_fetch_array($result);

$row = mysqli_fetch_array($result);
$JsonArray = array("number" => $row[0],"Title" => $row[1],"Content" => $row[2],"Date" => $row[3]); // Todo encoding.

$set = json_encode($JsonArray,JSON_UNESCAPED_UNICODE);
echo $set;


?>