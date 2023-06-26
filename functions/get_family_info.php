<?php
require '../include/connect.php'; //$con
$query = "SELECT * FROM tbl_faminfo WHERE for_id = $memberId";
$result = $con->query($query);
if ($result && $result->num_rows > 0) {
        echo "<thead class='btn-yellow'>";
        echo "<th class='text-center'>FirstName</th>";
        echo "<th class='text-center'>LastName</th>";
        echo "<th class='text-center'>MiddleName</th>";
        echo "</thead>";

        while ($r = mysqli_fetch_assoc($result)) {
            echo "<tr style='vertical-align: middle;' data-toggle='modal' data-target='#familyModal' id='engrlink' onclick='viewFamData(" . $r['id'] . ");' value='" . $r['id'] . "'>";
            // Rest of your table row code
            echo "<td><span>" . $r['firstname'] . "</span></td>";
            echo "<td><span>" . $r['lastname'] . "</span></td>";
            echo "<td><span>" . $r['middlename'] . "</span></td>";
            // Add more table cells for other columns as needed
            echo "</tr>";
        }
    } else {
        echo "No family data found.";
    }
$con->close();
?>
