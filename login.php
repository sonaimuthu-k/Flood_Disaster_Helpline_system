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
    body{
    background: url(image/RBC11.jpg) no-repeat center;
    background-size: cover;
    min-height: 0;
    height: 650px;
  }
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
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
           

    <div class="">
       <div class="" id="">
        <form action="login.php" class="" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold"> Email</label>
          <input type="email" name="email" placeholder="User Email" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold"> Password</label>
          <input type="password" name="password" placeholder="User Password" class="form-control mb-4">
          <input type="submit" name="login" value="Login" >
        </form>
		<?php
	//Start session

	
	@ob_start();
	include("connection.php");
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	 if (isset($_POST["login"])) {
	
	
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$email = ($_POST['email']);
	
	$password = (($_POST['password']));
$password1=($password);
	
	//Input Validations
	if($email == '') {
		$errmsg_arr[] = 'email ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the username form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM user WHERE email='$email' and password='$password1' ";
	$query=mysqli_query($conn,$qry);
	 $count = mysqli_num_rows($query);
                                    $row = mysqli_fetch_assoc($query);


                                    if ($count > 0) {
                                        session_start();
                                        session_regenerate_id();
                                        $_SESSION['SESS_MEMBER_ID'] = $row['user_id'];
										$_SESSION['SESS_USER_NAME']=$row['email'];
									
                                           header('location:rprofile.php');
                                        session_write_close();
                                        exit();
                                    } else {
                                        session_write_close();
                                        ?>

                                     
                                        <div class="alert alert-danger"><i class="icon-remove-sign"></i>&nbsp;Invalid Username or Password</div>

                                        <?php
                                      
                                    }
                                }
                                ?>

       </div>

		
    

    </div>
    <a href="register.php" class="text-center mb-4" title="Click here">Don't have account?</a>
	</div>
</div>
</div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
<?php ?>