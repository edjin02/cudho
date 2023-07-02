<?php
include '../include/connect1.php';  //$con

// Execute the query to fetch the current date
$sql = "SELECT CURDATE()";
$result = $con->query($sql);

// Check if the query was successful
if ($result && $result->num_rows > 0) {
    // Fetch the result
    $row = $result->fetch_assoc();
    
    // Access the current date
    $currentDate = $row['CURDATE()'];
    
    // Display the current date
    echo $currentDate;
} else {
    echo "Error: " . $con->error;
}

// Close the connection
$con->close();
?>
