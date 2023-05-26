<?php include ('nav-bar.php');  ?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CUDHO | Dashboard </title>
    
    <?php
        include '..\..\cudho\functions\scripts.php';
        include 'option.php';
        include '..\..\cudho\include\memberview_phps.php';
    ?>
    
</head>
<body>

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
                                include '..\..\cudho\include\get_family_info.php';
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
                            <thead style="background-color: #ffcc00;">
                            <tr>
                            <th>Respondent</th>
                            <th>Interviewer</th>
                            <th>Remarks</th>
                            </tr>
                            </thead>
                            <tbody>

                                <?php
                                    include '../include/get_response_info.php'; //$con
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
                                    <?php foreach ($options as $value => $label): ?>
                                    <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                    <?php endforeach; ?>
                                    
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
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addmember">Add Response</h5>
            </div>

            <form action="../include/addresponse_inc.php" method="post">
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
                            <input type="hidden" name="for_id" value="<?php echo $id ?>">
                            <input type="text" name="year_stay" size = "16" style = "margin-right:10px; height:30px;" placeholder="Year of Stay">
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
                        
                        <div class="row" style="margin-top:-10px">
                            <label style = "margin-right:15px">In case Relocation isn't available:</label>
                            <label style = "margin-right:83px">Respondent:</label>
                            <label style = "margin-right:18px">Relationship to Household Head:</label>
                            <label style = "margin-right:12px">Total Monthly Income:</label>
                            <label >Interviewer:</label>
                        </div>
                                
                        <div class="row">
                            <div class="form-group" style="margin-right:10px; width:260px">
                                <select name="incase_relocation" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                    <option value="" selected="" data-select2-id="0"></option>
                                    <option value="Financial Assistance" data-select2-id="1">Financial Assistance</option>
                                    <option value="Balik Probinsya Program" data-select2-id="2">Balik Probinsya Program</option>
                                </select>
                            </div>  
                            <input type="text" name="respondent" size = "16" style = "margin-right:10px; height:30px;" placeholder="Respondent">    
                            <div class="form-group" style="margin-right:10px; width:260px;">
                            <select name="relationship_head" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                <option value="" selected="" data-select2-id="0"></option>
                                <option value="Person Listed in Masterlist" data-select2-id="1">Person Listed in Masterlist</option>
                                <option value="Person Not Listed in Masterlist" data-select2-id="2">Person Not Listed in Masterlist</option>
                            </select>
                            </div>
                            <input type="text" name="total_mon_inc" size = "16" style = "margin-right:10px; height:30px;" placeholder="Total Income">  
                            <input type="text" name="interviewer" size = "16" style = "margin-right:10px; height:30px;" placeholder="Interviewer">       
                        </div>   
                        
                        <div class="row" style="margin-top:-10px">
                            <label>Remarks:</label>
                        </div>
                                
                        <div class="row"> 
                            <textarea name="remarks" rows="3" cols="70" style="margin-right:10px;" placeholder="Remarks"></textarea>    
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

<div class="modal fade" id="editFamilyModal" tabindex="-1" role="dialog" aria-labelledby="editFamilyModallLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addmember">Edit Family Members</h5>
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
                                <input type="text" id="lastname" size = "16" style = "margin-right:10px; height:30px;" placeholder="Last Name">
                                <input type="text" id="firstname" size = "16" style = "margin-right:10px;height:30px;" placeholder="First Name">
                                <input type="text" id="middlename" size = "16" style = "margin-right:10px; height:30px;" placeholder="Middle Name">
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






</body>
</html>

<?php include ('footer.php'); ?>