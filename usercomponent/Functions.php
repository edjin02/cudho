<!-- //first to implement connect to php -->

<?php
include '../include/connect.php';

if (isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch ($action) {
        case 'getUserData':
            $id = $_POST['id'];
            getUserData($con);
            break;

        default:
            # code...
            break;
    }
}

function getUserData($con)
{
    $id = $_POST['id'];
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $r = mysqli_fetch_assoc($result);

    $name = "{$r['firstname']} {$r['middlename']} {$r['lastname']}";
    $data = [
        'id' => $r['id'],
        'isactive' => $r['isactive'],
        'username' => $r['username'],
        'name' => $name,
        'contactno' => $r['contactno'],
        'memberof' => $r['memberof']
    ];

    echo json_encode($data);
}

