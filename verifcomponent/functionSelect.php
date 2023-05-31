<?php 
    include '../include/connect.php';

    if(isset($_POST['action']) && !empty($_POST['action']))
    {
       $action = $_POST['action'];
       switch ($action) {
        
        case 'showVerifData':
            showVerifData($con);
            break;
        
        default:
            break;
        }
    }

    function showVerifData($con)
    {
        $sql = "SELECT * FROM tbl_verif";
        $result = $con->query($sql);

        if ($result && $result->num_rows > 0) {
            echo "<thead class='btn-yellow'>";
            echo "<th class='text-center'>Tag</th>";
            echo "<th class='text-center'>Household Head</th>";
            echo "<th class='text-center'>Samahan</th>";
            echo "<th class='text-center'>Barangay</th>";
            echo "<th class='text-center'>Monthly Income</th>";
            echo "</thead>";

            while ($r = $result->fetch_assoc()) {
                echo "<tr style='vertical-align: middle;' id='engrlink' onclick='viewVerifData(" . $r['id'] . ");' value='" . $r['id'] . "'>";
                echo "<td><span>" . $r['tag'] . "</span></td>";
                echo "<td><span>" . $r['firstname'] . " " . $r['middlename'] . " " . $r['lastname'] . " " . $r['extension'] . "</span></td>";
                echo "<td><span>" . $r['samahan'] . "</span></td>";
                echo "<td><span>" . $r['barangay'] . "</span></td>";
                echo "<td><span>" . $r['monthly_income'] . "</span></td>";
                // Add more table cells for other columns as needed
                echo "</tr>";
            }
        } else {
            echo "No user data found.";
        }
    }
?>

echo "<script>
    function viewVerifData(id) {
        window.location = 'memberview.php?id=' + id;
    }
</script>";
