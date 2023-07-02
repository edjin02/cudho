<?php

//for household head data
include '../include/connect1.php';

$query = "SELECT * FROM tbl_headinfo WHERE id = $head_id";
$result = $con->query($query);

$row = $result->fetch_assoc();
$head_firstname = $row["firstname"];
$head_middlename = $row["middlename"];
$head_lastname = $row["lastname"];
$head_maidenname = $row["maidenname"];
$head_extension = $row["extension"];
$head_barangay = $row["barangay"];
$head_community = $row["community"];
$head_tag = $row["tag"];
$head_birthdate = $row["birthdate"];
$head_gender = $row["gender"];
$head_civilStatus = $row["civilStatus"];
$head_occupation = $row["occupation"];
$head_monthIncome = $row["monthIncome"];
$head_membership = $row["membership"];
$head_tenurStatus = $row["tenurStatus"];
$head_structure = $row["structure"];
$head_yearStay = $row["yearStay"];
$head_lengthStay = $row["lengthStay"];
$head_relocUnavailable = $row["relocUnavailable"];
$head_relocated = $row["relocated"];

// spouse data
$query = "SELECT * FROM tbl_spouseinfo WHERE head_id = $head_id";
$result = $con->query($query);

$row = $result->fetch_assoc();
$spouse_id = $row["id"];
$spouse_firstname = $row["firstname"];
$spouse_middlename = $row["middlename"];
$spouse_lastname = $row["lastname"];
$spouse_maidenname = $row["maidenname"];
$spouse_extension = $row["extension"];
$spouse_birthdate = $row["birthdate"];
$spouse_gender = $row["gender"];
$spouse_civilStatus = $row["civilStatus"];
$spouse_occupation = $row["occupation"];
$spouse_monthIncome = $row["monthIncome"];
$spouse_membership = $row["membership"];

// FACILITY data
$query = "SELECT * FROM tbl_facility WHERE head_id = $head_id";
$result = $con->query($query);

$row = $result->fetch_assoc();
$facility_id = $row["id"];
$electricity = $row["electricity"];
$water = $row["water"];
$toilet = $row["toilet"];
$kitchen = $row["kitchen"];

// interview data
$query = "SELECT * FROM tbl_interinfo WHERE head_id = $head_id";
$result = $con->query($query);

$row = $result->fetch_assoc();
$respondent_id = $row["id"];
$respondent_firstname = $row["res_Fname"];
$respondent_middlename = $row["res_Mname"];
$respondent_lastname = $row["res_Lname"];
$respondent_maiden = $row["res_maiden"];
$respondent_extension = $row["res_extension"];
$respondent_relationship = $row["relationship"];
$respondent_gender = $row["gender"];
$interviewer_firstname = $row["int_Fname"];
$interviewer_middlename = $row["int_Mname"];
$interviewer_lastname = $row["int_Lname"];
$interviewer_date = $row["date"];
$interviewer_remarks = $row["remarks"];

include '../include/connect1.php';

// minor children
$query = "SELECT * FROM tbl_childminor WHERE head_id = $head_id";
$result = $con->query($query);

$minor_id = array();
$minor_firstname = array();
$minor_middlename = array();
$minor_lastname = array();
$minor_extension = array();
$minor_birthdate = array();
$minor_gender = array();

while ($row = $result->fetch_assoc()) {
    $minor_id[] = $row["id"];
    $minor_firstname[] = $row["firstname"];
    $minor_middlename[] = $row["middlename"];
    $minor_lastname[] = $row["lastname"];
    $minor_extension[] = $row["extension"];
    $minor_birthdate[] = $row["birthdate"];
    $minor_birthdate[] = $row["gender"];
}


?>
