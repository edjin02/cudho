<?php
// Assuming you have a MySQL database connection
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'sample_pic';

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Retrieve the image filenames from the database
$sql = "SELECT image_name FROM images";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
  // Generate HTML tags for displaying the images
  $html = '';
  if ($result->num_rows > 0) {  
    while ($row = $result->fetch_assoc()) {
      $filename = $row['image_name'];
      $imagePath = 'uploads/' . $filename;
      $html .= "<img src='$imagePath' alt='$filename'>";
    }
  } else {
    $html = "<p>No images found.</p>";
  }
} else {
  die("Query failed: " . $conn->error);
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Uploaded Images</title>
</head>
<body>
  <?php echo $html; ?>
</body>
</html>
