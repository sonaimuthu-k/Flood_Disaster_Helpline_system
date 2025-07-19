<?php
error_reporting(0);
@ob_start();
include("connection.php");
include("maindbad.php");
session_start();

?><?php 

$student_query = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id='$_SESSION[SESS_MEMBER_IDad]'") or die(mysqli_error());

if ($fetch_sr_data = mysqli_fetch_array($student_query)) { 
    $c_id = $fetch_sr_data['admin_id'];
    $name = $fetch_sr_data['name'];
    $address = $fetch_sr_data['address'];
    $phone = $fetch_sr_data['phone'];
    $email = $fetch_sr_data['email'];
    $degree = $fetch_sr_data['degree'];
    $username = $fetch_sr_data['username'];
    $password = $fetch_sr_data['password'];
}
?>
<!DOCTYPE html>
<html>
<?php $title = "Flood"; ?>
<?php require 'head.php';?>
<style>
    body {
        background: url(jastimage/bb7.jpg) no-repeat center;
        background-size: cover;
        min-height: 0;
        height: 800px;
    }

    .login-form {
        width: calc(100% - 20px);
        max-height: 650px;
        max-width: 450px;
        background-color: rgba(255, 255, 255, 0.8); /* White with 80% opacity */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional shadow */
    }

    .card {
        background-color: rgba(255, 255, 255, 0.8); /* White with 80% transparency */
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

    .media img {
        border-radius: 50%;
        margin-top: 15px;
    }

    input[type="submit"] {
        background-color: #007bff; /* Button background color */
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
<body>
    <?php require 'headeruserad.php'; ?>

    <div class="container cont">

        <?php require 'message.php'; ?>
        <b>Welcome</b>: <?php echo $_SESSION['SESS_admin_NAME']; ?>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8 mb-5">
                <div class="card">
                    <div class="media justify-content-center mt-1">
                        <img src="image/user.png" alt="profile" class="rounded-circle" width="60" height="60">
                    </div>
                    <form action="vprofile.php" name="blood" id="blood" method="post">
                        <input type="hidden" name="updated_id" id="updated_id" value="<?php echo $c_id; ?>">
                        
                        <input type="email" name="email" class="form-control mb-3" value="<?php echo $email; ?>" required>
                        <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" class="form-control mb-3" required>
                        <input type="password" name="password" placeholder="User Password" value="<?php echo $password; ?>" class="form-control mb-3" required minlength="6">
                        
                        <input type="submit" value="Update Profile">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require 'footer.php'; ?>
</body>
</html>
