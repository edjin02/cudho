<?php
$con = new mysqli("localhost", "root", "", "cudho");
if ($con->connect_error) {
    die("Failed to connect: " . $con->connect_error);
}
?>