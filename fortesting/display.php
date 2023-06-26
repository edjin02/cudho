<?php
// display.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the submitted values
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Display the values
  echo "Email: " . $email . "<br>";
  echo "Password: " . $password;
}
?>
