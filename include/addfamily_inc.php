<?php
$for_id = $_POST['for_id'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$extension = $_POST['extension'];
$gender = $_POST['gender'];
$birthdate_select = $_POST['birthdate_select'];
$civil_status = $_POST['civil_status'];
$occupation = $_POST['occupation'];
$monthly_income = $_POST['monthly_income'];
$relationship = $_POST['relationship'];
$membership = "membership";

require '../include/connect.php'; //$con

$sql = "INSERT INTO `tbl_faminfo` (`id`, `for_id`, `firstname`, `lastname`, `extension`, `middlename`, `gender`, `birthday`, `civil_status`, `occupation`, `relationship`, `monthly_income`, `membership`)
        VALUES (NULL, '" . $for_id . "', '" . $firstname . "', '" . $lastname . "', '" . $extension . "', '" . $middlename . "', '" . $gender . "', '" . $birthday . "', '" . $civil_status . "', '" . $occupation . "', '" . $relationship . "', '" . $monthly_income . "', '" . $membership . "' )";

if ($con->query($sql) === TRUE) {
    mysqli_close($con);
    header("Location: ../admin/memberview.php?id=" . urlencode($for_id));
    exit();
} else {
    echo "Error updating record: " . $con->error;
}

?>