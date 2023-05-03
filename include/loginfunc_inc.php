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
    $con = new mysqli("localhost", "root", "", "cudho");
    if ($con->connect_error) {
        die("Failed to connect: " . $con->connect_error);
    }

    // Prepare and execute a SELECT statement to retrieve user data
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        if ($data['password'] === $password) {
            // Store the username in the session
            $_SESSION['username'] = $username;

            // Redirect the user to the homepage
            header("Location: ../auth/index.php");
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
