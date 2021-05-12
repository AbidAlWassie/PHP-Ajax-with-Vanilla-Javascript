<?php
$conn = mysqli_connect("localhost", "root", "", "classicmodels", "3307");
$result = mysqli_query($conn, "SELECT * FROM employees");

$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}

echo json_encode($data);
exit();