<?php include ('../auth/nav-bar.php');  ?>
<!-- <script type="text/javascript" src="jQueryallfunc.js"></script> -->
<!-- <script type="text/javascript" src="allfunction.php"></script> -->
<!-- <script type="text/javascript" src="userdata.php"></script> -->
<!-- <script type="text/javascript" src="userdata.js"></script> -->
<script src="../funcnew/userdata-script.js"></script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CUDHO | User Account </title>
    <?php
        include '..\..\cudho\functions\scripts.php';
     ?>
     
</head>
<body>

    
 <div class="content-wrapper" style="min-height: 820px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-1 text-dark">User Account 
                        <small> manages system end-users</small></h4>
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
            <div class="card card" >
                <div class="card-header" style="background-color:maroon; padding: .10rem;">
                <h7 style="font-size: 15px;margin-left: 10px;">Account Management</h7>
                </div>

                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="form-group col-auto ml-5">
                            <div class="input-group">
                                <div class="input-group-text">
                                    <span class="fas fa-users"></span>
                                </div>
                                <div class="input-group-append">
                                    <input type="search" id="search" class="form-control" style="width: 650px" name="search" placeholder="search">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn mr-3" data-toggle="modal" data-target="#myModal" style="color:white; background-color:maroon; height:38px; width:auto;">
                            Add User Account
                        </button>
                    </div>
                </div>

                <div class="box box-primary" style="width:98%; margin: 0 auto;">
                    <div class="box-body table-bordered">
                        <table class="table table-hover text-bordered table-condensed table-striped" id="viewUserData">
                            <thead style="background-color: #ffcc00">
                            <tr>
                            <th class="text-center">ISACTIVE</th>
                            <th class="text-center">USERNAME</th>
                            <th class="text-center">FULLNAME</th>
                            <th class="text-center">CONTANCTNO</th>
                            <th class="text-center">MEMBEROF</th>
                            </tr>
                            </thead>
                            <tbody id="userTable">
                            

                            </tbody>
                            </table>
                            </div></div>

                            </div>

                            </div>
                            </div>
                        </div>
                        
                    </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addmember">User Account Form</h5>
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
                            <input name ="username" type="text" size="20" placeholder="Username">    
                        </div>

                        <div class="col-md-12 mt-2">
                            <label>Password:</label>
                        </div>
                        <div class="col-md-12">
                            <input name ="password" type="passsword" size="20" placeholder="Password">    
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
                            <input name = "lastname" type="text" size="20" placeholder="Lastname">    
                        </div>

                        <div class="col-md-12 mt-2">
                            <label>Firstname:</label>
                        </div>
                        <div class="col-md-12">
                            <input name = "firstname" type="text" size="20" placeholder="Firsname">    
                        </div>

                        <div class="col-md-12 mt-2">
                            <label>Middlename:</label>
                        </div>
                        <div class="col-md-12">
                            <input name = "middlename" type="text" size="20" placeholder="Middlename">    
                        </div>

                        <div class="col-md-12 mt-2">
                            <label>ContactNo:</label>
                        </div>
                        <div class="col-md-12">
                            <input name = "contactno" type="text" size="20" placeholder="ContactNo">    
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

<!-- <div class="modal" id="editModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="editModalBody">
        <form>
          <input type="hidden" id="selected-user-id">
          <div class="form-group">
            <label for="inputFirstName">First Name</label>
            <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
          </div>
          <div class="form-group">
            <label for="inputMiddleName">Middle Name</label>
            <input type="text" class="form-control" id="inputMiddleName" placeholder="Middle Name">
          </div>
          <div class="form-group">
            <label for="inputLastName">Last Name</label>
            <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
          </div>
          <div class="form-group">
            <label for="inputContactNo">Contact No</label>
            <input type="text" class="form-control" id="inputContactNo" placeholder="Contact No">
          </div>
          <div class="form-group">
            <label for="inputMemberOf">Member Of</label>
            <input type="text" class="form-control" id="inputMemberOf" placeholder="Member Of">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

</div>

<!-- <div class="modal fade" id="editFamilyModal" tabindex="-1" role="dialog" aria-labelledby="editFamilyModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editFamilyModalLabel">Edit Family Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="firstname" class="col-form-label">First Name:</label>
            <input type="text" class="form-control" id="firstname">
          </div>
          <div class="form-group">
            <label for="lastname" class="col-form-label">Last Name:</label>
            <input type="text" class="form-control" id="lastname">
          </div>
          <div class="form-group">
            <label for="middlename" class="col-form-label">Middle Name:</label>
            <input type="text" class="form-control" id="middlename">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

<!-- Modal --><!-- The modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="POST" action="update_user.php">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <label for="middlename">Middle Name</label>
                        <input type="text" class="form-control" id="middlename" name="middlename">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="contactno">Contact No.</label>
                        <input type="text" class="form-control" id="contactno" name="contactno" required>
                    </div>
                    <div class="form-group">
                        <label for="memberof">Member Of</label>
                        <input type="text" class="form-control" id="memberof" name="memberof" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="editForm" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- <script>
    $(document).ready(function() {
        // Handle the click event of the table row
        $('table').on('click', 'tr', function() {
            // Get the ID of the user from the data attribute
            var id = $(this).data('id');
            
            // Make an AJAX request to retrieve the user's data
            $.ajax({
                type: 'POST',
                url: '../include/userdata.php',
                data: {id: id},
                success: function(response) {
                    // Parse the JSON data returned by the server
                    var user = JSON.parse(response);
                    
                    // Populate the input fields in the modal with the user's data
                    $('#id').val(user.id);
                    $('#username').val(user.username);
                    $('#firstname').val(user.firstname);
                    $('#middlename').val(user.middlename);
                    $('#lastname').val(user.lastname);
                    $('#contactno').val(user.contactno);
                    $('#memberof').val(user.memberof);
                }
            });
        });
    });
</script>
 -->


</body>
</html>

<?php include ('../auth/footer.php'); ?>