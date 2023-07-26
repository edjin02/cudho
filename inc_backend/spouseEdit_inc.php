<?php
require '../include/user_session.php'; // $user_id

if (isset($_POST['submit'])) {
    $head_id = $_POST['head_id']; // hidden display  
    $spouse_id = $_POST['spouse_id']; // hidden display
    $lastname = $_POST['spouse_lastName'];
    $firstname = $_POST['spouse_givenName'];
    $middlename = $_POST['spouse_middleName'];
    $occupation = $_POST['spouse_occupation'];
    $civilStatus = $_POST['spouse_civilStatus'];
    $monthIncome = $_POST['spouse_monthSalary'];
    $gender = $_POST['spouse_gender'];
    $maidenname = $_POST['spouse_maidenName'];
    $extension = $_POST['spouse_extension'];
    $birthdate = $_POST['spouse_birthDate'];

    $pagibigBox = isset($_POST["spouse_pag-ibigBox"]) && $_POST["spouse_pag-ibigBox"] === 'checked' ? 1 : 0;
    $sssBox = isset($_POST["spouse_sssBox"]) && $_POST["spouse_sssBox"] === 'checked' ? 1 : 0;
    $other = isset($_POST["spouse_other"]) ? $_POST["spouse_other"] : "";

    // echo "pagibigBox: " . $pagibigBox;
    // echo '<br>';
    // echo " sssBox: " . $sssBox;
    // echo '<br>';
    // echo "other: " . $other;
    // echo '<br>';

    include '../include/connect1.php';

    $sql = "UPDATE `tbl_spouseinfo` 
            SET 
                `firstname` = '$firstname', 
                `lastname` = '$lastname',
                `middlename` = '$middlename',
                `occupation` = '$occupation',
                `civilStatus` = '$civilStatus',
                `monthIncome` = '$monthIncome',
                `gender` = '$gender',
                `maidenname` = '$maidenname',
                `extension` = '$extension',
                `birthdate` = '$birthdate',
                `pagIbig` = '$pagibigBox',
                `sss` = '$sssBox',
                `other` = '$other'  
            WHERE `id` = '$spouse_id'";


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