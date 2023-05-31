<?php

require 'connect.php';

$sql = "SELECT * FROM table_verification";
$result = $con->query($sql);

$data = array();

while($row = $result->fetch_assoc()){
    $data[] = $row;
}

echo json_encode($data);

?>
