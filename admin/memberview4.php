<?php  
    require '../include/user_session.php'; // $user_id
    include '../include/accessrightfunc.php'; //dashboard access
    checkAccessRights($user_id, 'ar_record');
    include 'nav-bar.php';
    include '../functions/scripts.php';

    if (isset($_POST['id'])) {
        $_SESSION['selected_id'] = $_POST['id'];
        $head_id = $_POST['id'];
    } 
    elseif (isset($_SESSION['head_id'])) {
        $head_id = $_SESSION['head_id'];
    }
    else {
        echo "No ID provided.";
        exit;
    }

require '../include/datamemberview_inc.php'; // data for memberview
?>

<script src="../functions/jQuerySQL.js"></script>

<title> CUDHO | MemberView </title>


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
                            <li class="breadcrumb-item">Records</li>
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

            <div class="col-md-4">

                <div class="card card-widget widget-user">
                    <div class="cheader-color">
                        <div class="row">
                            <div class="col">
                                <h3 class="cheader-text">Validation</h3>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer" style ="padding-top: 10px;">
                        <div class="row">
                            <div class="col">
                                <h8 >Dubidubidapdap is dancing:</h8>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="card card-widget widget-user">
                    <div class="cheader-color">
                        <div class="row">
                            <div class="col">
                                <h3 class="cheader-text">HouseHold Head Info</h3>
                            </div>

                            <div class="col text-right">
                            <button type="submit" class="btn btn-primary btn-sm custom-btn"  data-toggle="modal" data-target="#familyModal">Edit</button>
                            </div> 

                        </div>
                    </div>
                    <div class="card-footer" style ="padding-top: 10px;">
                        <div class="row">
                            <div class="col">
                                <h8 >Household Head:</h8>
                                <?php echo "<h8>" . $head_firstname . " " . $head_middlename . " " . $head_lastname ."</h8>"; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h8>Barangay:</h8>
                                <?php echo "<h8>" . $head_barangay ."</h8>"; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h8>Community:</h8>
                                <?php echo "<h8>" . $head_community ."</h8>"; ?>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col">
                                <h8>Tag No:</h8>
                                <?php echo "<h8>" . $head_tag ."</h8>"; ?>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col">
                                <h8>Birthdate:</h8>
                                <?php echo "<h8>" . $head_birthdate ."</h8>"; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h8>Age:</h8>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h8>Gender:</h8>
                                <?php echo "<h8>" . $head_gender ."</h8>"; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h8>Civil Status:</h8>
                                <?php echo "<h8>" . $head_civilStatus ."</h8>"; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h8>Occupation:</h8>
                                <?php echo "<h8>" . $head_occupation ."</h8>"; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h8>Monthly Income:</h8>
                                <?php echo "<h8>" . $head_monthIncome ."</h8>"; ?>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col">
                                <h8>Membership:</h8>
                                <?php echo "<h8>" . $head_membership ."</h8>"; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h8>Tenurial Status:</h8>
                                <?php echo "<h8>" . $head_tenurStatus ."</h8>"; ?>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col">
                                <h8>Structure:</h8>
                                <?php echo "<h8>" . $head_structure ."</h8>"; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h8>Children Working & Living w/ Parents:</h8>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col">
                                <h8>Minor Children:</h8>
                            </div>
                        </div>

                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col">
                                <h8>Total Monthly Income:</h8>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h8>Year of Stay:</h8>
                                <?php echo "<h8>" . $head_yearStay ."</h8>"; ?>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col">
                                <h8>Length of Stay:</h8>
                                <?php echo "<h8>" . $head_lengthStay ."</h8>"; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h8>Relocation Unavailable:</h8>
                                <?php echo "<h8>" . $head_relocUnavailable ."</h8>"; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h8>Relocated:</h8>
                                <?php echo "<h8>" . $head_relocated ."</h8>"; ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-md-4">
            <div class="card card-widget widget-user faminfo" >
                
                <div class="cheader-color">
                    <div class="row">
                        <div class="col">
                            <h3 class="cheader-text">Family Info</h3>
                        </div>

                    </div>
                </div>
                <div class="card-footer" style ="padding-top: 10px;">
                    <div class="card card-widget widget-user">
                    <div class="cheader-color">
                        <div class="row">
                            <div class="col">
                                <h3 class="cheader-text">Spouse Info</h3>
                            </div>

                            <div class="col text-right">
                            <button class="btn btn-primary btn-sm custom-btn"  id="editSpouseBtn">Edit</button>
                            </div> 

                        </div>
                    </div>
                    <div class="card-footer" style ="padding-top: 10px;">
                    <div class="row">
                        <div class="col">
                            <h8 >Spouse:</h8>
                            <?php echo "<h8>" . $spouse_firstname . " " . $spouse_middlename . " " . $spouse_lastname ."</h8>"; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h8>Birthdate:</h8>
                            <?php echo "<h8>" . $spouse_birthdate ."</h8>"; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h8>Age:</h8>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h8>Gender:</h8>
                            <?php echo "<h8>" . $spouse_gender ."</h8>"; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h8 >Civil Status:</h8>
                            <?php echo "<h8>" . $spouse_civilStatus ."</h8>"; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h8 >Occupation:</h8>
                            <?php echo "<h8>" . $spouse_occupation ."</h8>"; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h8 >Monthly Income:</h8>
                            <?php echo "<h8>" . $spouse_monthIncome ."</h8>"; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h8>Membership:</h8>
                            <?php echo "<h8>" . $spouse_membership ."</h8>"; ?>
                        </div>
                    </div>
                    </div>
                </div>
       
                <div class="card card-widget widget-user">
                    <div class="cheader-color">
                        <div class="row">
                            <div class="col">
                                <h3 class="cheader-text">Children Working</h3>
                            </div>
                            <div class="col text-right">
                            <button type="submit" class="btn btn-primary btn-sm custom-btn" >Add</button>
                            </div> 
                        </div>
                    </div>
                    <div class="card-footer" style ="padding-top: 10px;">
                        <div class="card-body table-responsive" style="padding: 1px"> 
                            <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" >
                            <thead style="background-color: #ffcc00;">
                            <tr>
                            <th>Full Name</th>
                            <th>Monthly Income</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card card-widget widget-user">
                    <div class="cheader-color">
                        <div class="row">
                            <div class="col">
                                <h3 class="cheader-text">Minor Children</h3>
                            </div>
                            <div class="col text-right">
                            <button type="submit" class="btn btn-primary btn-sm custom-btn" >Add</button>
                            </div> 
                        </div>
                    </div>
                    <div class="card-footer" style ="padding-top: 10px;">
                        <div class="card-body table-responsive" style="padding: 1px"> 
                            <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" >
                            <thead style="background-color: #ffcc00;">
                            <tr>
                            <th>Full Name</th>
                            <th>Age</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card card-widget widget-user">
                    <div class="cheader-color">
                        <div class="row">
                            <div class="col">
                                <h3 class="cheader-text">Senior Citizen / PWD</h3>
                            </div>
                            <div class="col text-right">
                            <button type="submit" class="btn btn-primary btn-sm custom-btn" >Add</button>
                            </div> 
                        </div>
                    </div>
                    <div class="card-footer" style ="padding-top: 10px;">
                        <div class="card-body table-responsive" style="padding: 1px"> 
                            <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" >
                            <thead style="background-color: #ffcc00;">
                            
                            <th style="width: 70%">Full Name</th>
                            <th style="width: 30%">Status</th>
                            
                            </thead>
                            <tbody>
                            <tr>
                            <td>JOnaths Evangs</td>
                            <td>404</td>
                            </tbody>
                            </table>
                            </div>

                        </div>
                    </div>
                </div>

                </div>
            </div>
                       
            </div>

            <div class="col-md-4">
                <div class="card card-widget widget-user" style="height: 250px;">

                    <div class="cheader-color">
                        <div class="row">
                            <div class="col">
                                <h3 class="cheader-text">Picture </h3>
                            </div>

                            <div class="col text-right">
                            <button type="submit" class="btn btn-primary btn-sm custom-btn"  data-toggle="modal" data-target="#familyModal">Upload</button>
                            </div> 

                        </div>
                    </div>
                    <div class="card-footer" style ="padding-top: 10px;">
                        <div class="card-body table-responsive" style="padding: 1px">
                            <div class="card">

                            </div>

                        </div>
                    </div>
                </div>

                <div class="card card-widget widget-user">
                    <div class="cheader-color">
                        <div class="row">
                            <div class="col">
                                <h3 class="cheader-text">Facilties</h3>
                            </div>

                            <div class="col text-right">
                            <button type="submit" class="btn btn-primary btn-sm custom-btn"  data-toggle="modal" data-target="#familyModal">Edit</button>
                            </div> 

                        </div>
                    </div>
                    <div class="card-footer" style ="padding-top: 10px;">
                    <div class="row">
                        <div class="col">
                            <h8 >Electricity:</h8>
                            <?php echo "<h8>" . $electricity ."</h8>"; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Water:</h8>
                            <?php echo "<h8>" . $water ."</h8>"; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Toilet:</h8>
                            <?php echo "<h8>" . $toilet ."</h8>"; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Kitchen:</h8>
                            <?php echo "<h8>" . $kitchen ."</h8>"; ?>
                        </div>
                    </div>

        
                </div>
       
        </div>

                <div class="card card-widget widget-user">
                    <div class="cheader-color">
                        <div class="row">
                            <div class="col">
                                <h3 class="cheader-text">Interview Information</h3>
                            </div>

                            <div class="col text-right">
                            <button type="submit" class="btn btn-primary btn-sm custom-btn"  data-toggle="modal" data-target="#familyModal">Edit</button>
                            </div> 

                        </div>
                    </div>
                    <div class="card-footer" style ="padding-top: 10px;">
                    <div class="row">
                        <div class="col">
                            <h8 >Respondent:</h8>
                            <?php echo "<h8>" . $respondent_firstname . " " . $respondent_middlename . " " . $respondent_lastname ."</h8>"; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Relationship w/ HouseHold Head:</h8>
                            <?php echo "<h8>" . $respondent_relationship ."</h8>"; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Interviewer:</h8>
                            <?php echo "<h8>" . $interviewer_firstname . " " . $interviewer_middlename . " " . $interviewer_lastname ."</h8>"; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Date:</h8>
                            <?php echo "<h8>" . $interviewer_date ."</h8>"; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Remarks:</h8>
                            <?php echo "<h8>" . $interviewer_remarks ."</h8>"; ?>
                        </div>
                    </div>

        
                </div>
       
        </div>

         
        </div>
        </div>

    </div>
    </div>    
    </section>

</div>      


<div class="modal" id="spouseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Member</h5>
            </div>

            <form action="../inc_backend/spouseEdit_inc.php" method="POST">
                <input style="display: none;" type="text" name="head_id" value = <?php echo $head_id?>>
                <input style="display: none;" type="text" name="spouse_id" value = <?php echo $spouse_id?>>
            <div class="modal-body">   
                <div class="card" style="border: 2px solid maroon;">
                <div class="card-body">
                <div class = "row">

                <div class="col-md-12">
                <label>Spouse (Asawa):</label>
                </div>

                <div class="col-md-4 mb-3">
                <label for="spouse_gender">Gender:</label>
                <div class="input-group">
                    <input type="text" class="input-border form-control" name="spouse_gender" id="spouse_gender"
                    placeholder="Bakla">
                </div>
                </div>
                <div class="col-md-4 mb-3">
                <label for="spouse_birthDate">Birthdate:</label>
                <div class="input-group">
                    <input type="text" class="input-border form-control" name="spouse_birthDate" id="spouse_birthDate"
                     placeholder="Birthdate" >
                </div>
                </div>
                <div class="col-md-4 mb-3">
                <label for="spouse_civilStatus">Civil Status:</label>
                <div class="input-group">
                    <input type="text" class="input-border form-control" name="spouse_civilStatus" id="spouse_civilStatus"
                    placeholder="Civil Status" >
                </div>
                </div>

                <div class="col-md-3 mb-3">
                <label for="spouse_lastName">LastName:</label>
                <div class="input-group">
                    <input type="text" class="input-border form-control" name="spouse_lastName" id="spouse_lastName"
                    placeholder="Last Name" required>
                </div>
                </div>
                <div class="col-md-3 mb-3">
                <label for="spouse_givenName">Given Name:</label>
                <div class="input-group">
                    <input type="text" class="input-border form-control" name="spouse_givenName" id="spouse_givenName"
                     placeholder="Given Name" required>
                </div>
                </div>
                <div class="col-md-3 mb-3">
                <label for="spouse_middleName">Middle Name:</label>
                <div class="input-group">
                    <input type="text" class="input-border form-control" name="spouse_middleName" id="spouse_middleName"
                    placeholder="Middle Name">
                </div>
                </div>
                <div class="col-md-3 mb-3">
                <label for="spouse_maidenName">Maiden Name:</label>
                <div class="input-group">
                    <input type="text" class="input-border form-control" name="spouse_maidenName" id="spouse_maidenName"
                    placeholder="Maiden Name">
                </div>
                </div>

                <div class="col-md-6 mb-3">
                <label for="spouse_occupation">Occupation:</label>
                <div class="input-group">
                    <input type="text" class="input-border form-control" name="spouse_occupation" id="spouse_occupation"
                    placeholder="Occupation" required>
                </div>
                </div>
                <div class="col-md-6 mb-3">
                <label for="spouse_monthSalary">Monthly Salary:</label>
                <div class="input-group">
                    <input type="text" class="input-border form-control" name="spouse_monthSalary" id="spouse_monthSalary"
                    placeholder="Monthly Salary">
                </div>
                </div>
                
                <div class="col-md-11" style="margin-left:20px;">
                    <label>Membership in (Kasapi ng):</label>
                </div>
                
                <div class="col-md-1 mb-3">
                </div>

                <div class="col-md-2 mb-3">
                    <input type="checkbox" value="checked" name="spouse_pag-ibigBox" id="spouse_pag-ibigBox">
                    <label for="spouse_pag-ibigBox" style="margin-top:6px;">Pag-IBIG/HDMF</label>
                </div>

                <div class="col-md-2 mb-3">
                    <input type="checkbox" value="checked" name="spouse_sssBox" id="spouse_sssBox">
                    <label for="spouse_sssBox" style="margin-top:6px;">SSS/GSIS</label>
                </div>
            
                <div class="col-md-2 mb-3">
                    <input type="checkbox" value="checked" name="spouse_othersBox" id="spouse_othersBox">
                    <label for="spouse_othersBox" style="margin-top:6px;">Others</label>
                </div>

                </div>
                </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button"  id="cancelSpouseBtn" class="btn btn-warning mr-auto btn-sm" style="margin-left:10px;">Close</button>
                <button type="submit" name="submit" id="saveSpouseBtn" class="btn btn-primary btn-sm" style="margin-right:10px;">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    var spouseModal = document.getElementById("spouseModal");
    var cancelSpouseBtn = document.getElementById("cancelSpouseBtn");
    var editSpouseBtn = document.getElementById("editSpouseBtn");

    var spouse_lastName = document.getElementById("spouse_lastName");
    var spouse_givenName = document.getElementById("spouse_givenName");
    var spouse_middleName = document.getElementById("spouse_middleName");
    var spouse_occupation = document.getElementById("spouse_occupation");
    var spouse_civilStatus = document.getElementById("spouse_civilStatus");
    var spouse_monthSalary = document.getElementById("spouse_monthSalary");
    

    editSpouseBtn.addEventListener("click", function() {
      spouse_lastName.value = "<?php echo $spouse_lastname; ?>";
      spouse_givenName.value = "<?php echo $spouse_firstname; ?>";
      spouse_middleName.value = "<?php echo $spouse_middlename; ?>";
      spouse_occupation.value = "<?php echo $spouse_occupation; ?>";
      spouse_civilStatus.value = "<?php echo $spouse_civilStatus; ?>";
      spouse_monthSalary.value = "<?php echo $spouse_monthIncome; ?>";         
      spouseModal.style.display = "block";
    });

    cancelSpouseBtn.addEventListener("click", function() {
      spouseModal.style.display = "none";
    });
    

  </script>



<?php include ('footer.php'); ?>