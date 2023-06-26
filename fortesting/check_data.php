<?php
// Assuming you have a database connection established
include '../include/connect.php';

if (isset($_POST['username'])) {
    $username = $_POST['username'];

    // Perform a query to check if the username already exists in the database
    // Replace 'cudho' with your database name, 'user' with your table name, and 'username_column' with the actual column name for usernames
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<span style="color: red;">Data already exists in the system</span>';
    } else {
        echo '';
    }
}
?>
