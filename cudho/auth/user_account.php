<?php include ('nav-bar.php');  ?>

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
                    <h4 class="m-1 text-dark">User Account <a style="font-size:13px"> manages system end-users</a></h4>
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

                <div class="card" style="margin-left:25px; margin-right:25px">
                    <div class="card-header" style="background-color:maroon; padding:1px"></div>
                        <div class="card-body" style="padding:5px">
                          <div class="row">
                            <div class="col-12">
                            <div class="card">
                            <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                            <thead style="background-color: #ffcc00">
                            <tr>
                            <th>ISACTIVE</th>
                            <th>USERNAME</th>
                            <th>FULLNAME</th>
                            <th>CONTANCTNO</th>
                            <th>MEMBEROF</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            require '../include/connect.php'; //$con
                            $sql = "SELECT * FROM user";
                            $result = $con->query($sql);
                        
                            while($row = $result->fetch_assoc()){
                                echo "<tr>
                                        <td>" . $row["isactive"] . "</td>
                                        <td style='text-align: left'>" . $row["username"] . "</td>
                                        <td style='text-align: left'>" . $row["firstname"] . " " . $row["middlename"] . " " . $row["lastname"] . "</td>
                                        <td>" . $row["contactno"] . "</td>
                                        <td>" . $row["memberof"] . "</td>
                                    </tr>";
                            }
                        
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
                            <input name ="username" type="text" size="20" placeholder="Username" required>    
                        </div>

                        <div class="col-md-12 mt-2">
                            <label>Password:</label>
                        </div>
                        <div class="col-md-12">
                            <input name ="password" type="passsword" size="20" placeholder="Password" required>    
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
                            <input name = "lastname" type="text" size="20" placeholder="Lastname" required>    
                        </div>

                        <div class="col-md-12 mt-2">
                            <label>Firstname:</label>
                        </div>
                        <div class="col-md-12">
                            <input name = "firstname" type="text" size="20" placeholder="Firsname" required>    
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
                            <input name = "contactno" type="text" size="20" pattern="[0-9]+" placeholder="ContactNo" required>    
                        </div>
                    </div>
                    
                    <div class="col-md-4 text-left" style="font-size: 14px;">
                        <div class="col-md-12 text-center" style="font-size: 15px;">
                            <label>Access Rights:</label>
                        </div>
                        <div class="col-md-12">
                            <input type="checkbox" id="incomingmodule" name="ar_dashboard" value="1" style="margin-right:5px;">
                            <label for="incomingmodule" style="margin-top:6px; margin-right:30px;">Dashboard</label>
                        </div>
                        <div class="col-md-12">
                            <input type="checkbox" id="remarksforincoming" name="ar_record" value="checked" style="margin-right:5px;">
                            <label for="remarksforincoming" style="margin-top:6px; margin-right:30px;">Records</label>
                        </div>
                        <div class="col-md-12">
                            <input type="checkbox" id="staffassignment" name="ar_report" value="checked" style="margin-right:5px;">
                            <label for="staffassignment" style="margin-top:6px; margin-right:30px;">Reports</label>
                        </div>
                        <div class="col-md-12">
                            <input type="checkbox" id="outgoingmodule" name="ar_systman" value="checked" style="margin-right:5px;">
                            <label for="outgoingmodule" style="margin-top:6px; margin-right:30px;">System Manager</label>
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

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addmember">User Account Form</h5>
            </div>

            <form action="../include/adduser_inc.php" method="post">
            
            <div class="modal-body">
                <p>Is Active: <span id="isactive"></span></p>
                
                <input name="active" type="text" size="20" value="">
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

<script>
  $(document).ready(function() {
  // Get the checkboxes elements
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');

  // Add a click event listener to each checkbox
  checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('click', function() {
      // Update the value based on the checkbox state
      if (checkbox.checked) {
        checkbox.value = '1';
      } else {
        checkbox.value = '0';
      }
    });
    
    // Set the initial value based on the checkbox state
    if (checkbox.checked) {
      checkbox.value = '1';
    } else {
      checkbox.value = '0';
    }
  });
  // Select "ADMINISTRATOR" on page load
  $('select[name="memberof"]').val('ADMINISTRATOR');

  // Check all checkboxes on page load and set value to '1'
  $('input[type="checkbox"]').prop('checked', true).val('1');

  // Handle change event of the memberof select element
  $('select[name="memberof"]').change(function() {
    // Get the selected value
    var selectedValue = $(this).val();

    // Check/uncheck checkboxes based on the selected value
    if (selectedValue === "ADMINISTRATOR") {
      $('input[type="checkbox"]').prop('checked', true);
    } else if (selectedValue === "ENCODER") {
      $('input[type="checkbox"]').prop('checked', false);
    }
  });
});

</script>


<?php include ('footer.php'); ?>

