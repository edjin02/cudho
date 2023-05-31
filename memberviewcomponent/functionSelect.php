<?php 
    include '../include/connect.php';

    if (isset($_GET['id']) && !empty($_GET['id'])) 
    {
        $id = $_GET['id'];
        showFamData($con, $id);
    } else {
        echo "No ID provided.";
    }
        
    
    function showFamData($con, $id)
{
    $sql = "SELECT * FROM tbl_faminfo WHERE for_id = $id";
    $result = $con->query($sql);

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
        echo "No user data found.";
    }
}
?>





       <!-- // case 'showResponseData':
        //     showResponseData($con);
        //     break;
        
// function showResponseData($con)
    // {
    //     $sql = "SELECT * FROM response_info" ;
    //     $result = $con->query($sql);

    //     if ($result && $result->num_rows > 0) {
    //         echo "<thead class='btn-yellow'>";
    //         echo "<th class='text-center'>Respondent</th>";
    //         echo "<th class='text-center'>Interviewer</th>";
    //         echo "<th class='text-center'>Remarks</th>";
    //         echo "</thead>";

    //         while ($r = $result->fetch_assoc()) {
    //             echo "<tr style='vertical-align: middle;' data-toggle='modal' data-target='#myModal' id='engrlink' onclick='viewFamData(" . $r['id'] . ");' value='" . $r['id'] . "'>";
    //             echo "<td><span>" . $r['respondent'] . "</span></td>";
    //             echo "<td><span>" . $r['interviewer'] . "</span></td>";
    //             echo "<td><span>" . $r['remarks'] . "</span></td>";
    //             // Add more table cells for other columns as needed
    //             echo "</tr>";
    //         }
    //     } else {
    //         echo "No user data found.";
    //     }
    // } -->