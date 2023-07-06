<?php
global $con;
include '../include/connect1.php';

function minorDisplayTbl($head_id){
    $query = "SELECT * FROM tbl_childminor WHERE head_id = $head_id";
    $result = $GLOBALS['con']->query($query);

    $id = array();
    $firstname = array();
    $middlename = array();
    $lastname = array();
    $extension = array();
    $birthdate = array();

    while ($row = $result->fetch_assoc()) {
        $id[] = $row["id"];
        $firstname[] = $row["firstname"];
        $middlename[] = $row["middlename"];
        $lastname[] = $row["lastname"];
        $extension[] = $row["extension"];
        $birthdate[] = $row["birthdate"];
    }

    //for calculating age
    $sql = "SELECT CURDATE()";
    $res = $GLOBALS['con']->query($sql);
    $row = $res->fetch_assoc();
    $currentdate = $row['CURDATE()'];

    $ages = array();
    foreach ($birthdate as $date) {
        $birthDateTime = new DateTime($date);
        $currentDateTime = new DateTime($currentdate);
        $ageInterval = $birthDateTime->diff($currentDateTime);
        $age = $ageInterval->y;
        $ages[] = $age;
    }

    $i = 0;
    while ($i < count($id)) {
        echo "<tr class='editMinorBtn' data-toggle='modal' data-target='#minorModal' minor-value='$id[$i]' head-value='$head_id' tbl-value='minor'> 
            <td>" . $firstname[$i] . " " . $middlename[$i] . " " . $lastname[$i] . " " . $extension[$i] . "</td>
            <td>" . $ages[$i] ."</td>
        </tr>";
        $i++;
    }
}

function seniorDisplayTbl($head_id){
    $query = "SELECT * FROM tbl_seniorpwd WHERE head_id = $head_id";
    $result = $GLOBALS['con']->query($query);

    $id = array();
    $firstname = array();
    $middlename = array();
    $lastname = array();
    $senior = array();
    $pwd = array();
    

    while ($row = $result->fetch_assoc()) {
        $id[] = $row["id"];
        $firstname[] = $row["firstname"];
        $middlename[] = $row["middlename"];
        $lastname[] = $row["lastname"];
        $senior[] = $row["senior"];
        $pwd[] = $row["pwd"];
  
    }

    $status = array();
    $i = 0;

    while ($i < count($senior)) {
        if ($senior[$i] && $pwd[$i]) {
            $status[] = 'Senior and Pwd';
        } elseif ($senior[$i]) {
            $status[] = 'Senior';
        } elseif ($pwd[$i]) {
            $status[] = 'Pwd';
        } else {
            $status[] = 'None';
        }

        $i++;
    }


    $i = 0;
    while ($i < count($id)) {
        echo "<tr class='editSeniorBtn' data-toggle='modal' data-target='#seniorModal' minor-value='$id[$i]' head-value='$head_id' tbl-value='senior'> 
            <td>" . $firstname[$i] . " " . $middlename[$i] . " " . $lastname[$i] . "</td>
            <td>" . $status[$i] . "</td>
        </tr>";
        $i++;
    }
    
}

function workDisplayTbl($head_id){
    $query = "SELECT * FROM tbl_childwork WHERE head_id = $head_id";
    $result = $GLOBALS['con']->query($query);

    $id = array();
    $firstname = array();
    $middlename = array();
    $lastname = array();
    $monthIncome = array();

    while ($row = $result->fetch_assoc()) {
        $id[] = $row["id"];
        $firstname[] = $row["firstname"];
        $middlename[] = $row["middlename"];
        $lastname[] = $row["lastname"];
        $monthIncome[] = $row["monthIncome"];
    }

    $i = 0;
    while ($i < count($id)) {
        echo "<tr class='editWorkBtn' data-toggle='modal' data-target='#workModal' minor-value='$id[$i]' head-value='$head_id' tbl-value='work'> 
            <td>" . $firstname[$i] . " " . $middlename[$i] . " " . $lastname[$i] . "</td>
            <td>" . $monthIncome[$i] . "</td>
        </tr>";
        $i++;
    }
    
}   

?>

