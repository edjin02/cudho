<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#username').on('input', function() {
        var username = $(this).val();
        $.ajax({
          type: "POST",
          url: "../fortesting/check_data.php",
          data: { username: username },
          success: function(response) {
            $('#availability').html(response);
            // Disable the "Save" button if the username already exists
            if (response.includes("exists")) {
              $('#saveButton').prop('disabled', true);
            } else {
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
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username">
            <span id="availability"></span>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password">
          </div>
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
