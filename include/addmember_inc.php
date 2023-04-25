<?php
$civil_status = $_POST['civil_status'];
$tag = $_POST['tag'];
$samahan = $_POST['samahan'];
$barangay_select = $_POST['barangay_select'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$extension = $_POST['extension'];
$masterlist_select = $_POST['masterlist_select'];
$gender_select = $_POST['gender_select'];
$birthdate_select = $_POST['birthdate_select'];
$monthly_income = $_POST['monthly_income'];
$occupation = $_POST['occupation'];
$age = 70;


// echo $tag;
// echo "<br>";

require '../include/connect.php'; //$con

//household head, age error

$sql = "INSERT INTO `table_verification` (`id`, `tag`, `firstname`, `middlename`, `lastname`, `samahan`, `barangay`, `monthly_income`, `gender`, `birthday`, `age`, `civil_status`, `occupation`) 
        VALUES (NULL, '" . $tag . "', '" . $firstname . "', '" . $middlename . "', '" . $lastname . "', '" . $samahan . "', '" . $barangay_select . "', '" . $monthly_income . "', '" . $gender_select . "', '" . $birthdate_select . "', '" . $age . "', '" . $civil_status . "', '" . $occupation . "' )";

if (mysqli_query($con, $sql)) {
    mysqli_close($con);
    header("Location: ../auth/verify.php");
    exit();
  } 

else {
    echo "Error inserting data: " . mysqli_error($con);
  }

?>