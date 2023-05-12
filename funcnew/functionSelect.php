<?php 
    include '../include/connect.php';
    
    if(isset($_POST['action']) && !empty($_POST['action']))
    {
       $action = $_POST['action'];
       switch ('$action') {
        
        case 'showUserData':
            showUserData($con);
            break;
        
        default: # code...
            break;
        }
    }
    
    
    function showUserData($con){
        include '../include/connect.php';
        
        $sql = "SELECT * FROM user";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        echo "<thead class='btn-yellow'>";
            echo "<th class='text-center'> ISACTIVE </th>";
            echo "<th class='text-center'> USERNAME </th>";
            echo "<th class='text-center'> FULLNAME </th>";
            echo "<th class='text-center'> CONTACTNO </th>";
            echo "<th class='text-center'> MEMBEROF </th>";
            echo "</thead>";
        
    if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr style = 'vertical-align: middle;' data-toggle='modal' data-target='#viewUsermodal' id='engrlink' onclick='viewUserData(".$r['id'].");' value='".$r['id']."'>";
                echo "<td><input type=text id='rowbutton' name='".$r['username']."' value='".$r['username']."'></td>";
                echo "<td><input type=text id='rowbutton' name='".$r['contactno']."' value='".$r['contactno']."'></td>";
            }
    } else {
                echo "kahit ano";
                
            }


    }
    
?>