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
                        <h4 class="m-1 text-dark">Search Record <a style="font-size:13px">Verify, Search or/and Add a new Member</h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Records</a></li>
                            <li class="breadcrumb-item">Verification</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /.content-header -->
        
        <div class="content">
            <div class="col-md-15">
                <div class="card card" >
                    <div class="card-header" style="background-color:maroon;"></div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="form-group" >
                            <div class="input-group">
                                <div class="input-group-text">
                                    <span class="fas  fa-users"></span>
                                </div>

                                <div class="input-group-append">
                                    <input type="search" id="search" class="form-control" style="width: 600px" name="search" placeholder="search">
                                    </div>
                                </div>
                            </div>
                        
                        <div class="col-sm-2">
                            <div class="form-group">
                            <select id="barangay-select" class="select2 select2-hidden-accessible" style="width: 100%; height: 36px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                <?php foreach ($options as $value => $label): ?>
                                    <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                <?php endforeach; ?>
                            </select>
                            </div>

                        </div>
                        <button type="button" class="btn btn-block" data-toggle="modal" data-target="#myModal" style="height:36px; width:100px; color:white; background-color:maroon">
                            Add
                        </button>
                       
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addmember">Add Member</h5>
                                    </div>

                                    <form action="../include/addmember_inc.php" method="post">
                                    <div class="modal-body">
                                        <div class="card" style="border: 2px solid maroon;">
                                            <div class="card-body">

                                                <div class="row" style="margin-top:-10px">
                                                    <label style = "margin-right:35px">Tag:</label>
                                                    <label style = "margin-right:360px">Community:</label>
                                                    <label>Barangay:</label>
                                                </div>
                                                
                                                <div class="row">
                                                    <input type="text" name="tag" size = "2" style = "margin-right:10px; height:30px;" placeholder="Tag">
                                                    <input type="text" name="samahan" size = "50" style = "margin-right:10px;height:30px;" placeholder="Community/Samahan">
                                                    
                                                    <div class="form-group" style="width:225px;">
                                                        <select name = "barangay_select" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
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
                                                    <input type="text" name="lastname" size = "15" style = "margin-right:10px; height: 30px;" placeholder="Last Name">
                                                    <input type="text" name="firstname" size = "15" style = "margin-right:10px; height: 30px;" placeholder="First Name">
                                                    <input type="text" name="middlename" size = "15" style = "margin-right:10px; height: 30px;" placeholder="Middle Name">
                                                    <input type="text" name="extension" size = "8" style = "margin-right:10px; height: 30px;" placeholder="Sr. Jr. II III">
                                                    <div class="form-group" style="width:115px;" >
                                                        <select name="masterlist_select" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                                            <option value="" selected="" data-select2-id="0"></option>
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
                                                            <option value="" selected="" data-select2-id="0"></option>
                                                            <option value="Male" data-select2-id="1">Male</option>
                                                            <option value="Female" data-select2-id="2">Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-group mb-3" style="width:140px; margin-right:10px;">
                                                        <input type="date" name="birthdate_select" class="form-control" name="startdate" style="height: 31px;">
                                                    </div>
                                                    <div class="form-group" style="width:115px; margin-right:10px;">
                                                        <select name="civil_status" class="select2 select2-hidden-accessible" style="width: 100%; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                                            <option value="Single" selected="" data-select2-id="0">Single</option>
                                                            <option value="Married" data-select2-id="1">Married</option>
                                                            <option value="Divorced" data-select2-id="2">Divorced</option>
                                                        </select>
                                                    </div>
                                                    <input type="text" name="occupation" size = "22" style = "margin-right:10px; height: 30px;" placeholder="Occupation">
                                                    <input type="text" name="monthly_income" size = "12" style = "height: 30px;" placeholder="Income" >
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
                    </div>
                        </div>
                        <div class="card-header" style="background-color:maroon; padding:1px">
                            </div>
                            <div class="card-body" style="padding:5px">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead style="background-color: #ffcc00">
                                                        <tr>
                                                            <th>Tag</th>
                                                            <th>Household Head</th>
                                                            <th>Samahan</th>
                                                            <th>Barangay</th>
                                                            <th>Monthly Income</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="record-data">
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
            </div>
        </div>
</div>


</body>
</html>

<?php include ('footer.php'); ?>