<?php
global $con;
include '../include/connect1.php';

$GLOBALS['head_value'] = $_POST['head_value'];
$GLOBALS['minor_value']  = $_POST['minor_value'];
$tbl_value = $_POST['tbl_value'];

switch ($tbl_value) {
    case 'work':
        work();
        break;

    case 'minor':
        minor();
        break;

    default:
        break;
}

function work() {
    $query = "SELECT * FROM tbl_childwork WHERE head_id = {$GLOBALS['head_value']} AND id = {$GLOBALS['minor_value']}";
    $result = $GLOBALS['con']->query($query);

    $row = $result->fetch_assoc();

    $lastname = $row["lastname"];

    $response = array(
        'lastname' => $lastname
    );

    echo json_encode($response);
}

function minor() {
    $query = "SELECT * FROM tbl_childminor WHERE head_id = {$GLOBALS['head_value']} AND id = {$GLOBALS['minor_value']}";
    $result = $GLOBALS['con']->query($query);

    $row = $result->fetch_assoc();
    $id = $row["id"];
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $middlename = $row["middlename"];
    $extension = $row["extension"];
    $gender = $row["gender"];
    $birthdate = $row["birthdate"];

    $response = array(
        'id' => $id,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'middlename' => $middlename,
        'extension' => $extension,
        'gender' => $gender,
        'birthdate' => $birthdate
    );

    echo json_encode($response);
}
?>
