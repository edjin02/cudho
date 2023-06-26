<?php
require '../include/user_session.php'; // $user_id

if (isset($_POST['submit'])) {
    
    $head_id = $_POST['head_id']; // hidden display  
    $spouse_id = $_POST['spouse_id']; //hidden display
    $lastname = $_POST['spouse_lastName'];
    $firstname = $_POST['spouse_givenName'];
    $middlename = $_POST['spouse_middleName'];
    $occupation = $_POST['spouse_occupation'];
    $civilStatus = $_POST['spouse_civilStatus'];
    $monthIncome = $_POST['spouse_monthSalary'];

    echo "Encoded by: " . $user_id;
    echo '<br>';
    echo "Household head: " . $head_id;
    echo '<br>';
    echo "Spouse head: " . $spouse_id;
    echo '<br>';
    echo "Civil Status: " . $civilStatus;
    echo '<br>';
    echo "Last Name: " . $lastname;
    echo '<br>';
    echo "Middle Name: " . $middlename;
    echo '<br>';
    echo "First Name: " . $firstname;
    echo '<br>';
    echo "Occupation: " . $occupation;
    echo '<br>';
    echo "Monthly Income: " . $monthIncome;
    echo '<br>';

    include '../include/connect1.php';

    $sql = "UPDATE `tbl_spouseinfo` SET `firstname` = '$firstname' WHERE `tbl_spouseinfo`.`id` = '$spouse_id'";


    if ($con->query($sql) === TRUE) {
        mysqli_close($con);
        exit();
    } else {
        echo "Error updating record: " . $con->error;
    }
}
?>


