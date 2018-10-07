<?php
//header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);
$conn = new mysqli("localhost","root","","project2");	
$result = $conn->query("select Email from $obj->table");
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);
?>