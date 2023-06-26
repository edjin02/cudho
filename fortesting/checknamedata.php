<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
  $('#lastname, #firstname, #middlename').on('input', function() {
    var lastname = $('#lastname').val();
    var firstname = $('#firstname').val();
    var middlename = $('#middlename').val();
    
    $.ajax({
      type: "POST",
      url: "../fortesting/check_namedata.php",
      data: { lastname: lastname, firstname: firstname, middlename: middlename },
      success: function(response) {
        // Update the corresponding availability span based on the input field
        if (response.includes("exists")) {
          $('#lastnameAvailability').html(response);
        //   $('#firstnameAvailability').html(response);
        //   $('#middlenameAvailability').html(response);
          $('#saveButton').prop('disabled', true);
        } else {
          $('#lastnameAvailability').html('');
          $('#firstnameAvailability').html('');
          $('#middlenameAvailability').html('');
          $('#saveButton').prop('disabled', false);
        }
      }
    });
  });
});

  </script>
</head>
<body>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open Modal
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form>
          <!-- Modify the input fields to include the "name" attribute -->
            <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
            <span id="firstnameAvailability"></span>
            </div>
            <div class="form-group">
            <label for="middlename">Middle Name:</label>
            <input type="text" class="form-control" id="middlename" name="middlename">
            <span id="middlenameAvailability"></span>
            </div>
            <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
            <span id="lastnameAvailability"></span>
            </div>

          <!-- <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password">
          </div> -->
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveButton">Save</button>
      </div>

    </div>
  </div>
</div>

</body>
</html>