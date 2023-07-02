<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    }

    // Database connection
    $con = new mysqli("localhost", "root", "", "cudhonew");
    if ($con->connect_error) {
        die("Failed to connect: " . $con->connect_error);
    }

    // Prepare and execute a SELECT statement to retrieve user data
    $query = "SELECT * FROM tbl_user WHERE username = '$username'";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $hashedPassword = $data['password']; // Assuming the encrypted password is stored in the 'password' column

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct
            $_SESSION['user_id'] = $data['id'];
            header("Location: ../admin/index.php");
            exit();
        } else {
            echo "<script type='text/javascript'>alert('Invalid username or password');
                  window.history.back();
                  </script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Invalid username or password');
              window.history.back();
              </script>";
    }

    $con->close();
}

?>
