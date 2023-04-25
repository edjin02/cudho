<?php include ('nav-bar.php');  ?>
<?php $id = $_GET['id'];?>


<?php // for member view data
require '../include/connect.php'; //$con
$query = "SELECT * FROM table_verification WHERE id = $id";
$result = $con->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $tag = $row["tag"];
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $middlename = $row["middlename"];
    $barangay_select = $row["barangay"];
    $samahan = $row["samahan"];
    $monthly_income = $row["monthly_income"];
    $gender_select = $row["gender"];
    $civil_status = $row["civil_status"];
    $age = $row["age"];
    $extension = $row["extension"];
    $occupation = $row["occupation"];
    $birthdate_select = $row['birthday']; 
    $marketlist_select = $row['marketlist']; 
} 
$con->close();
?>

<?php // for spouse info
require '../include/connect.php'; //$con
$query = "SELECT * FROM family_info WHERE for_id = $id AND relationship = 'spouse'";
$result = $con->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $spouse_fname = $row["firstname"];
    $spouse_mname = $row["middlename"];
    $spouse_lname = $row["lastname"];
    // $spouse_age = $row["age"];
    $spouse_mon_inc = $row["monthly_income"];
    $spouse_mem_ship = $row["membership"];

    }
else {
    $spouse_fname = "None";
    $spouse_mname = "";
    $spouse_lname = "";
    // $spouse_age = "None";
    $spouse_mon_inc = "None";
    $spouse_mem_ship = "None";
}
$con->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CUDHO | Dashboard </title>
    
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    
    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    
    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/dist/css/adminlte.css">

    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.css">

</head>
<body>

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


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 820px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h3 class="m-1 text-dark">Member View <a style="font-size:13px">View, Add, Edit and/or Print Member's Registration</a></h3>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Records</a></li>
                            <li class="breadcrumb-item"><a href="#">Verification</a></li>
                            <li class="breadcrumb-item">Member View</li>
                           
                        </ol>   
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /.content-header -->

    <!-- box container -->
    <section class="content">
        <div class="col-md-20">
            <div class="card card-widget widget-user">
                <div class="chead-color">
                        <h3 class="chead-text">
                            Member Information 
                        </h3>
                    </div>

                <div class="cfooter" style ="padding-top: 10px;">
                    <div class="row">
                    <div class="col">
                        <h8 >Household Head:</h8>
                        <?php echo "<h8>" . $firstname . " " . $middlename . " " . $lastname . " " . $extension ."</h8>"; ?>
                    </div>

                        <div class="col text-right" style="margin-right: 33px;">
                            <button type="submit" class="btn btn-primary btn-sm custom-btn"  
                            value="Add">Print</button>
                        </div> 
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Barangay:</h8>
                            <?php echo "<h8>" . $barangay_select . "</h8>"; ?>
                        </div>
                    </div>

                    <div class="row" style ="padding-top: 5px;">
                        <div class="col">
                            <h8>Community:</h8>
                            <?php echo "<h8>" . $samahan . "</h8>"; ?>
                        </div>

                        <div class="col text-right" style="margin-right: 5px;">
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-sm custom-btn"  data-toggle="modal" data-target="#myModal" value="Edit">Edit</button>
                                <button type="submit" class="btn btn-primary btn-sm custom-btn" value="Back">Back</button>
                            </div>
                        </div>
                        
                    </div>

                </div>

            </div>
        </div>

        <!-- next t -->
        <div class="row">

            <div class="col-md-4">
                <div class="card card-widget widget-user">

                    <div class="chead-color">
                        <h3 class="chead-text">Other Info</h3>
                    </div>
                    
                    <div class="cfooter" style ="padding-top: 10px; padding-left: 2px;">
                        <div class="col">
                            <h8>Age:</h8>
                            <?php echo "<h8>" . $age . "</h8>"; ?>
                        </div>
                        <div class="col">
                            <h8>Gender:</h8>
                            <?php echo "<h8>" . $gender_select . "</h8>"; ?>
                        </div>
                        <div class="col">
                            <h8>Civil Status:</h8>
                            <?php echo "<h8>" . $civil_status . "</h8>"; ?>
                        </div>
                        <div class="col">
                            <h8>Monthly Income:</h8>
                            <?php echo "<h8>" . $monthly_income . "</h8>"; ?>
                        </div>
                        <br>
                        <div class="col">
                            <h8>Spouse:</h8>
                            <?php echo "<h8>" . $spouse_fname . " " . $spouse_mname . " " . $spouse_lname .  "</h8>"; ?>
                        </div>
                        <div class="col">
                            <h8>Age:</h8>
                            <h8></h8>
                        </div>
                        <div class="col">
                            <h8>Monthly Income:</h8>
                            <?php echo "<h8>" . $spouse_mon_inc . "</h8>"; ?>
                        </div>
                        <div class="col">
                            <h8>Membership:</h8>
                            <?php echo "<h8>" . $spouse_mem_ship . "</h8>"; ?>
                        </div>
                        <br>
                        <div class="col">
                            <h8>Tenurial Status:</h8>
                            <h8>Ewan</h8>
                        </div>
                        <div class="col">
                            <h8>Children Working and Living with Parents:</h8>
                            <h8>0</h8>
                        </div>
                        
                    </div>

                </div>
            </div>
        
            <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="chead-color">
                        <div class="row">
                            <div class="col">
                                <h3 class="chead-text">Family Info</h3>
                            </div>

                            <div class="col text-right">
                            <button type="submit" class="btn btn-primary btn-sm custom-btn"  data-toggle="modal" data-target="#familyModal">Add</button>
                            </div> 

                        </div>
                    </div>
                    <div class="card-footer" style ="padding-top: 10px;">
                        <div class="card-body table-responsive" style="padding: 1px">
                            <div class="card">
                            <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" >
                            <thead style="background-color: #ffcc00;">
                            <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Middlename</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php
                                    require '../include/connect.php'; //$con
                                    $query = "SELECT * FROM family_info WHERE for_id = $id";
                                    $result = $con->query($query);
                                    while ($row = $result->fetch_assoc()) {
                                        echo " <tr>
                                                <td>" . $row["firstname"] . "</td>
                                                <td>" . $row["lastname"] . "</td>
                                                <td>" . $row["middlename"] . "</td>
                                                </tr>";
                                    }
                                    $con->close();
                                    ?>

                            </tbody>
                            
                            </table>
                            </div>

                            </div>

                            </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="chead-color">
                        <div class="row">
                            <div class="col">
                                <h3 class="chead-text">Response Info</h3>
                            </div>

                            <div class="col text-right">
                            <button type="submit" class="btn btn-primary btn-sm custom-btn"  data-toggle="modal" data-target="#responseModal">Add</button>
                            </div> 

                        </div>
                    </div>
                    <div class="card-footer" style ="padding-top: 10px;">
                        <div class="card-body table-responsive" style="padding: 1px">
                            <div class="card">
                            <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" >
                            <thead style="background-color: #ffcc00;">
                            <tr>
                            <th>Respondent</th>
                            <th>Interviewer</th>
                            <th>Remarks</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php
                                    require '../include/connect.php'; //$con
                                    $query = "SELECT * FROM response_info WHERE for_id = $id";
                                    $result = $con->query($query);
                                    while ($row = $result->fetch_assoc()) {
                                    echo " <tr>
                                            <td>" . $row["respondent"] . "</td>
                                            <td>" . $row["interviewer"] . "</td>
                                            <td>" . $row["remarks"] . "</td>
                                            </tr>";
                                    }
                                    $con->close();
                                ?>

                            </tbody>
                            
                            </table>
                            </div>

                            </div>

                            </div>
                            </div>
                          </div>
                    </div>

                </div>
            </div>

            
            

            <table>
                <tr>
                    <td>ID:</td>
                    <td><?php echo $id; ?></td>
                </tr>
              
                </table>
            

        
    </section>
    
    </div>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addmember">Add Member</h5>
            </div>

            <form action="../include/editmember_inc.php" method="post">
            <div class="modal-body">
                <div class="card" style="border: 2px solid maroon;">
                    <div class="card-body">

                        <div class="row" style="margin-top:-10px">
                            <label style = "margin-right:35px">Tag:</label>
                            <label style = "margin-right:360px">Community:</label>
                            <label>Barangay:</label>
                        </div>
                        
                        <div class="row">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input type="text" name="tag" size = "2" style = "margin-right:10px; height:30px;" placeholder="Tag" value="<?php echo $tag ?>">
                            <input type="text" name="samahan" size = "50" style = "margin-right:10px;height:30px;" placeholder="Community/Samahan" value="<?php echo $samahan ?>">
                            
                            <div class="form-group" style="width:225px;">
                                <select name = "barangay_select"  class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                    <option value="<?php echo $barangay_select ?>" selected="" data-select2-id="0"><?php echo $barangay_select ?></option>
                                    <option value="Aplaya" data-select2-id="1">Aplaya</option>
                                    <option value="Balibago" data-select2-id="2">Balibago</option>
                                    <option value="Caingin" data-select2-id="3">Caingin</option>
                                    <option value="Dila" data-select2-id="4">Dila</option>
                                    <option value="Dita" data-select2-id="5">Dita</option>
                                    <option value="Don Jose" data-select2-id="6">Don Jose</option>
                                    <option value="Ibaba" data-select2-id="7">Ibaba</option>
                                    <option value="Kanluran" data-select2-id="8">Kanluran </option>
                                    <option value="Labas" data-select2-id="9">Labas</option>
                                    <option value="Macabling" data-select2-id="10">Macabling</option>
                                    <option value="Malitlit" data-select2-id="11">Malitlit</option>
                                    <option value="Malusak" data-select2-id="12">Malusak </option>
                                    <option value="Market Area" data-select2-id="13">Market Area</option>
                                    <option value="Pooc" data-select2-id="14">Pooc </option>
                                    <option value="Pulong Santa Cruz" data-select2-id="15">Pulong Santa Cruz</option>
                                    <option value="Santo Domingo" data-select2-id="16">Santo Domingo</option>
                                    <option value="Sinalhan" data-select2-id="17">Sinalhan</option>
                                    <option value="Tagapo" data-select2-id="18">Tagapo</option>
                                </select>
                            </div>

                        </div>

                        <div class="row" style="margin-top: 10px;">
                            <label style = "margin-right:90px">LastName:</label>
                            <label style = "margin-right:90px">FirstName:</label>
                            <label style = "margin-right:72px">MiddleName:</label>
                            <label style = "margin-right:35px">Extension:</label>
                            <label>Marketlist:</label>
                        </div>

                        <div class="row">
                            <input type="text" name="lastname" value="<?php echo $lastname ?>" size = "15" style = "margin-right:10px; height: 30px;" placeholder="Last Name">
                            <input type="text" name="firstname"  value="<?php echo $firstname ?>" size = "15" style = "margin-right:10px; height: 30px;" placeholder="First Name">
                            <input type="text" name="middlename"  value="<?php echo $middlename ?>" size = "15" style = "margin-right:10px; height: 30px;" placeholder="Middle Name">
                            <input type="text" name="extension"  value="<?php echo $extension ?>" size = "8" style = "margin-right:10px; height: 30px;" placeholder="Sr. Jr. II III">
                            <div class="form-group" style="width:115px;" >
                                <select name="masterlist_select" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                    <option value="<?php echo $marketlist_select ?>" selected="" data-select2-id="0"><?php echo $marketlist_select ?></option>
                                    <option value="Listed" data-select2-id="1">Listed</option>
                                    <option value="Not Listed" data-select2-id="2">Not Listed</option>
                                </select>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 10px;">
                            <label style = "margin-right:38px">Gender:</label>
                            <label style = "margin-right:80px">Birthday:</label>
                            <label style = "margin-right:32px">Civil Status:</label>
                            <label style = "margin-right:137px">Occupation:</label>
                            <label>Monthly Income:</label>
                        </div>

                        <div class="row">
                            <div class="form-group" style="width:90px; margin-right:10px;">
                                <select name="gender_select" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                    <option value="<?php echo $gender_select ?>" selected="" data-select2-id="0"><?php echo $gender_select ?></option>
                                    <option value="Male" data-select2-id="1">Male</option>
                                    <option value="Female" data-select2-id="2">Female</option>
                                </select>
                            </div>
                            <div class="input-group mb-3" style="width:140px; margin-right:10px;">
                                <input type="date" name="birthdate_select" value="<?php echo $birthdate_select ?>" class="form-control" name="startdate" style="height: 31px;">
                            </div>
                            <div class="form-group" style="width:115px; margin-right:10px;">
                                <select name="civil_status" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                    <option value="<?php echo $civil_status ?>" selected="" data-select2-id="0"><?php echo $civil_status ?></option>
                                    <option value="Single" data-select2-id="1">Single</option>
                                    <option value="Married" data-select2-id="2">Married</option>
                                    <option value="Divorced" data-select2-id="3">Divorced</option>
                                </select>
                            </div>
                            <input type="text" name="occupation" value="<?php echo $occupation ?>" size = "22" style = "margin-right:10px; height: 30px;" placeholder="Occupation">
                            <input type="text" name="monthly_income" value="<?php echo $monthly_income ?>" size = "12" style = "height: 30px;" placeholder="Income" >
                        </div>

                        <div class="row" style="margin-top: 10px;">
                            <label>
                                Membership in:
                            </label>
                        </div>

                        <div class="row" style="margin-top:-15px;">
                            <input type="checkbox" id="pagibigCheckbox" name="myCheckbox" value="checked" style="margin-right:5px;">
                            <label for="pagibigCheckbox" style="margin-top:6px; margin-right:30px;">PAGIBIG/HDMF</label>
                            
                            <input type="checkbox" id="sssCheckbox" name="myCheckbox" value="checked" style="margin-right:5px;">
                            <label for="sssCheckbox" style="margin-top:6px; margin-right:30px;">SSS/GSIS</label>

                            <input type="checkbox" id="othersCheckbox" name="myCheckbox" value="checked" style="margin-right:5px;">
                            <label for="othersCheckbox" style="margin-top:6px; margin-right:30px;">OTHERS</label>
                        </div>


                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning mr-auto btn-sm" data-dismiss="modal" style="margin-left:10px;">Close</button>
                <button type="submit" value="Submit" class="btn btn-primary btn-sm" style="margin-right:10px;">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="familyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addmember">Add Family Member</h5>
            </div>

            <form action="../include/addfamily_inc.php" method="post">

                <div class="modal-body">
                    <div class="card" style="border: 2px solid maroon;">
                        <div class="card-body">
                            <div class="row" style="margin-top:-10px">
                                <label style = "margin-right:100px">LastName:</label>
                                <label style = "margin-right:97px">FirstName:</label>
                                <label style = "margin-right:79px">MiddleName:</label>
                                <label style = "margin-right:35px">Extension:</label>
                                <label >Gender:</label>
                            </div>
                            
                            <div class="row">
                                <input type="hidden" name="for_id" value="<?php echo $id ?>">
                                <input type="text" name="lastname" size = "16" style = "margin-right:10px; height:30px;" placeholder="Last Name">
                                <input type="text" name="firstname" size = "16" style = "margin-right:10px;height:30px;" placeholder="First Name">
                                <input type="text" name="middlename" size = "16" style = "margin-right:10px; height:30px;" placeholder="Middle Name">
                                <input type="text" name="extension" size = "8" style = "margin-right:10px;height:30px;" placeholder="Sr. Jr. II III">
                                <div class="form-group" style="width:90px">
                                <select name="gender" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                    <option value="" selected="" data-select2-id="0"></option>
                                    <option value="Male" data-select2-id="1">Male</option>
                                    <option value="Female" data-select2-id="2">Female</option>
                                </select>
                                </div>    
                            </div>
                            
             
                            <div class="row" style="margin-top: 10px;">
                            <label style = "margin-right:75px">Birthday:</label>
                            <label style = "margin-right:30px">Civil Status:</label>
                            <label style = "margin-right:83px">Occupation:</label>
                            <label style = "margin-right:20px">Monthly Income:</label>
                            <label>Member Type:</label>
                        </div>

                        <div class="row">
                            <div class="input-group mb-3" style="width:135px; margin-right:10px;">
                                <input type="date" name="birthdate_select" class="form-control" name="startdate" style="height: 31px;">
                            </div>
                            <div class="form-group" style="width:115px; margin-right:10px;">
                                <select name="civil_status" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                    <option selected="" data-select2-id="0"></option>
                                    <option value="Single" data-select2-id="1">Single</option>
                                    <option value="Married" data-select2-id="2">Married</option>
                                    <option value="Divorced" data-select2-id="3">Divorced</option>
                                </select>
                            </div>
                            <input type="text" name="occupation" size = "15" style = "margin-right:10px; height: 30px;" placeholder="Occupation">
                            <input type="text" name="monthly_income" size = "12" style = "margin-right:10px; height: 30px;" placeholder="Income" >
                            <div class="form-group" style="width:153px">
                                <select name="relationship" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                    <option value="" selected="" data-select2-id="0"></option>
                                    <option value="Child" data-select2-id="1">Child</option>
                                    <option value="Spouse" data-select2-id="2">Spouse</option>
                                    <option value="Parent" data-select2-id="3">Parent</option>
                                    <option value="Sibling" data-select2-id="4">Sibling</option>
                                    <option value="Grandparent" data-select2-id="5">Grandparent</option>
                                    <option value="Grandchildren" data-select2-id="2">Grandchildren</option>
                                </select>
                            </div> 
                        </div>

                        <div class="row" style="margin-top: 10px;">
                                <label>
                                    Membership in:
                                </label>
                        </div>

                        <div class="row" style="margin-top:-15px;">
                            <input type="checkbox" id="pagibigCheckbox" name="myCheckbox" value="checked" style="margin-right:5px;">
                            <label for="pagibigCheckbox" style="margin-top:6px; margin-right:30px;">PAGIBIG/HDMF</label>
                            
                            <input type="checkbox" id="sssCheckbox" name="myCheckbox" value="checked" style="margin-right:5px;">
                            <label for="sssCheckbox" style="margin-top:6px; margin-right:30px;">SSS/GSIS</label>

                            <input type="checkbox" id="othersCheckbox" name="myCheckbox" value="checked" style="margin-right:5px;">
                            <label for="othersCheckbox" style="margin-top:6px; margin-right:30px;">OTHERS</label>
                        </div>

                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning mr-auto btn-sm" data-dismiss="modal" style="margin-left:10px;">Close</button>
                    <button type="submit" value="Submit" class="btn btn-primary btn-sm" style="margin-right:10px;">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="responseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addmember">Add Response</h5>
            </div>

            <form action="../include/editmember_inc.php" method="post">
            <div class="modal-body">
                <div class="card" style="border: 2px solid maroon;">
                    <div class="card-body">
                            
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning mr-auto btn-sm" data-dismiss="modal" style="margin-left:10px;">Close</button>
                <button type="submit" value="Submit" class="btn btn-primary btn-sm" style="margin-right:10px;">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>

<?php include ('footer.php'); ?>