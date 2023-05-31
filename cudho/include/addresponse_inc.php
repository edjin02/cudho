<?php
$username = $_POST['username'];
$password = $_POST['password'];
$encryptedPassword = password_hash($password, PASSWORD_DEFAULT);
$memberof = $_POST['memberof'];
$isactive = $_POST['isactive'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$contactno = $_POST['contactno'];
$ar_dashboard = isset($_POST['ar_dashboard']) ? $_POST['ar_dashboard'] : '0';
$ar_record = isset($_POST['ar_record']) ? $_POST['ar_record'] : '0';
$ar_report = isset($_POST['ar_report']) ? $_POST['ar_report'] : '0';
$ar_systman = isset($_POST['ar_systman']) ? $_POST['ar_systman'] : '0';


require '../include/connect.php'; //$con

//check if username already exist
$query = "SELECT * FROM user WHERE username = '$username'";
$result = $con->query($query);

if ($result->num_rows > 0) {
    echo "Username already been used";
  }

else {
    $sql = "INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `contactno`, `memberof`, `isactive`, `ar_dashboard`, `ar_record`, `ar_report`, `ar_systman` ) 
        VALUES (NULL, '" . $username . "', '" . $encryptedPassword . "', '" . $firstname . "', '" . $middlename . "', '" . $lastname . "', '" . $contactno . "', '" . $memberof . "', '" . $isactive . "', '" . $ar_dashboard . "', '" . $ar_record . "', '" . $ar_report . "', '" . $ar_systman . "' )";

    if (mysqli_query($con, $sql)) {
        mysqli_close($con);
        header("Location: ../auth/user_account.php");
        exit();
      } 

    else {
        echo "Error inserting data: " . mysqli_error($con);
      }
  }
?>