<?php
    require '../include/connect.php'; //$con
    $query = "SELECT * FROM response_info WHERE for_id = $id";
    $result = $con->query($query);
    while ($row = $result->fetch_assoc()) {
    echo " <tr>
            <td>" . $row["respondent"] . "</td>
            <td>" . $row["interviewer"] . "</td>
            <td>" . $row["remarks"] . "</td>
            </tr>";
    }
    $con->close();
?>