<?php
require '../include/user_session.php'; // $user_id
include '../include/connect1.php';

if (isset($_POST['submit'])) {
    $head_id = $_POST['head_id']; // hidden display  
    $option = $_POST['optionWork'];

    $id = $_POST['work_id'];
    $gender = $_POST['work_gender'];
    $birthdate = $_POST['work_birthDate'];
    $lastname = $_POST['work_lastName'];
    $firstname = $_POST['work_givenName'];
    $middlename = $_POST['work_middleName'];
    $extension = $_POST['work_extension'];
    $maidenname = $_POST['work_maidenName'];
    $occupation = $_POST['work_occupation'];
    $monthIncome = $_POST['work_monthSalary'];
    $civilStatus = $_POST['work_civilStatus'];

    echo "head ID " . $head_id ;
    echo '<br>';
    echo "OPTION " . $option ;
    echo '<br>';
    echo "Id " . $id ;
    echo '<br>';

    // CONDITION EITHER EDIT OR UPDATE IN SQL
    if ($option == 'edit') {
        $sql = "UPDATE `tbl_childwork` 
            SET 
                `lastname` = '$lastname',
                `middlename` = '$middlename',
                `firstname` = '$firstname',
                `birthdate` = '$birthdate',
                `gender` = '$gender',
                `extension` = '$extension',
                `maidenname` = '$maidenname',
                `occupation` = '$occupation',
                `monthIncome` = '$monthIncome',
                `civilStatus` = '$civilStatus'
            WHERE `id` = $id";
    
    } 
    else if ($option == 'add') {
        echo 'insert';
        $sql = "INSERT INTO `tbl_childwork` (`head_id`, `user_id`, `firstname`, `lastname`, `middlename`, `extension`,`maidenname`,`gender`,`birthdate`,`occupation`,`monthIncome`,`civilStatus`) 
                VALUES ('$head_id', '$user_id', '$firstname', '$lastname', '$middlename', '$extension', '$maidenname', '$gender', '$birthdate', '$occupation','$monthIncome','$civilStatus')";
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