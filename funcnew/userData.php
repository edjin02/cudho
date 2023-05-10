<?php
    require '../include/connect.php';
    $sql = "SELECT * FROM user";
    $result = $con->query($sql);

    $data = [];
    while ($row = $result->fetch_assoc()) {
        $name = "{$row['firstname']} {$row['middlename']} {$row['lastname']}";
        $data[] = [
            'id' => $row['id'],
            'isactive' => $row['isactive'],
            'username' => $row['username'],
            'name' => $name,
            'contactno' => $row['contactno'],
            'memberof' => $row['memberof']
        ];
    }

    header('Content-type: application/json');
    echo json_encode($data);
?> 