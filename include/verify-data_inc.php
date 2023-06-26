<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "cudho";

$connection = new mysqli($servername,$username,$password,$database);

if ($connection->connect_error){
    die("Connection failed ". $connection->connect_error);
}

$sql = "SELECT * FROM table_verification";
$result = $connection->query($sql);

$data = array();

while($row = $result->fetch_assoc()){
    $data[] = $row;
}

echo json_encode($data);

?>
