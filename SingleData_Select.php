<?php
$conn = mysqli_connect('host','id','pw','DB_Name');
$sql = "SELECT * FROM Table_Name";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

echo '<h1>'.$row['0'].'</h1>';
echo '<h1>'.$row['1'].'</h1>';
echo '<h1>'.$row['2'].'</h1>';
?>