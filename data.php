<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "classicmodels";
$port = "3307";

$conn = mysqli_connect($host, $user, $password, $database, $port);
$result = mysqli_query($conn, "SELECT * FROM employees");

$data = array();
while ($row = mysqli_fetch_object($result))
{
  array_push($data, $row);
}

echo json_encode($data);
exit();