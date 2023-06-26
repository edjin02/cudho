<?php
    require '../include/connect.php'; //$con
    $sql = "SELECT * FROM user";
    $result = $con->query($sql);

    while($row = $result->fetch_assoc()){
        echo "<tr data-toggle='modal' data-target='#editModal' data-id='" . $row["id"] . "'>
            <td>" . $row["isactive"] . "</td>
            <td>" . $row["username"] . "</td>
            <td style='text-align: left'>" . $row["firstname"] . " " . $row["middlename"] . " " . $row["lastname"] . "</td>
            <td>" . $row["contactno"] . "</td>
            <td>" . $row["memberof"] . "</td>
        </tr>";
    }
?>