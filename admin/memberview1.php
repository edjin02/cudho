<?php
require '../include/user_session.php';

include 'nav-bar.php'; 

// Retrieve the selected ID from $_POST
if (isset($_POST['id'])) {
    $_SESSION['selected_id'] = $_POST['id'];
    // echo "Selected ID: " . $_POST['id'];
    $memberId = $_POST['id'];
} else {
    echo "No ID provided.";
    exit;
}

include '../functions/scripts.php';
include '../functions/Functions.php';
include 'option.php';
// Rest of your code...

require '../include/connect.php'; //$con
require '../include/getday_inc.php'; //$php_timestamp


$query = "SELECT * FROM tbl_verif WHERE id = $memberId";
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
    $extension = $row["extension"];
    $occupation = $row["occupation"];
    $birthdate_select = $row['birthday']; 
    $marketlist_select = $row['marketlist'];
    $age = date_diff(date_create($birthdate_select), date_create($php_timestamp));
    $age = $age->format('%y'); 
} 


$query = "SELECT * FROM tbl_faminfo WHERE for_id = $memberId AND relationship = 'spouse'";
$result = $con->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $spouse_fname = $row["firstname"];
    $spouse_mname = $row["middlename"];
    $spouse_lname = $row["lastname"];
    $spouse_mon_inc = $row["monthly_income"];
    $spouse_mem_ship = $row["membership"];
    $spouse_birthdate = $row["birthday"];
    $spouse_age = date_diff(date_create($spouse_birthdate), date_create($php_timestamp));
    $spouse_age = $spouse_age->format('%y'); 
    }
else {
    $spouse_fname = "None";
    $spouse_mname = "";
    $spouse_lname = "";
    $spouse_mon_inc = "None";
    $spouse_mem_ship = "None";
    $spouse_age = "None";
}


?>

<script src="../functions/jQuerySQL.js"></script>

    <title> CUDHO | Dashboard </title>


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
                            <li class="breadcrumb-item"><a href="verify.php">Verification</a></li>
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
                <div class="cheader-color">
                        <h3 class="cheader-text">
                            Member Information 
                        </h3>
                    </div>

                <div class="cfooter1" style ="padding-top: 10px;">
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

                    <div class="cheader-color">
                        <h3 class="cheader-text">Other Info</h3>
                    </div>
                    
                    <div class="cfooter1" style ="padding-top: 10px; padding-left: 2px;">
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
                            <?php echo "<h8>" . $spouse_age . "</h8>"; ?>
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
                    <div class="cheader-color">
                        <div class="row">
                            <div class="col">
                                <h3 class="cheader-text">Family Info</h3>
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
                            <table class="table table-hover text-bordered table-condensed table-striped" id="getFamData" >
                            <tbody id="famTable">
                                <?php 
                                require '../functions/get_family_info.php';
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
                    <div class="cheader-color">
                        <div class="row">
                            <div class="col">
                                <h3 class="cheader-text">Response Info</h3>
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
                            <tbody id="responseTable">
                            <?php 
                                include '../functions/get_response_info.php';
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
        
    </section>
    


