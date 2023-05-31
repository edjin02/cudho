<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
    <style>
        .card {
            width: 300px;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
        }

        .card img {
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Image Gallery</h1>
    <div>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="images[]" multiple>
        <input type="submit" value="Upload">
    </form>
    </div>
    <div class="gallery">
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

        // Retrieve image data from the database
        $sql = "SELECT * FROM images";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="card">
                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image_data']); ?>" alt="<?php echo $row['image_name']; ?>">
                <p><?php echo $row['image_name']; ?></p>
            </div>
        <?php
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
