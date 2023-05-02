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
    $stmt = $con->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {
            // Store the username in the session
            $_SESSION['username'] = $username;

            // Redirect the user to the homepage
            header("Location: index.php");
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

    $stmt->close();
    $con->close();
}

?>