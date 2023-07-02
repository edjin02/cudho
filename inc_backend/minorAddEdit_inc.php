<?php
require '../include/user_session.php'; // $user_id
include '../include/connect1.php';

if (isset($_POST['submit'])) {
    $head_id = $_POST['head_id']; // hidden display  
    $optionMinor = $_POST['optionMinor'];
    $id = $_POST['minor_id'];

    $gender = $_POST['minor_gender'];
    $birthdate = $_POST['minor_birthDate'];
    $lastname = $_POST['minor_lastName'];
    $firstname = $_POST['minor_givenName'];
    $middlename = $_POST['minor_middleName'];
    $extension = $_POST['minor_extension'];

    // echo "Id " . $id ;
    // echo '<br>';

    // CONDITION EITHER EDIT OR UPDATE IN SQL
    if ($optionMinor == 'edit') {
        $sql = "UPDATE `tbl_childminor` 
            SET 
                `lastname` = '$lastname',
                `middlename` = '$middlename',
                `firstname` = '$firstname',
                `birthdate` = '$birthdate',
                `gender` = '$gender',
                `extension` = '$extension'
            WHERE `id` = $id";
    
    } 
    else if ($optionMinor == 'add') {
        echo 'insert';
        $sql = "INSERT INTO `tbl_childminor` (`head_id`, `user_id`, `firstname`, `lastname`, `middlename`, `extension`,`gender`,`birthdate`) 
                VALUES ('$head_id', '$user_id', '$firstname', '$lastname', '$middlename', '$extension', '$gender', '$birthdate')";
    }
    

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