<?php $id = $_GET['id'];?>

<?php // for member view data
require '../include/connect.php'; //$con
require '../include/getday_inc.php'; //$php_timestamp


$query = "SELECT * FROM table_verification WHERE id = $id";
$result = $con->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $tag = $row["tag"];
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $middlename = $row["middlename"];
    $barangay_select = $row["barangay"];
    $samahan = $row["samahan"];
    $monthly_income = $row["monthly_income"];
    $gender_select = $row["gender"];
    $civil_status = $row["civil_status"];
    $extension = $row["extension"];
    $occupation = $row["occupation"];
    $birthdate_select = $row['birthday']; 
    $marketlist_select = $row['marketlist'];
    $age = date_diff(date_create($birthdate_select), date_create($php_timestamp));
    $age = $age->format('%y'); 
} 
$con->close();
?>

<?php // for spouse info
require '../include/connect.php'; //$con
$query = "SELECT * FROM family_info WHERE for_id = $id AND relationship = 'spouse'";
$result = $con->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $spouse_fname = $row["firstname"];
    $spouse_mname = $row["middlename"];
    $spouse_lname = $row["lastname"];
    $spouse_mon_inc = $row["monthly_income"];
    $spouse_mem_ship = $row["membership"];
    $spouse_birthdate = $row["birthday"];
    $spouse_age = date_diff(date_create($spouse_birthdate), date_create($php_timestamp));
    $spouse_age = $spouse_age->format('%y'); 
    }
else {
    $spouse_fname = "None";
    $spouse_mname = "";
    $spouse_lname = "";
    $spouse_mon_inc = "None";
    $spouse_mem_ship = "None";
    $spouse_age = "None";
}
$con->close();
?>

<?php

require '../include/connect.php'; //$con
$query = "SELECT * FROM family_info WHERE for_id = $id";
$result = $con->query($query);


$family_info = array();
while ($row = $result->fetch_assoc()) {
  $family_info[] = array(
    'for_id' => $row['for_id'],
    'firstname' => $row['firstname'],
    'lastname' => $row['lastname'],
    'middlename' => $row['middlename'],
    'extension' => $row['extension'],
    'gender' => $row['gender'],
    'birthday' => $row['birthday'],
    'civil_status' => $row['civil_status'],
    'occupation' => $row['occupation'],
    'monthly_income' => $row['monthly_income'],
    'relationship' => $row['relationship'],
    'membership' => $row['membership']
  );
}

$num_Fam = $result->num_rows;

// $info = $family_info[0];
// $Fam_for_id = $info['for_id'];
// $Fam_firstname = $info['firstname'];
// $Fam_lastname = $info['lastname'];
// $Fam_middlename = $info['middlename'];
// $Fam_extension = $info['extension'];
// $Fam_gender = $info['gender'];
// $Fam_birthday = $info['birthday'];
// $Fam_civil_status = $info['civil_status'];
// $Fam_occupation = $info['occupation'];
// $Fam_monthly_income = $info['monthly_income'];
// $Fam_relationship = $info['relationship'];
// $Fam_membership = $info['membership'];

  
// echo $num_Fam . "<br>";
// echo $Fam_for_id . "<br>";
// echo $Fam_firstname . "<br>";
// echo $Fam_lastname . "<br>";
// echo $Fam_middlename . "<br>";
// echo $Fam_extension . "<br>";
// echo $Fam_gender . "<br>";
// echo $Fam_birthday . "<br>";
// echo $Fam_civil_status . "<br>";
// echo $Fam_occupation . "<br>";
// echo $Fam_monthly_income . "<br>";
// echo $Fam_relationship . "<br>";
// echo $Fam_membership . "<br>";

// $family_info = array(array(1,2,3),array(4,5,6));

// list($id, $for_id, $firstname) = $family_info[1];

// echo $id; // Output: 1
// echo $for_id; // Output: 2
// echo $firstname; // Output: 3

?>

