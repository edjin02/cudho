
<?php $defaultEmail = "Dominc@gmail.com";

?>

<!DOCTYPE html>
<html>
<head>
  <title>Email Modal</title>
  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    .cancel-button {
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <?php
    if (isset($_POST['submit'])) {
      $email = $_POST['email'];
      // Process the submitted email here
      echo "Email: " . $email;
      exit; // Optional: terminate the script after processing the email
    }
  ?>

  <button id="addButton">Add</button>
  <button id="editButton">Edit</button>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <form method="POST">
        <input type="email" name="email" id="emailInput">
        <button type="submit" name="submit" id="saveButton">Save</button>
        <button type="button" class="cancel-button" id="cancelButton">Cancel</button>
      </form>
    </div>
  </div>

  <script>
    var modal = document.getElementById("myModal");
    var emailInput = document.getElementById("emailInput");
    var saveButton = document.getElementById("saveButton");
    var cancelButton = document.getElementById("cancelButton");
    var addButton = document.getElementById("addButton");
    var editButton = document.getElementById("editButton");

    addButton.addEventListener("click", function() {
      emailInput.value = "";
      modal.style.display = "block";
    });

    editButton.addEventListener("click", function() {
      emailInput.value = "<?php echo $defaultEmail; ?>";
      modal.style.display = "block";
      
    });

    saveButton.addEventListener("click", function() {
      var email = emailInput.value;
      // Perform saving logic here
      closeModal();
      alert(email);
    });

    cancelButton.addEventListener("click", function() {
      closeModal();
    });

    function closeModal() {
      modal.style.display = "none";
    }
  </script>
</body>
</html>
