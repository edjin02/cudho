<?php  
    require '../include/user_session.php'; // $user_id
    include '../include/accessrightfunc.php'; //dashboard access
    checkAccessRights($user_id, 'ar_record');
    include 'nav-bar.php';
    include '../functions/scripts.php';

// if (isset($_POST['id'])) {
//     $_SESSION['selected_id'] = $_POST['id'];
//     $memberId = $_POST['id'];
// } else {
//     echo "No ID provided.";
//     exit;
// }
$memberId = 1;

//member data
$query = "SELECT * FROM tbl_verif WHERE id = $memberId";
$result = $con->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $middlename = $row["middlename"];
    $extension = $row["extension"];
} 


$query = "SELECT * FROM tbl_verif WHERE id = $memberId";
$result = $con->query($query);


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
                            <?php echo "<h8>" . $firstname . " " . $middlename . " " . $lastname . " " . $extension ."</h8>"; ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Barangay:</h8>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Community:</h8>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8 >Birthdate:</h8>
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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8 >Civil Status:</h8>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Occupation:</h8>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Monthly Income:</h8>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8 >Membership:</h8>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8 >Children Working:</h8>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Living with Parents:</h8>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Relocated:</h8>
                        </div>
                    </div>
                </div>
                </div>

            </div>


            <div class="col-md-4">

                <div class="card card-widget widget-user">
                    <div class="cheader-color">
                        <div class="row">
                            <div class="col">
                                <h3 class="cheader-text">Spouse Info</h3>
                            </div>

                            <div class="col text-right">
                            <button type="submit" class="btn btn-primary btn-sm custom-btn"  data-toggle="modal" data-target="#familyModal">Edit</button>
                            </div> 

                        </div>
                    </div>
                    <div class="card-footer" style ="padding-top: 10px;">
                    <div class="row">
                        <div class="col">
                            <h8 >Spouse:</h8>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Birthdate:</h8>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Age:</h8>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8 >Monthly Income:</h8>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h8>Membership:</h8>
                        </div>
                    </div>
                    </div>
                </div>
       
                <div class="card card-widget widget-user">
                    <div class="cheader-color">
                        <div class="row">
                            <div class="col">
                                <h3 class="cheader-text">Children Info</h3>
                            </div>

                            <div class="col text-right">
                            <button type="submit" class="btn btn-primary btn-sm custom-btn" >Add</button>
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
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            </tr>
                            </thead>
                            <tbody>

                            

                            </tbody>
                            
                            </table>
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
                                <h3 class="cheader-text">Response Info</h3>
                            </div>

                            <div class="col text-right">
                            <button type="button" class="btn btn-primary btn-sm custom-btn" id= "responseAddBtn">Add</button>
                            <button type="button" class="btn btn-primary btn-sm custom-btn" id= "responseEditBtn">Edit</button>
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

    </div>
    </div>    
    </section>

</div>      

<div class="modal" id="responseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addmember">Add Member</h5>
            </div>

            <form action="../include/editmember_inc.php" method="post">
            <div class="modal-body">
                <div class="card" style="border: 2px solid maroon;">
                    <div class="card-body">
                    <div class="row" style="margin-top:-10px">
                            <label style = "margin-right:83px">Year of Stay:</label>
                            <label style = "margin-right:65px">Length of Stay:</label>
                            <label style = "margin-right:96px">Electricity:</label>
                            <label style = "margin-right:60px">Water Services:</label>
                            <label style = "margin-right:135px">Toilet:</label>
                            <label >Kitchen:</label>
                        </div>                    
                        <div class="row">
                            <input type="text" id="year_stay" size = "16" style = "margin-right:10px; height:30px;" placeholder="Year of Stay">
                            <input type="text" name="length_stay" size = "16" style = "margin-right:10px;height:30px;" placeholder="Length of Stay">        
                            <div class="form-group" style="margin-right:10px; width:170px;">
                            <select name="electricity" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                <option value="" selected="" data-select2-id="0"></option>
                                <option value="Own" data-select2-id="1">Own</option>
                                <option value="Submeter" data-select2-id="2">Submeter</option>
                                <option value="None" data-select2-id="3">None</option>
                            </select>
                            </div>
                            <div class="form-group" style="margin-right:10px; width:170px">
                            <select name="waterservices" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                <option value="" selected="" data-select2-id="0"></option>
                                <option value="Laguna Waters" data-select2-id="1">Laguna Waters</option>
                                <option value="Deepwell" data-select2-id="2">Deepwell</option>
                                <option value="Other" data-select2-id="3">Other</option>
                            </select>
                            </div>  
                            <div class="form-group" style="margin-right:10px; width:170px">
                            <select name="toilet" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                <option value="" selected="" data-select2-id="0"></option>
                                <option value="Own" data-select2-id="1">Own</option>
                                <option value="Shared" data-select2-id="2">Shared</option>
                            </select>
                            </div>  
                            <div class="form-group" style="width:170px">
                            <select name="kitchen" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                <option value="" selected="" data-select2-id="0"></option>
                                <option value="Own" data-select2-id="1">Own</option>
                                <option value="Shared" data-select2-id="2">Shared</option>
                            </select>
                            </div>      
                        </div>   
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button"  id="cancelButton" class="btn btn-warning mr-auto btn-sm" tyle="margin-left:10px;">Close</button>
                <button type="submit" value="Submit" class="btn btn-primary btn-sm" style="margin-right:10px;">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    var modal = document.getElementById("responseModal");
    var year_stay = document.getElementById("year_stay");
    // var saveButton = document.getElementById("saveButton");
    var cancelButton = document.getElementById("cancelButton");
    var addButton = document.getElementById("responseAddBtn");
    var editButton = document.getElementById("responseEditBtn");

    addButton.addEventListener("click", function() {
      year_stay.value = "";
      modal.style.display = "block";
    });

    editButton.addEventListener("click", function() {
      year_stay.value = "sample@example.com";
      modal.style.display = "block";
    });

    // saveButton.addEventListener("click", function() {
    //   var email = emailInput.value;
    //   closeModal();
    // });

    cancelButton.addEventListener("click", function() {
      closeModal();
    });

    function closeModal() {
      modal.style.display = "none";
    }
  </script>


<?php include ('footer.php'); ?>