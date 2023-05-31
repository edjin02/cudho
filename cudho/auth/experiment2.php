<?php
// Database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sample_pic';

// Connect to the database
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
  $imageName = $_FILES['imageFile']['name'];
  $imageData = addslashes(file_get_contents($_FILES['imageFile']['tmp_name']));

  // Insert image data into the database
  $sql = "INSERT INTO images (image_data, image_name) VALUES ('$imageData', '$imageName')";
  if (mysqli_query($conn, $sql)) {
    echo "Image uploaded successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

// Close the database connection
mysqli_close($conn);
?>
