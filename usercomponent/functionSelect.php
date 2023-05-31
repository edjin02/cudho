<!-- 2nd step is to arange data in the table  -->
<?php 
    include '../include/connect.php';
    
    if(isset($_POST['action']) && !empty($_POST['action']))
    {
       $action = $_POST['action'];
       switch ($action) {
        
        case 'showUserData':
            showUserData($con);
            break;
        
        default:
            break;
        }
    }
    
    function showUserData($con)
    {
        $sql = "SELECT * FROM user";
        $result = $con->query($sql);

        if ($result && $result->num_rows > 0) {
            echo "<thead class='btn-yellow'>";
            echo "<th class='text-center'>ISACTIVE</th>";
            echo "<th class='text-center'>USERNAME</th>";
            echo "<th class='text-center'>FULLNAME</th>";
            echo "<th class='text-center'>CONTACTNO</th>";
            echo "<th class='text-center'>MEMBEROF</th>";
            echo "</thead>";

            while ($r = $result->fetch_assoc()) {
                echo "<tr style='vertical-align: middle;' data-toggle='modal' data-target='#myModal' id='engrlink' onclick='viewUserData(" . $r['id'] . ");' value='" . $r['id'] . "'>";
                echo "<td><span>" . $r['isactive'] . "</span></td>";
                echo "<td><span>" . $r['username'] . "</span></td>";
                echo "<td><span>" . $r['firstname'] . " " . $r['middlename'] . " " . $r['lastname'] . "</span></td>";
                echo "<td><span>" . $r['contactno'] . "</span></td>";
                echo "<td><span>" . $r['memberof'] . "</span></td>";
                // Add more table cells for other columns as needed
                echo "</tr>";
            }
        } else {
            echo "No user data found.";
        }
    }
?>
