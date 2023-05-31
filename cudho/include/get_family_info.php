<?php
require '../include/connect.php'; //$con
$query = "SELECT * FROM family_info WHERE for_id = $id";
$result = $con->query($query);
while ($row = $result->fetch_assoc()) {
    echo "<tr class='row-clickable' data-toggle='modal' data-target='#editFamilyModal' onclick='testclick(\"" . $row["firstname"] . " " . $row["id"] . "\");'>
        <td>" . $row["firstname"] . "</td>
        <td>" . $row["lastname"] . "</td>
        <td>" . $row["middlename"] . "</td>
    </tr>";
}
$con->close();
?>
