<?php 
    include '../include/connect1.php';
    
    if(isset($_POST['action']) && !empty($_POST['action']))
    {
       $action = $_POST['action'];
       
       switch ($action) {
        
        case 'showVerifData':
            showVerifData($con);
            break;

        case 'showUserData':
            showUserData($con);
            break;

        // case 'showFamData':
        //     $id = $_POST['id']; // Retrieve the ID from the AJAX request
        //     showFamData($con, $id);
        //     break;
            
        
        default:
            break;
        }
    }

    function showVerifData($con)
{
    // Start a session
    session_start();

    $sql = "SELECT * FROM tbl_headinfo";
    $result = $con->query($sql);

        while ($r = $result->fetch_assoc()) {
            echo "<tr style='vertical-align: middle;' id='engrlink' onclick='openMemberview(event);' value='" . $r['id'] . "'>";
            echo "<td><span>" . $r['tag'] . "</span></td>";
            echo "<td><span>" . $r['firstname'] . " " . $r['middlename'] . " " . $r['lastname'] . " " . $r['extension'] . "</span></td>";
            echo "<td><span>" . $r['community'] . "</span></td>";
            echo "<td><span>" . $r['barangay'] . "</span></td>";
            echo "<td><span>" . $r['monthIncome'] . "</span></td>";
            
            echo "</tr>";
        }
    } 




    // function showUserData($con)
    // {
        
        
    //     $sql = "SELECT * FROM tbl_user";
    //     $result = $con->query($sql);

    //         while ($r = $result->fetch_assoc()) {
    //             echo "<tr style='vertical-align: middle;' data-toggle='modal' data-target='#viewUserModal' id='engrlink' onclick='viewUserData(" . $r['id'] . ");' value='" . $r['id'] . "'>";
    //             echo "<td><span>" . $r['isactive'] . "</span></td>";
    //             echo "<td><span>" . $r['username'] . "</span></td>";
    //             echo "<td><span>" . $r['firstname'] . " " . $r['middlename'] . " " . $r['lastname'] . "</span></td>";
    //             echo "<td><span>" . $r['contactno'] . "</span></td>";
    //             echo "<td><span>" . $r['memberof'] . "</span></td>";
    //             // Add more table cells for other columns as needed
    //             echo "</tr>";
    //         }
    //     } 

    function showUserData($con)
    {
        $sql = "SELECT * FROM tbl_user";
        $result = $con->query($sql);
        // $count = mysqli_num_rows($result);
    
        while ($r = mysqli_fetch_assoc($result)) {
            // Wrap the onclick attribute value in quotes
            echo "<tr style='vertical-align: middle;' data-toggle='modal' data-target='#viewUserModal' id='engrLink' onclick='viewUserData(".$r['id'].");' value='".$r['id']."'>";
            echo "<td><span>" . $r['isactive'] . "</span></td>";
            echo "<td><span>" . $r['username'] . "</span></td>";
            echo "<td><span>" . $r['firstname'] . " " . $r['middlename'] . " " . $r['lastname'] . "</span></td>";
            echo "<td><span>" . $r['contactno'] . "</span></td>";
            echo "<td><span>" . $r['memberof'] . "</span></td>";
            // Add more table cells for other columns as needed
            echo "</tr>";
        }
    }
    


    
//     function showFamData($con, $id)
// {
//     $sql = "SELECT * FROM tbl_faminfo WHERE id = '$id'";
//     $result = mysqli_query($con, $sql);
//     $count = mysqli_num_rows($result);
    
//     echo "<thead class='btn-yellow'>";
//     echo "<th class='text-center'>FirstName</th>";
//     echo "<th class='text-center'>LastName</th>";
//     echo "<th class='text-center'>MiddleName</th>";
//     echo "</thead>";

//     if ($count > 0) {
//         while ($r = mysqli_fetch_assoc($result)) {
//             echo "<tr style='vertical-align: middle;' data-toggle='modal' data-target='#familyModal' id='engrlink' onclick='viewFamData(" . $r['id'] . ");' value='" . $r['id'] . "'>";
//             // Rest of your table row code
//             echo "<td><span>" . $r['firstname'] . "</span></td>";
//             echo "<td><span>" . $r['lastname'] . "</span></td>";
//             echo "<td><span>" . $r['middlename'] . "</span></td>";
//             // Add more table cells for other columns as needed
//             echo "</tr>";
//         }
//     } else {
//         echo "<tr><td colspan='3'>No family data found.</td></tr>";
//     }
// }


   
?>

<script>
function openMemberview(event) {
  var row = event.currentTarget;
  var id = row.getAttribute('value');
  
  var form = document.createElement('form');
  form.method = 'POST';
  form.action = 'memberview4.php';

  var hiddenInput = document.createElement('input');
  hiddenInput.type = 'hidden';
  hiddenInput.name = 'id';
  hiddenInput.value = id;
  form.appendChild(hiddenInput);

  document.body.appendChild(form);
  form.submit();
}   
</script>