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
									
                                           header('location:indexprofile.php');
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
