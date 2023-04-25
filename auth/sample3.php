<?php
require '../include/connect.php'; //$con
$query = "SELECT * FROM family_info WHERE for_id = 3 AND relationship = 'spouse'";
$result = $con->query($query);

if ($result->num_rows > 0) {
    // Output the values of the columns for the specific row(s)
    while ($row = $result->fetch_assoc()) {
        $spouse_name = $row["firstname"];
        $spouse_age = $row["age"];
        // Output the values of the spouse's name and age
        echo "<p>Name: " . $spouse_name . ", Age: " . $spouse_age . "</p>";
    }
} else {
    // Output a message if no spouse data is found
    echo "No spouse data found.";
}

$con->close();
?>
