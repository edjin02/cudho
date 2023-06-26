<?php
require '../include/user_session.php';

include '../include/accessrightfunc.php'; //dashboard access
checkAccessRights($user_id, 'ar_record');
include 'nav-bar.php';

include '..\..\cudho\functions\scripts.php';
include 'option.php';
include '../functions/Functions.php';

?>
<script src="../functions/verify-filter.js"></script>
<script src="../functions/jQuerySQL.js"></script>


<title> CUDHO | Dashboard </title>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 820px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-1 text-dark">Search Record <a style="font-size:13px">Verify, Search or/and Add a new
                            Member</h4>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item">Records</li>
                        <li class="breadcrumb-item">Verification</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <div class="content">
        <div class="col-md-15">
            <div class="card card">
                <div class="card-header" style="background-color:maroon;"></div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <span class="fas  fa-users"></span>
                                </div>

                                <div class="input-group-append">
                                    <input type="search" id="search" class="form-control" style="width: 600px"
                                        name="search" placeholder="search">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <select id="barangay-select" class="select2 select2-hidden-accessible"
                                    style="width: 100%; height: 36px;" data-select2-id="3" tabindex="-1"
                                    aria-hidden="true">
                                    <?php foreach ($options as $value => $label): ?>
                                        <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                        </div>
                        <button type="button" class="btn btn-block" data-toggle="modal" data-target="#myModal"
                            style="height:36px; width:100px; color:white; background-color:maroon">
                            Add
                        </button>


                    </div>
                </div>

                <div class="card card-primary" style="padding-top: 10px;">
                    <div class="card-body table-responsive" style="padding: 1px">
                        <table class="table table-hover text-bordered table-condensed table-striped" id="getVerifData">
                            <thead class="btn-yellow">
                                <th class="text-center">Tag</th>
                                <th class="text-center">Household Head</th>
                                <th class="text-center">Samahan</th>
                                <th class="text-center">Barangay</th>
                                <th class="text-center">Monthly Income</th>
                            </thead>
                            <tbody id="verifTable">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document" style="max-width: 1240px;">
        <div class="modal-content">


            <form action="../include/addmember_inc.php" method="POST">
                <div class="page" id="page1">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addmember">Add Member</h5>
                        <button type="button" class="btn btn-warning btn-sm ml-auto" data-dismiss="modal"
                            style="margin-right:10px;">Close</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="card" style="border: 2px solid maroon;width: 75%;">
                                <div class="card-body">

                                    <div class="row" style="margin-top:-10px">
                                        <label>Address:</label>
                                    </div>

                                    <div class="row">
                                        <input type="text" name="tag" size="105" style="margin-right:10px; height:30px;"
                                            placeholder="Address" tabindex="1">

                                    </div>

                                    <div class="row" style="margin-top:10px">
                                        <label style="margin-right:80px">Tag:</label>
                                        <label style="margin-right:360px">Community:</label>
                                        <label>Barangay:</label>
                                    </div>

                                    <div class="row">
                                        <input type="text" id="tag" size="8" style="margin-right:10px; height:30px;"
                                            placeholder="Tag" tabindex="1">
                                        <div class="form-group">
                                            <select id="barangay-select" class="select2 select2-hidden-accessible"
                                                style="margin-right:10px; width: 440px; height: 30px;"
                                                data-select2-id="3" tabindex="2" aria-hidden="true">
                                                <?php foreach ($community_options as $value => $label): ?>
                                                    <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group" style="width:320px;">
                                            <select name="barangay_select" class="select2 select2-hidden-accessible"
                                                style="width: 100%; height: 30px;" data-select2-id="3" tabindex="3"
                                                aria-hidden="true">
                                                <?php foreach ($options as $value => $label): ?>
                                                    <option value="<?php echo $value; ?>"><?php echo $label; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row" style="margin-top: 10px;">
                                        <input type="checkbox" id="pagibigCheckbox" name="myCheckbox" value="checked"
                                            style="margin-bottom:15px;margin-right:5px;" tabindex="14">
                                        <label for="pagibigCheckbox"
                                            style="margin-top:4px; margin-right:30px;">Structure
                                            Owner</label>
                                        <div class="form-group" style="width:200px; margin-right:4px;">
                                            <select name="gender_select" class="select2 select2-hidden-accessible"
                                                style="width: 100%; height: 30px;" data-select2-id="3" tabindex="9"
                                                aria-hidden="true">
                                                <option value="New Owner" data-select2-id="0">New Owner</option>
                                                <option value="Sharer" data-select2-id="1">Sharer</option>
                                                <option value="Renter" data-select2-id="2">Renter</option>
                                            </select>
                                        </div>
                                        <input type="text" name="lastname" size="50"
                                            style="margin-left:10px; height: 30px;"
                                            placeholder="Name of Original Masterlist" tabindex="4">

                                    </div>

                                    <div class="row" style="margin-top: 10px;">
                                        <label style="margin-right:25px">Gender</label>
                                        <label style="margin-right:82px">LastName:</label>
                                        <label style="margin-right:80px">FirstName:</label>
                                        <label style="margin-right:72px">MiddleName:</label>
                                        <label style="margin-right:80px">Extension:</label>
                                        <label>Birthday:</label>
                                    </div>

                                    <div class="row">
                                        <div class="form-group" style="width:77px; margin-right:4px;">
                                            <select name="gender_select" class="select2 select2-hidden-accessible"
                                                style="width: 100%; height: 30px;" data-select2-id="3" tabindex="9"
                                                aria-hidden="true">
                                                <option value="Male" data-select2-id="0">Male</option>
                                                <option value="Female" data-select2-id="1">Female
                                                </option>
                                            </select>
                                        </div>
                                        <input type="text" name="lastname" size="15"
                                            style="margin-right:4px; height: 30px;" placeholder="Last Name"
                                            tabindex="4">
                                        <input type="text" name="firstname" size="15"
                                            style="margin-right:4px; height: 30px;" placeholder="First Name"
                                            tabindex="5">
                                        <input type="text" name="middlename" size="15"
                                            style="margin-right:4px; height: 30px;" placeholder="Middle Name"
                                            tabindex="6">
                                        <input type="text" name="extension" size="15"
                                            style="margin-right:4px; height: 30px;" placeholder="Sr. Jr. II III"
                                            tabindex="7">
                                        <div class="input-group mb-3" style="width:140px;">
                                            <input type="date" name="birthdate_select" class="form-control"
                                                name="startdate" style="height: 31px;" tabindex="10">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card ml-1" style="border: 2px solid maroon;width: 24.5%;">
                                <div class="card-body">
                                    <label style="margin-right:25px">Hotdog Hotdog</label>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning btn-sm ml-auto" onclick="nextPage()"
                            style="margin-right:10px;">Next</button>

                    </div>
                </div>

                <div class="page" id="page2" style="display: none;">
                    <!-- Content of the second page -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="addmember">Add Spouse</h5>
                        <button type="button" class="btn btn-warning btn-sm ml-auto" data-dismiss="modal"
                            style="margin-right:10px;">Close</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="card" style="border: 2px solid maroon;width: 75%;">
                                <div class="card-body">

                                    <div class="row" style="margin-top:-10px">
                                        <label>Address:</label>
                                    </div>

                                    <div class="row">
                                        <input type="text" id="address" size="105" style="margin-right:10px; height:30px;"
                                            placeholder="Address" tabindex="1">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning btn-sm" onclick="previousPage()"
                            style="margin-right:10px;">Previous</button>
                        <div class="ml-auto">
                            <!-- Other buttons or content -->
                            <button type="button" class="btn btn-warning btn-sm ml-auto" onclick="nextPage()"
                                style="margin-right:10px;">Next</button>
                        </div>
                    </div>

                </div>

                <div class="page" id="page3" style="display: none;">
                    <!-- Content of the second page -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="addmember">Add Family Member</h5>
                        <button type="button" class="btn btn-warning btn-sm ml-auto" data-dismiss="modal"
                            style="margin-right:10px;">Close</button>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning btn-sm" onclick="previousPage()"
                            style="margin-right:10px;">Previous</button>
                        <div class="ml-auto">
                            <!-- Other buttons or content -->
                            <button type="submit" value="Submit" class="btn btn-primary btn-sm"
                                style="margin-right:10px;" tabindex="17">Save</button>
                        </div>
                    </div>

                </div>


            </form>
        </div>
    </div>
</div>

<script>
    var currentPage = 1; // Track the current page

    function nextPage() {
        // Increment the current page and show the corresponding page
        currentPage++;
        showPage(currentPage);
    }

    function previousPage() {
        // Decrement the current page and show the corresponding page
        currentPage--;
        showPage(currentPage);
    }

    function showPage(pageNumber) {
        var pages = document.getElementsByClassName('page');
        // Hide all pages
        for (var i = 0; i < pages.length; i++) {
            pages[i].style.display = 'none';
        }
        // Show the specified page
        pages[pageNumber - 1].style.display = 'block';
    }

    $('#myModal').on('shown.bs.modal', function () {
        // Reset the current page to 1 when the modal is shown
        currentPage = 1;
        showPage(currentPage);
    });

</script>
<?php include('footer.php'); ?>