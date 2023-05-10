<?php 
include '../include/connect.php';
if(isset($_POST['action']) && !empty($_POST['action']))
{
    $action = $_POST['action'];
    switch ($action) {
        
        case 'userDisplay':
            userDisplay($con);
            break;
            

            
        default: # code...
        break;

    }
}

function userDisplay($con){
    
    $sql = "SELECT * FROM user";
    $result = mysqli_query($con, $sql);
    $r = mysqli_fetch_assoc($result);

    while($row = $result->fetch_assoc()){
        echo "<tr data-toggle='modal' data-target='#editModal' data-id='" . $row["1"] . "'>
            <td>" . $row["isactive"] . "</td>
            <td>" . $row["username"] . "</td>
            <td style='text-align: left'>" . $row["firstname"] . " " . $row["middlename"] . " " . $row["lastname"] . "</td>
            <td>" . $row["contactno"] . "</td>
            <td>" . $row["memberof"] . "</td>
        </tr>";
    }
}

?>