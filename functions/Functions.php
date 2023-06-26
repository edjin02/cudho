<?php 
include '../include/connect1.php';

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch ($action) {
        case 'getVerifData':
            $id = $_POST['id'];
            getVerifData($con, $id);
            break;

        case 'getUserData':
            $id = $_POST['id'];
            getUserData($con, $id);
            break;

        // case 'getFamData':
        //     $id = $_POST['id'];
        //     getFamData($con);
        //     break; 

        default:
            // Handle unrecognized action
            break;
    }
}



function getVerifData($con, $id)
{
    $sql = "SELECT * FROM tbl_verif WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $r = mysqli_fetch_assoc($result);
    //echo json_encode($r);

    if ($result) {
        $data = array();

        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }

        echo json_encode($data);
    } else {
        // Handle database query error
        echo "Error: " . mysqli_error($con);
    }
}

function getUserData($con, $id)
{
    $sql = "SELECT * FROM tbl_users WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $r = mysqli_fetch_assoc($result);
    // $count = mysqli_num_rows($result);
    $name = "{$r['firstname']} {$r['middlename']} {$r['lastname']}";
    echo json_encode(array('id' => $r['id'], 'sql' => $sql, 'isactive' => $r['isactive'], 'username' => $r['username'],'name' => $name, 'contactno' => $r['contactno'], 'memberof' => $r['memberof'] ));

}
    // if ($result) {
    //     $name = "{$row['firstname']} {$row['middlename']} {$row['lastname']}";
    //     $data = [
    //         'id' => $row['id'],
    //         'isactive' => $row['isactive'],
    //         'username' => $row['username'],
    //         'name' => $name,
    //         'contactno' => $row['contactno'],
    //         'memberof' => $row['memberof']
    //     ];

    //     echo json_encode($data);
    // } else {
    //     // Handle database query error
    //     echo "Error: " . mysqli_error($con);
    // }
// }

// function getFamData($con)
// {
//     $id = $_POST['id'];
//     $sql = "SELECT * FROM users WHERE id = '$id'";
//     $result = mysqli_query($con, $sql);
//     $r = mysqli_fetch_assoc($result);
//     echo json_encode($r);
// }

function getMinorChildData($con1, $id){
    $query = "SELECT * FROM tbl_childminor WHERE head_id = 1";
$result = $con1->query($query);

$minor_id = array();
$minor_firstname = array();
$minor_middlename = array();
$minor_lastname = array();
$minor_extension = array();
$minor_birthdate = array(); 

while ($row = $result->fetch_assoc()) {
    $minor_id[] = $row["id"];
    $minor_firstname[] = $row["firstname"];
    $minor_middlename[] = $row["middlename"];
    $minor_lastname[] = $row["lastname"];
    $minor_extension[] = $row["extension"];
    $minor_birthdate[] = $row["birthdate"];
}

}