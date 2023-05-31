<?php
require '../include/connect.php';

$sql = "SELECT * FROM user";
$result = $con->query($sql);

$users = array();
while($row = $result->fetch_assoc()) {
    $users[] = $row;
}

echo json_encode($users);
?>
