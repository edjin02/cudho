<?php

$for_id = $_POST['for_id'];
$year_stay = $_POST['year_stay'];
$length_stay = $_POST['length_stay'];
$electricity = $_POST['electricity'];
$waterservices = $_POST['waterservices'];
$toilet = $_POST['toilet'];
$kitchen = $_POST['kitchen'];
$incase_relocation = $_POST['incase_relocation'];
$respondent = $_POST['respondent'];
$relationship_head = $_POST['relationship_head'];
$total_mon_inc = $_POST['total_mon_inc'];
$interviewer = $_POST['interviewer'];
$remarks = $_POST['remarks'];

// echo $for_id;
// echo "<br>";

require '../include/connect.php'; //$con

$sql = "INSERT INTO `response_info` (`id`, `for_id`, `year_stay`, `length_stay`, `electricity`, `waterservices`, `toilet`, `kitchen`, `incase_relocation`, `respondent`, `relationship_head`, `total_mon_inc`, `interviewer`, `remarks`) 
        VALUES (NULL, '" . $for_id . "', '" . $year_stay . "', '" . $length_stay . "', '" . $electricity . "', '" . $waterservices . "', '" . $toilet . "', '" . $kitchen . "', '" . $incase_relocation . "', '" . $respondent . "', '" . $relationship_head . "', '" . $total_mon_inc . "', '" . $interviewer . "' , '" . $remarks . "' )";

if ($con->query($sql) === TRUE) {
    mysqli_close($con);
    header("Location: ../auth/memberview.php?id=" . urlencode($for_id));
    exit();
} else {
    echo "Error updating record: " . $con->error;
}

?>