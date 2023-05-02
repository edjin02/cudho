
<?php

$sql = "SELECT NOW() as timestamp";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

// Get the timestamp in PHP format
$timestamp = strtotime($row['timestamp']);
$php_timestamp = date('Y-m-d', $timestamp);

// // Print the timestamp
// echo $php_timestamp;
?>