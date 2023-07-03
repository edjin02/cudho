<?php
function displayValue(){
    
}
    $barangay = isset($_POST["barangay-select-modal"]) ? $_POST["barangay-select-modal"] : "";
    $comAss = isset($_POST["community-select"]) ? $_POST["community-select"] : "";
    $basicHouse = isset($_POST["basicHouse"]) ? $_POST["basicHouse"] : "";
    $tag = isset($_POST["tag"]) ? $_POST["tag"] : "";

    $tenurStatus = isset($_POST["tenurStatus"]) ? $_POST["tenurStatus"] : "";
    $origOwner = isset($_POST["origOwner"]) ? $_POST["origOwner"] : "";

    // display head fields
    $head_gender = isset($_POST["head_gender"]) ? $_POST["head_gender"] : "";
    $head_birthDate = isset($_POST["head_birthDate"]) ? $_POST["head_birthDate"] : "";
    $head_civilStatus = isset($_POST["head_civilStatus"]) ? $_POST["head_civilStatus"] : "";
    $head_lastname = isset($_POST["head_lastName"]) ? $_POST["head_lastName"] : "";
    $head_givenName = isset($_POST["head_givenName"]) ? $_POST["head_givenName"] : "";
    $head_middleName = isset($_POST["head_middleName"]) ? $_POST["head_middleName"] : "";
    $head_extension = isset($_POST["head_extension"]) ? $_POST["head_extension"] : "";
    $head_occupation = isset($_POST["head_occupation"]) ? $_POST["head_occupation"] : "";
    $head_monthSalary = isset($_POST["head_monthSalary"]) ? $_POST["head_monthSalary"] : "";
    $head_maidenName = isset($_POST["head_maidenName"]) ? $_POST["head_maidenName"] : "";
    $pagIbigCheckbox = isset($_POST["head_pag-ibigBox"]) ? $_POST["head_pag-ibigBox"] : "";
    $sssCheckbox = isset($_POST["head_sssBox"]) ? $_POST["head_sssBox"] : "";
    $head_other = isset($_POST["head_other"]) ? $_POST["head_other"] : "";

    $headlogMessage = "ADDRESS\nBarangay: " . $barangay . "\nCommunity Association: " . $comAss
        . "\nBasic Housing Info: " . $basicHouse . "\nTag: " . $tag . "\n";

    $headlogMessage .= "\nHOUSEHOLD HEAD\nTenurial Status: " . $tenurStatus . "\nOriginal Owner: " . $origOwner
        . "\nGender: " . $head_gender . "\nBirthdate: " . $head_birthDate
        . "\nCivil Status: " . $head_civilStatus . "\nLast Name: " . $head_lastname
        . "\nGiven Name: " . $head_givenName . "\nMiddle Name: " . $head_middleName
        . "\nExtension: " . $head_extension . "\nMaiden Name: " . $head_maidenName
        . "\nOccupation: " . $head_occupation . "\nMonthly Salary: " . $head_monthSalary
        . "\nOther: " . $head_other . "\n";

    if (!empty($pagIbigCheckbox)) {
        $headlogMessage .= "Household Head Pag-IBIG/HDMF is checked.\n";
    } else {
        $headlogMessage .= "Household Head Pag-IBIG/HDMF is Not checked.\n";
    }
    if (!empty($sssCheckbox)) {
        $headlogMessage .= "Household Head SSS/GSIS is checked.\n";
    } else {
        $headlogMessage .= "Household Head SSS/GSIS is Not checked.\n";
    }

     // display spouse fields
     $spouse_gender = isset($_POST["spouse_gender"]) ? $_POST["spouse_gender"] : "";
     $spouse_birthDate = isset($_POST["spouse_birthDate"]) ? $_POST["spouse_birthDate"] : "";
     $spouse_civilStatus = isset($_POST["spouse_civilStatus"]) ? $_POST["spouse_civilStatus"] : "";
     $spouse_lastname = isset($_POST["spouse_lastname"]) ? $_POST["spouse_lastname"] : "";
     $spouse_givenName = isset($_POST["spouse_givenName"]) ? $_POST["spouse_givenName"] : "";
     $spouse_middleName = isset($_POST["spouse_middleName"]) ? $_POST["spouse_middleName"] : "";
     $spouse_extension = isset($_POST["spouse_extension"]) ? $_POST["spouse_extension"] : "";
     $spouse_maidenName = isset($_POST["spouse_maidenName"]) ? $_POST["spouse_maidenName"] : "";
     $spouse_occupation = isset($_POST["spouse_occupation"]) ? $_POST["spouse_occupation"] : "";
     $spouse_monthSalary = isset($_POST["spouse_monthSalary"]) ? $_POST["spouse_monthSalary"] : "";
     $spouse_pagibigBox = isset($_POST["spouse_pag-ibigBox"]) ? $_POST["spouse_pag-ibigBox"] : "";
     $spouse_sssBox = isset($_POST["spouse_sssBox"]) ? $_POST["spouse_sssBox"] : "";
     $spouse_other = isset($_POST["spouse_other"]) ? $_POST["spouse_other"] : "";
 
     $spouselogMessage = "\nSPOUSE\nGender: " . $spouse_gender . "\nBirthdate: " . $spouse_birthDate
         . "\nCivil Status: " . $spouse_civilStatus . "\nLast Name: " . $spouse_lastname
         . "\nGiven Name: " . $spouse_givenName . "\nMiddle Name: " . $spouse_middleName
         . "\nExtension: " . $spouse_extension . "\nMaiden Name: " . $spouse_maidenName
         . "\nOccupation: " . $spouse_occupation . "\nMonthly Salary: " . $spouse_monthSalary
         . "\nOther: " . $spouse_other . "\n";
 
     if (!empty($spouse_pagibigBox)) {
         $spouselogMessage .= "Spouse Pag-IBIG/HDMF is checked.\n";
     } else {
         $spouselogMessage .= "Spouse Pag-IBIG/HDMF is Not checked.\n";
     }
     if (!empty($spouse_sssBox)) {
         $spouselogMessage .= "Spouse SSS/GSIS is checked.\n";
     } else {
         $spouselogMessage .= "Spouse SSS/GSIS is Not checked.\n";
     }
     
    //  total children display 
    $totalChildren = isset($_POST["total_children_label"]) ? intval($_POST["total_children_label"]) : 0;
    $childtotallogMessage = "\nTotal Number of Children: " . $totalChildren;

    // minor children display 
    $numChildren = isset($_POST["num_children"]) ? intval($_POST["num_children"]) : 0;
    $minorlogMessage = "\n\nNumber of Children Living with Parents: " . $numChildren;

    for ($i = 1; $i <= $numChildren; $i++) {
        $child_gender = isset($_POST["Mchild_gender_" . $i]) ? $_POST["Mchild_gender_" . $i] : "";
        $child_lastName = isset($_POST["Mchild_lastName_" . $i]) ? $_POST["Mchild_lastName_" . $i] : "";
        $child_givenName = isset($_POST["Mchild_givenName_" . $i]) ? $_POST["Mchild_givenName_" . $i] : "";
        $child_middleName = isset($_POST["Mchild_middleName_" . $i]) ? $_POST["Mchild_middleName_" . $i] : "";
        $child_maidenName = isset($_POST["Mchild_maidenName_" . $i]) ? $_POST["Mchild_maidenName_" . $i] : "";
        $child_birthDate = isset($_POST["Mchild_birthDate_" . $i]) ? $_POST["Mchild_birthDate_" . $i] : "";

        $minorlogMessage .= "\nChild " . $i . " - Gender: " . $child_gender . " Last Name: " . $child_lastName .
            " Given Name: " . $child_givenName . " Middle Name: " . $child_middleName .
            " Maiden Name: " . $child_maidenName . " Birthdate: " . $child_birthDate;
    }

    // Display working children
    $numWorkChildren = isset($_POST["num_workChildren"]) ? intval($_POST["num_workChildren"]) : 0;
    $workinglogMessage = "\n\nNumber of Working Children: " . $numWorkChildren;

    for ($i = 0; $i < $numWorkChildren; $i++) {
        $Wchild_gender = isset($_POST["Wchild_gender_" . $i]) ? $_POST["Wchild_gender_" . $i] : "";
        $Wchild_birthDate = isset($_POST["Wchild_birthDate_" . $i]) ? $_POST["Wchild_birthDate_" . $i] : "";
        $Wchild_civilStatus = isset($_POST["Wchild_civilStatus_" . $i]) ? $_POST["Wchild_civilStatus_" . $i] : "";
        $Wchild_lastname = isset($_POST["Wchild_lastname_" . $i]) ? $_POST["Wchild_lastname_" . $i] : "";
        $Wchild_givenName = isset($_POST["Wchild_givenName_" . $i]) ? $_POST["Wchild_givenName_" . $i] : "";
        $Wchild_middleName = isset($_POST["Wchild_middleName_" . $i]) ? $_POST["Wchild_middleName_" . $i] : "";
        $Wchild_maidenName = isset($_POST["Wchild_maidenName_" . $i]) ? $_POST["Wchild_maidenName_" . $i] : "";
        $Wchild_occupation = isset($_POST["Wchild_occupation_" . $i]) ? $_POST["Wchild_occupation_" . $i] : "";
        $Wchild_pagIbigCheckbox = isset($_POST["Wchild_pag-ibigBox_" . $i]);
        $Wchild_sssCheckbox = isset($_POST["Wchild_sssBox_" . $i]);
        $Wchild_other = isset($_POST["Wchild_other_" . $i]) ? $_POST["Wchild_other_" . $i] : "";
        $Wchild_monthSalary = isset($_POST["Wchild_monthSalary_" . $i]) ? $_POST["Wchild_monthSalary_" . $i] : "";

        $workinglogMessage .= "\nChild " . ($i + 1) . " - Gender: " . $Wchild_gender . " Birthdate: " . $Wchild_birthDate .
            " Civil Status: " . $Wchild_civilStatus . " Last Name: " . $Wchild_lastname .
            " Given Name: " . $Wchild_givenName . " Middle Name: " . $Wchild_middleName .
            " Maiden Name: " . $Wchild_maidenName . " Occupation: " . $Wchild_occupation .
            " Monthly Salary: " . $Wchild_monthSalary . " Other: " . $Wchild_other;

        if ($Wchild_pagIbigCheckbox) {
            $workinglogMessage .= " Pag-IBIG/HDMF: Checked";
        } else {
            $workinglogMessage .= " Pag-IBIG/HDMF: Not Checked";
        }

        if ($Wchild_sssCheckbox) {
            $workinglogMessage .= " SSS/GSIS: Checked";
        } else {
            $workinglogMessage .= " SSS/GSIS: Not Checked";
        }
    }

    // Display total monthly 
    $totalMonthly = isset($_POST["totalMonthly"]) ? intval($_POST["totalMonthly"]) : 0;
    $monthlyTotallogMessage = "Total Monthly Salary: " . $totalMonthly;
    
    // Display Senior/PWD in log
    $numSenior = isset($_POST["num_senior"]) ? intval($_POST["num_senior"]) : 0;
    $SplogMessage = "\n\nTotal Number of Senior Citizen and PWD: " . $numSenior;

    for ($i = 1; $i <= $numSenior; $i++) {
        $gender = isset($_POST["gender_" . $i]) ? $_POST["gender_" . $i] : "";
        $birthDate = isset($_POST["birthDate_" . $i]) ? $_POST["birthDate_" . $i] : "";
        $seniorBox = isset($_POST["seniorBox_" . $i]);
        $pwdBox = isset($_POST["pwdBox_" . $i]);
        $SP_lastName = isset($_POST["SP_lastname_" . $i]) ? $_POST["SP_lastname_" . $i] : "";
        $SP_givenName = isset($_POST["SP_givenName_" . $i]) ? $_POST["SP_givenName_" . $i] : "";
        $SP_middleName = isset($_POST["SP_middleName_" . $i]) ? $_POST["SP_middleName_" . $i] : "";
        $SP_maidenName = isset($_POST["SP_maidenName_" . $i]) ? $_POST["SP_maidenName_" . $i] : "";

        $SplogMessage .= "\nSenior " . $i . ": - Gender: " . $gender . " Birthdate: " . $birthDate .
            " Senior Citizen: " . ($seniorBox ? "Checked" : "Not Checked") .
            " PWD: " . ($pwdBox ? "Checked" : "Not Checked") .
            " Last Name: " . $SP_lastName .
            " Given Name: " . $SP_givenName .
            " Middle Name: " . $SP_middleName .
            " Maiden Name: " . $SP_maidenName . "\n\n";
    }

    // Display Year of Stay and Length of Stay
    $yearStay = isset($_POST["yearStay"]) ? $_POST["yearStay"] : "";
    $yearLength = isset($_POST["yearLength"]) ? intval($_POST["yearLength"]) : 0;
    $yearlogMessage = "\nYear of Stay: " . $yearStay . "\tLength of Stay: " . $yearLength;

    // Display Facilities field in log
    $electricity = isset($_POST["electricity"]) ? $_POST["electricity"] : "";
    $water_serv = isset($_POST["water_serv"]) ? $_POST["water_serv"] : "";
    $toilet = isset($_POST["toilet"]) ? $_POST["toilet"] : "";
    $kitchen = isset($_POST["kitchen"]) ? $_POST["kitchen"] : "";

    $facillogMessage = "\n\nFACILITIES" . "\nElectricity: " . $electricity . "\nWater Service: " . $water_serv
        . "\nToilet: " . $toilet . "\nKitchen: " . $kitchen;

    // Display Respondent field in log
    $respondent_gender = isset($_POST["respondent_gender"]) ? $_POST["respondent_gender"] : "";
    $respondent_relation = isset($_POST["respondent_relation"]) ? $_POST["respondent_relation"] : "";
    $respondent_lastname = isset($_POST["respondent_lastname"]) ? $_POST["respondent_lastname"] : "";
    $respondent_givenName = isset($_POST["respondent_givenName"]) ? $_POST["respondent_givenName"] : "";
    $respondent_middleName = isset($_POST["respondent_middleName"]) ? $_POST["respondent_middleName"] : "";
    $respondent_maidenName = isset($_POST["respondent_maidenName"]) ? $_POST["respondent_maidenName"] : "";

    $respondlogMessage = "\n\nRESPONDENT(TUMUGON)" . "\nGender: " . $respondent_gender
        . "\nRelationship to Household Head: " . $respondent_relation . "\nLast Name: "
        . $respondent_lastname . "\nGiver Name: " . $respondent_givenName . "\nMiddle Name: "
        . $respondent_middleName . "\nMaiden Name: " . $respondent_maidenName;

    
    // Display Interviewer fields in log
    $interviewer_gender = isset($_POST["interviewer_gender"]) ? $_POST["interviewer_gender"] : "";
    $interviewer_lastName = isset($_POST["interviewer_lastName"]) ? $_POST["interviewer_lastName"] : "";
    $interviewer_givenName = isset($_POST["interviewer_givenName"]) ? $_POST["interviewer_givenName"] : "";
    $interviewer_middleName = isset($_POST["interviewer_middleName"]) ? $_POST["interviewer_middleName"] : "";
    $interviewer_maidenName = isset($_POST["interviewer_maidenName"]) ? $_POST["interviewer_maidenName"] : "";

    $interlogMessage = "\n\nINTERVIEWER(NAKIPAGPANAYAM)" . "\nGender: " . $interviewer_gender
    . "\nLast Name: " . $interviewer_lastName . "\nGiver Name: " . $interviewer_givenName .
    "\nMiddle Name: " . $interviewer_middleName . "\nMaiden Name: \n\n" . $interviewer_maidenName;

    // Display Structure Type and Remark fields in log
    $type_structure = isset($_POST["type_structure"]) ? $_POST["type_structure"] : "";
    $remark = isset($_POST["remark"]) ? $_POST["remark"] : "";

    $typeremarklogMessage = "\n\nType of Structure: " . $type_structure . "\nRemarks: " . $remark;



    echo nl2br($headlogMessage);
    echo nl2br($spouselogMessage);
    echo nl2br($childtotallogMessage);
    echo nl2br($minorlogMessage);
    echo nl2br($workinglogMessage);
    echo nl2br($monthlyTotallogMessage);
    echo nl2br($SplogMessage);
    echo nl2br($yearlogMessage);
    echo nl2br($facillogMessage);
    echo nl2br($respondlogMessage);
    echo nl2br($interlogMessage);
    // Display selected radio button in log
    $relocationChoice = isset($_POST["relocationChoice"]) ? $_POST["relocationChoice"] : "";

    if (!empty($relocationChoice)) {
        echo "In case Relocation is unavailable, what will you choose?:\nSelected Option: " . $relocationChoice;
    } else {
        echo "In case Relocation is unavailable, what will you choose?:\nNo option selected.";
    }
    echo nl2br($typeremarklogMessage);
    
    
?>