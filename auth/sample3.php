<?php
// Sample data for the table
$data = array(
    array('John', 'Doe', 'john.doe@example.com'),
    array('Jane', 'Doe', 'jane.doe@example.com'),
    array('Bob', 'Smith', 'bob.smith@example.com')
);
?>

<!-- HTML code for the table and modal -->
<table id="myTable">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr data-id="<?php echo $row[2]; ?>">
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<?php
// Assign the email value to a PHP variable
$emailValue = $row[1];
?>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <!-- Output the email value in a PHP variable inside the modal -->
    <p id="emailValue" style="display: none;"><?php echo $emailValue; ?></p>
    <form action="../auth/sample4.php" method="post">
        <input type="text" name = "hi" value="<?php echo $emailValue ?>" placeholder="Occupation">
        <button type="submit" value="Submit" class="btn btn-primary btn-sm" style="margin-right:10px;">Save</button>
    </form>
  </div>
</div>

<!-- JavaScript code -->
<script>
  var rows = document.getElementsByTagName("tr");
  for (var i = 0; i < rows.length; i++) {
    rows[i].addEventListener("click", function() {
      var email = this.getAttribute("data-id");
      // Output the email value in a PHP variable in the JavaScript code
      document.getElementById("emailValue").innerHTML = "<?php echo $emailValue; ?>";
      document.getElementById("myModal").style.display = "block";
    });
  }

  // When the user clicks on <span> (x), close the modal
  document.getElementsByClassName("close")[0].onclick = function() {
    document.getElementById("myModal").style.display = "none";
  }
</script>

<!-- CSS code for the modal -->
<style>
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0, 0, 0); /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
  }

  .modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
  }

  /* Close button */
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }
</style>
