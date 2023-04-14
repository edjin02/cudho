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
          </script>";
            
        }
    } else {
        echo "<script type='text/javascript'>alert('Invalid username or password');
        </script>";
    }

    $stmt->close();
    $con->close();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CUDHO | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../adminLTE/AdminLTE-3.2.0/dist/css/adminlte.min.css">

  <link rel="stylesheet" type="text/css" href="../css/style.css">
 
</head>
<body>
    <!-- Preloader
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="../../adminLTE/AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
            </div> -->
    <div style="background-image: url(../img/albion.jpeg); background-size: cover">
  <!-- /.login-logo -->
    <div class="container vh-100">
        <div class="row justify-content-center h-100">
            <div class="card w-25 my-auto" style="background-color: maroon; margin: 0; padding: 0" >
                <!-- logo  -->
                <!-- <div class="login-box">
                    <div class="login-logo">
                    <a href="../../index2.html">CUDHO</a>
                    </div> -->
                <div class="card-header text-center" style="font-family:'Times New Roman', Times, serif; font-size: 20px;">
                    <h2><b>CUDHO</b></h2>
                    <p>Informal Settlers Record<br>
                        Management System</p>
                </div>
                <div class="card-body">
                <form action="login.php" method="post">
                    <div class="input-group mb-3">
                    <input type="username" id="username" class="form-control" name="username" placeholder="username" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    </div>
                    <div class="input-group mb-3">
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-13">
                        <button type="submit" class="btn btn-warning btn-block" value="Login" >Sign In</button>
                    </div>
                    <!-- /.col -->  
                </form>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </div> 
    </div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>


</body>
</html>
