<?php
require '../include/user_session.php'; // $user_id
include '../include/connect1.php';

if (isset($_POST['submit'])) {
    $head_id = $_POST['head_id']; // hidden display  
    $option = $_POST['optionSenior'];

    $id = $_POST['senior_id'];
    $gender = $_POST['senior_gender'];
    $birthdate = $_POST['senior_birthDate'];
    $lastname = $_POST['senior_lastName'];
    $firstname = $_POST['senior_givenName'];
    $middlename = $_POST['senior_middleName'];
    $extension = $_POST['senior_extension'];
    $maidenname = $_POST['senior_maidenName'];
    
    // for the checkbox value
    $senior_Box = isset($_POST['senior_Box']) ? $_POST['senior_Box'] : '';
    $senior_Box = ($senior_Box == 'checked') ? '1' : '0';
    $pwd_Box = isset($_POST['pwd_Box']) ? $_POST['pwd_Box'] : '';
    $pwd_Box = ($pwd_Box == 'checked') ? '1' : '0';

    // CONDITION EITHER EDIT OR UPDATE IN SQL
    if ($option == 'edit') {
        $sql = "UPDATE `tbl_seniorpwd` 
            SET 
                `gender` = '$gender',
                `birthdate` = '$birthdate',
                `lastname` = '$lastname',
                `firstname` = '$firstname',
                `middlename` = '$middlename',
                `extension` = '$extension',
                `maidenname` = '$maidenname',
                `senior` = '$senior_Box',
                `pwd` = '$pwd_Box'
            WHERE `id` = $id";
    
    } 
    else if ($option == 'add') {
        $sql = "INSERT INTO `tbl_seniorpwd` (`head_id`, `user_id`, `firstname`, `lastname`, `middlename`, `extension`,`maidenname`,`gender`,`birthdate`,`senior`,`pwd`) 
                VALUES ('$head_id', '$user_id', '$firstname', '$lastname', '$middlename', '$extension', '$maidenname', '$gender', '$birthdate' , '$senior_Box' , '$pwd_Box')";
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