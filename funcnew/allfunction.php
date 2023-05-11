<?php 
include '../include/connect.php';
if(isset($_POST['action']) && !empty($_POST['action']))
{
    $action = $_POST['action'];
    switch ($action) {
        
        case 'getUserData':
            $id = $_POST['id'];
            $userData = getUserData($id);
            echo json_encode($userData);
            break;

        default: # code...
        break;

    }
}

function getUserData($id) {
    // create a database connection
    require '../include/connect.php';

    // prepare SQL query
    $sql = "SELECT * FROM users WHERE id = $id";

    // execute query
    $result = mysqli_query($con, $sql);

    // check if query returned any results
    if (mysqli_num_rows($result) > 0) {
        // fetch data from query result
        $row = mysqli_fetch_assoc($result);

        // return user data as an array
        return $row;
    } else {
        // if no results were found, return false
        return false;
    }

    // close database connection
    mysqli_close($con);
}
?>
