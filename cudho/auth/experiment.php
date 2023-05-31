
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
            overflow: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .card img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        /* Modal styles */
        .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.9);
    }

    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        max-height: 80%;
    }

    .modal-content img {
        width: 100%;
        height: auto;
    }

    .close {
        color: #fff;
        position: absolute;
        top: 15px;
        right: 25px;
        font-size: 35px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #ccc;
        text-decoration: none;
        cursor: pointer;
    }

        /* Add the CSS styles from the previous code snippet */
    </style>
</head>
<body>
    <h1>Image Gallery</h1>
    <div>
        <form action="experiment2.php" method="post" enctype="multipart/form-data">
            <input type="file" name="imageFile" id="imageFile">
            <input type="submit" value="Upload Image" name="submit">
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


        $sql = "SELECT * FROM images";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="card">
                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image_data']); ?>" alt="<?php echo $row['image_name']; ?>">
            </div>
        <?php
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </div>



    <!-- Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>

    <script>
        // Get the modal element
        var modal = document.getElementById("myModal");

        // Get the image and close button elements
        var images = document.querySelectorAll(".card img");
        var closeButton = document.getElementsByClassName("close")[0];

        // Add click event listeners to images
        images.forEach(function(image) {
            image.addEventListener("click", function() {
                // Set the source of the modal image to the clicked image
                var modalImage = document.getElementById("modalImage");
                modalImage.src = this.src;

                // Display the modal
                modal.style.display = "block";
            });
        });

        // Close the modal when the close button is clicked
        closeButton.addEventListener("click", function() {
            modal.style.display = "none";
        });

    </script>
</body>
</html>
