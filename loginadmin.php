<?php
@ob_start();
error_reporting(0);
//Include database connection details
include("connection.php"); 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background: url(image/BB3.jpg) no-repeat center;
      background-size: cover;
      min-height: 0;
      height: 650px;
    }

    .login-form {
      width: calc(100% - 20px);
      max-height: 650px;
      max-width: 450px;
      background-color: rgba(255, 255, 255, 0.2); /* White with 80% opacity */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional shadow */
    }

    .card {
      background-color: rgba(255, 255, 255, 0.2); /* White with 80% transparency */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional shadow */
    }

    .form-control {
      margin-bottom: 10px;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      background-color: #007bff; /* Change button background color */
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    a {
      display: block;
      margin-top: 10px;
      text-align: center;
      color: #007bff;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<?php $title="Flood | Login"; ?>
<?php require 'head.php'; ?>
<body>
  <?php require 'header.php'; ?>

  <div class="container cont">
    <?php require 'message.php'; ?>

    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
        <div class="card rounded">
          <div class="login-form">
            <form action="loginadmin.php" method="post">
              <label class="text-muted font-weight-bold">Email</label>
              <input type="email" name="email" placeholder="Email" class="form-control mb-4">
              
              <label class="text-muted font-weight-bold">Password</label>
              <input type="password" name="password" placeholder="Password" class="form-control mb-4">
              
              <input type="submit" name="login" value="Login">
            </form>

            <?php
            if (isset($_POST["login"])) {
              // Sanitize the POST values
              $email = $_POST['email'];
              $password = $_POST['password'];
              
              // Input Validations
              if ($email == '' || $password == '') {
                echo '<div class="alert alert-danger">Email or Password missing</div>';
              } else {
                // Create query
                $qry = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
                $query = mysqli_query($conn, $qry);
                $count = mysqli_num_rows($query);
                $row = mysqli_fetch_assoc($query);

                if ($count > 0) {
                  session_regenerate_id();
                  $_SESSION['SESS_MEMBER_IDad'] = $row['admin_id'];
                  $_SESSION['SESS_admin_NAME'] = $row['email'];
                  header('location:adminprofiles.php');
                  session_write_close();
                  exit();
                } else {
                  echo '<div class="alert alert-danger">Invalid Email or Password</div>';
                }
              }
            }
            ?>

            <a href="register.php" title="Click here">Don't have an account?</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require 'footer.php'; ?>
</body>
</html>
