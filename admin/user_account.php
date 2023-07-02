<?php require '../include/user_session.php';

include '../include/accessrightfunc.php'; //access rights
checkAccessRights($user_id, 'ar_systman');

include '../admin/nav-bar.php';

include '../functions/scripts.php';
include '../functions/Functions.php';
?>
<script src="../functions/jQuerySQL.js"></script>
<script src="../functions/jQueryAuth.js"></script>
<script src="../functions/user-script.js"></script>




<title> CUDHO | User Account </title>


<div class="content-wrapper" style="min-height: 820px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-1 text-dark">User Account
                        <small> manages system end-users</small>
                    </h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><i class="fas fa-home"></i> User Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="col-md-15">
            <div class="card card">
                <div class="card-header" style="background-color:maroon; padding: .10rem;">
                    <h7 style="font-size: 15px;margin-left: 10px;">Account Management</h7>
                </div><br>


                <form method="post">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <span class="fa fa-search"></span>
                                        </span>
                                    </div>
                                    <input type="search" id="search" class="form-control" style="width: 600px" name="search" placeholder="search">
                                </div>
                            </div>
                            <div class="col-auto mr-2">
                                <button type="button" class="btn" data-toggle="modal" data-target="#myModal" style="color:white; background-color:maroon; height:38px; width:auto;">
                                    Add User Account
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="card card-primary" style="width:98%; margin: 0 auto;">
                        <div class="card-body table-bordered">
                            <table class="table table-hover text-bordered table-condensed table-striped" id="getUserData">
                                <thead class="btn-yellow">
                                    <th class="text-center">ISACTIVE</th>
                                    <th class="text-center">USERNAME</th>
                                    <th class="text-center">FULLNAME</th>
                                    <th class="text-center">CONTACTNO</th>
                                    <th class="text-center">MEMBEROF</th>
                                </thead>

                                <tbody id="userTable">


                                </tbody>
                            </table>

                            <p id="no-data-message" class="centered-text" style="display: none;">No user data existing</p>
                        </div>
                    </div>
                </form>

            </div>

        </div>


        <!--    / .content-->
    </div>
    <!--    /.content-wrapper-->


    <!--User Account-->
    <div class="modal fade in" id="viewUserModal" tabindex="-1" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-primary small">

            <form id="editUser">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editmember">User Account Form</h5>
                        <!-- open a print form modal -->
                        <button type="button" id='printForm' name='printForm' class="btn-info btn pull-left" data-toggle='modal' data-target="#printFormModal">Print Form</button>
                    </div>
                    <div class="modal-body">
                        <form id="editUser">
                            <div class="card" style="border: 2px solid maroon;">
                                <div class="card-body">
                                    <div class="row" style="margin-top:-10px">

                                        <div class="col-md-4 text-center">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Username:</label>
                                                    <input name="username" type="text" class="form-control" id="username" size="20" placeholder="Username">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select name="memberof" class="select2 select2-hidden-accessible" style="width: 200px; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                                        <option value="ADMINISTRATOR" selected="" data-select2-id="0">ADMINISTRATOR</option>
                                                        <option value="ENCODER" data-select2-id="1">ENCODER</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12" style="margin-top: -9px;">
                                                <label>isActive:</label>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select name="isactive" class="select2 select2-hidden-accessible" style="width: 200px; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                                        <option value="ACTIVE" selected="" data-select2-id="0">ACTIVE</option>
                                                        <option value="INACTIVE" data-select2-id="1">INACTIVE</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-4 text-left" style="font-size: 14px;">
                                                <div class="col-md-12 text-center" style="font-size: 15px;">
                                                    <label>Access Rights:</label>
                                                </div>
                                                <div class="form-check">
                                                    <div class="col-md-12">
                                                        <input class="form-check-input" type="checkbox" id="incomingmodule" name="incomingmodule" value="on">
                                                        <label class="form-check-label" for="incomingmodule">Incoming_Module</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <input type="hidden" class="form-control" id="mode" name="mode" value="add">
                                        <input type="hidden" class="form-control" id="userid" name="userid" value="<?php echo $userid; ?>">
                                        <input type="hidden" class="form-control" id="action" name="action" value="saveEditModal">




                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning mr-auto btn-sm" data-dismiss="modal" style="margin-left:10px;">Close</button>
                        <button type="submit" id="saveEditModal" name="saveEditModal" class="btn btn-primary submit" style="margin-right:10px;">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addmember">User Account Form</h5>
                    <!-- <button type="button" id='printForm' name='printForm' class="btn-info btn pull-left"
                    data-toggle='modal' data-target="#printFormModal">Print Form</button> -->
                </div>

                <form action="../include/adduser_inc.php" method="post">
                    <div class="modal-body">
                        <div class="card" style="border: 2px solid maroon;">
                            <div class="card-body">
                                <div class="row" style="margin-top:-10px">

                                    <div class="col-md-4 text-center">
                                        <div class="col-md-12">
                                            <label>Username:</label>
                                        </div>
                                        <div class="col-md-12">
                                            <input name="username" type="text" size="20" placeholder="Username">
                                        </div>

                                        <div class="col-md-12 mt-2">
                                            <label>Password:</label>
                                        </div>
                                        <div class="col-md-12">
                                            <input name="password" type="passsword" size="20" placeholder="Password">
                                        </div>

                                        <div class="col-md-12 mt-2">
                                            <label>MemberOf:</label>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name="memberof" class="select2 select2-hidden-accessible" style="width: 200px; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                                    <option value="ADMINISTRATOR" selected="" data-select2-id="0">ADMINISTRATOR</option>
                                                    <option value="ENCODER" data-select2-id="1">ENCODER</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12" style="margin-top: -9px;">
                                            <label>isActive:</label>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name="isactive" class="select2 select2-hidden-accessible" style="width: 200px; height: 30px;" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                                    <option value="ACTIVE" selected="" data-select2-id="0">ACTIVE</option>
                                                    <option value="INACTIVE" data-select2-id="1">INACTIVE</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-4 text-center">
                                        <div class="col-md-12">
                                            <label>Lastname:</label>
                                        </div>
                                        <div class="col-md-12">
                                            <input name="lastname" type="text" size="20" placeholder="Lastname">
                                        </div>

                                        <div class="col-md-12 mt-2">
                                            <label>Firstname:</label>
                                        </div>
                                        <div class="col-md-12">
                                            <input name="firstname" type="text" size="20" placeholder="Firsname">
                                        </div>

                                        <div class="col-md-12 mt-2">
                                            <label>Middlename:</label>
                                        </div>
                                        <div class="col-md-12">
                                            <input name="middlename" type="text" size="20" placeholder="Middlename">
                                        </div>

                                        <div class="col-md-12 mt-2">
                                            <label>ContactNo:</label>
                                        </div>
                                        <div class="col-md-12">
                                            <input name="contactno" type="text" size="20" placeholder="ContactNo">
                                        </div>
                                    </div>

                                    <div class="col-md-4 text-left" style="font-size: 14px;">
                                        <div class="col-md-12 text-center" style="font-size: 15px;">
                                            <label>Access Rights:</label>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="checkbox" id="incomingmodule" name="myCheckbox" value="checked" style="margin-right:5px;">
                                            <label for="incomingmodule" style="margin-top:6px; margin-right:30px;">Incoming Module</label>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="checkbox" id="remarksforincoming" name="myCheckbox" value="checked" style="margin-right:5px;">
                                            <label for="remarksforincoming" style="margin-top:6px; margin-right:30px;">Remarks for Incoming</label>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="checkbox" id="staffassignment" name="myCheckbox" value="checked" style="margin-right:5px;">
                                            <label for="staffassignment" style="margin-top:6px; margin-right:30px;">Staff Assignment</label>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="checkbox" id="outgoingmodule" name="myCheckbox" value="checked" style="margin-right:5px;">
                                            <label for="outgoingmodule" style="margin-top:6px; margin-right:30px;">Outgoing Module</label>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="checkbox" id="workingpermitmodule" name="myCheckbox" value="checked" style="margin-right:5px;">
                                            <label for="workingpermitmodule" style="margin-top:6px; margin-right:30px;">Working Permit Module</label>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="checkbox" id="clearancemodule" name="myCheckbox" value="checked" style="margin-right:5px;">
                                            <label for="clearancemodule" style="margin-top:6px; margin-right:30px;">Clearance Module</label>
                                        </div>


                                    </div>



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

<!-- Modal -->
<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">User Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body" id="modalBody">
                User data will be inserted here -->
<!-- </div>
        </div>
    </div>
</div> -->


<!-- </div> -->



<?php include('../admin/footer.php'); ?>