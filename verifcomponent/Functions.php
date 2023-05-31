<!-- 1st -->

<?php 
include '../include/connect.php';

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch ($action) {
        case 'getVerifData';
            $id = $_POST['id'];
            getVerifdata($con);
            break;

        default:
            # code...
            break;
    }
}

function getVerifData($con)
{
    $id = $_POST['id'];
    $sql = "SELECT * FROM table tbl_verif WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $r = mysqli_fetch_assoc($result);

    $data = array();

    while($r = $result->fetch_assoc()){
        $data[] = $r;
    }

    echo json_encode($data);
}