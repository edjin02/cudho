<?php
// Assuming you have a database connection established
include '../include/connect.php';

if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['middlename'])) {
    
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];

    // Perform a query to check if the name already exists in the database
    $query = "SELECT * FROM tbl_verif WHERE firstname = '$firstname' AND middlename = '$middlename' AND lastname = '$lastname'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<span style="color: red;">Name already exists in the system.</span>';
    } else {
        echo '';
    }
}
?>
