<?php
    require '../include/connect.php'; //$con
    $query = "SELECT * FROM response_info WHERE for_id = $memberId";
    $result = $con->query($query);
    if ($result && $result->num_rows > 0) {
                echo "<thead class='btn-yellow'>";
                echo "<th class='text-center'>Respondent</th>";
                echo "<th class='text-center'>Interviewer</th>";
                echo "<th class='text-center'>Remarks</th>";
                echo "</thead>";
    
                while ($r = $result->fetch_assoc()) {
                    echo "<tr style='vertical-align: middle;' data-toggle='modal' data-target='#responseModal' id='engrlink' onclick='viewResponseData(" . $r['id'] . ");' value='" . $r['id'] . "'>";
                    echo "<td><span>" . $r['respondent'] . "</span></td>";
                    echo "<td><span>" . $r['interviewer'] . "</span></td>";
                    echo "<td><span>" . $r['remarks'] . "</span></td>";
                    // Add more table cells for other columns as needed
                    echo "</tr>";
                }
            } else {
                echo "No response data found.";
            }
?>