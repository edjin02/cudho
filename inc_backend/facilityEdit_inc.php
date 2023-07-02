<?php
require '../include/user_session.php'; // $user_id

if (isset($_POST['submit'])) {
    $head_id = $_POST['head_id']; // hidden display  
    $facility_id = $_POST['facility_id']; // hidden 
    $electricity = $_POST['electricity'];
    $water = $_POST['water'];
    $toilet = $_POST['toilet'];
    $kitchen = $_POST['kitchen'];

    // echo "Facility: " . $facility_id;
    // echo '<br>';
    // echo "Electricity: " . $electricity;
    // echo '<br>';
    // echo "Water: " . $water;
    // echo '<br>';
    // echo "Toilet: " . $toilet;
    // echo '<br>';
    // echo "Kitchen: " . $kitchen;
    // echo '<br>';

    include '../include/connect1.php';

    $sql = "UPDATE `tbl_facility` 
            SET 
                `electricity` = '$electricity', 
                `water` = '$water',
                `toilet` = '$toilet',
                `kitchen` = '$kitchen'  
            WHERE `id` = '$facility_id'";


    if ($con->query($sql) === TRUE) {
        mysqli_close($con);
        
        $_SESSION['head_id'] = $head_id;
        header("Location: ../admin/memberview.php");
        exit();
        
    } else {
        echo "Error updating record: " . $con->error;
    }
}
?>