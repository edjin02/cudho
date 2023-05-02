

<?php
require '../include/connect.php'; //$con

$query = "SELECT * FROM family_info WHERE for_id = 1";
$result = $con->query($query);


$family_info = array();
while ($row = $result->fetch_assoc()) {
  $family_info[] = array(
    'for_id' => $row['for_id'],
    'firstname' => $row['firstname'],
    'lastname' => $row['lastname'],
    'middlename' => $row['middlename'],
    'extension' => $row['extension'],
    'gender' => $row['gender'],
    'birthday' => $row['birthday'],
    'civil_status' => $row['civil_status'],
    'occupation' => $row['occupation'],
    'monthly_income' => $row['monthly_income'],
    'relationship' => $row['relationship'],
    'membership' => $row['membership']
  );
}

// $num_Fam = $result->num_rows;

// $info = $family_info[0];
// $Fam_for_id = $info['for_id'];
// $Fam_firstname = $info['firstname'];
// $Fam_lastname = $info['lastname'];
// $Fam_middlename = $info['middlename'];
// $Fam_extension = $info['extension'];
// $Fam_gender = $info['gender'];
// $Fam_birthday = $info['birthday'];
// $Fam_civil_status = $info['civil_status'];
// $Fam_occupation = $info['occupation'];
// $Fam_monthly_income = $info['monthly_income'];
// $Fam_relationship = $info['relationship'];
// $Fam_membership = $info['membership'];

  
// echo $num_Fam . "<br>";
// echo $Fam_for_id . "<br>";
// echo $Fam_firstname . "<br>";
// echo $Fam_lastname . "<br>";
// echo $Fam_middlename . "<br>";
// echo $Fam_extension . "<br>";
// echo $Fam_gender . "<br>";
// echo $Fam_birthday . "<br>";
// echo $Fam_civil_status . "<br>";
// echo $Fam_occupation . "<br>";
// echo $Fam_monthly_income . "<br>";
// echo $Fam_relationship . "<br>";
// echo $Fam_membership . "<br>";

// $family_info = array(array(1,2,3),array(4,5,6));

// list($id, $for_id, $firstname) = $family_info[1];

// echo $id; // Output: 1
// echo $for_id; // Output: 2
// echo $firstname; // Output: 3

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 
    
<style>
    * {
        font-family: Arial, sans-serif;
    }
    .chead-color
    {
        background-color:maroon; 
        color:white;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem; 
        padding: 5px;
    }
    .chead-text
    {
        font-size: 15px;
        font-weight: 300;
        margin-bottom: 0;
        margin-top: 5px;
    }
    .chead-color .add
    {
        color:white;
        text-align: right;
    }

    .custom-btn {
        background-color: maroon;
        border: none;
    }

    .cfooter {
        font-weight: bold;
        padding: 0.75rem 1.25rem;
        background-color: rgba(0, 0, 0, 0.03);
        border-top: 0 solid rgba(0, 0, 0, 0.125);
    }

    .cfooter:last-child {
        border-radius: 0 0 calc(0.25rem - 0) calc(0.25rem - 0);
    }

    div.col h8 {
        font-size: 13px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        table-layout: auto;
        
    }
    
    th, td  {
        font-size:13px;
        height: 0;
        text-align: center;
        padding: 20px;
        border: 1px solid #ddd;
    }
    
    td:nth-of-type(3) {
    word-wrap: break-word;
    white-space: normal;
    }

    td:hover{
      cursor: pointer;
    }

    .modal-header {
        background-color: #800000;
        padding: 10px;
    }  

    .modal-title {
        color: #ffffff; 
        margin-left:5px;
    }

    .modal-body {
        padding: 10px;
    }

    .modal-footer {
        background-color: #800000;
        padding: 8px;
    }
</style>

</head>

<body>

<div class="card">
  <div class="row">
  <table>
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Middle Name</th>
    </tr>
  </thead>
  <tbody>
    
    <?php $family_increment = 0; ?>
    <?php foreach ($family_info as $person) : ?>
      <tr class="clickable-row" data-value="<?php echo $family_increment; ?>">
        <td><?php echo $person['firstname']; ?></td>
        <td><?php echo $person['lastname']; ?></td>
        <td><?php echo $person['middlename']; ?></td>
      </tr>
      <?php $family_increment++; ?>
    <?php endforeach; ?>
  </tbody>
  </table>
  </div>
</div>


<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p><span id="family-increment-display"></span></p>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
  $(".clickable-row").click(function() {
    var family_increment = $(this).data('value');
    $("#family-increment-display").text(family_increment);
    $('#myModal').modal('show');
    $('form').submit();
  });
});
</script>


       
      
</body>
</html>
