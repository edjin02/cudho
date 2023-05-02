<!DOCTYPE html>
<html>
<head>
  <title>Clickable Table Row</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
    function getRowValue(rowId) {
      rowId--; // Subtract 1 to start from 0
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var value = this.responseText;
          $('#modal-value').html(value);
          $('#value-modal').modal('show');
        }
      };
      xhttp.open("GET", "index.php?row=" + rowId, true);
      xhttp.send();
    }
  </script>
</head>
<body>
  <table class="table">
    <thead>
      <tr>
        <th>Value 1</th>
        <th>Value 2</th>
      </tr>
    </thead>
    <tbody>
      <tr onclick="getRowValue(0)">
        <td>Value 1</td>
        <td>Value 2</td>
      </tr>
      <tr onclick="getRowValue(1)">
        <td>Value 3</td>
        <td>Value 4</td>
      </tr>
    </tbody>
  </table>

  <div class="modal fade" id="value-modal" tabindex="-1" role="dialog" aria-labelledby="value-modal-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="value-modal-label">Value</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="modal-value"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <?php
    if(isset($_GET["row"])) {
      $rowId = $_GET["row"];
      $value = "Value of row " . $rowId; // Replace with actual function to retrieve value from database
      echo "<script>getRowValue($rowId);</script>";
    }
  ?>
</body>
</html>
