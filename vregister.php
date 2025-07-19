<?php 
@ob_start();
error_reporting(0);
session_start();
?><?php
@ob_start();
if(isset($_POST['rregister'])){
	include("connection.php");
	$name=$_POST['name'];
	 
$address=$_POST['address'];
if(!get_magic_quotes_gpc()){
$address=addslashes($address);
 }else{
 $address=$address;
 }

	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	$username=$_POST['username'];
	$rbg=$_POST['rbg'];
	$check_email = mysqli_query($conn, "SELECT email FROM user where email = '$email' ");
	if(mysqli_num_rows($check_email) > 0){
		?>
		<script language="javascript">
		alert("Email Already exists");
		history.back();
		</script>
		
		<?php
    $error= 'Email Already exists. Please try another Email.';
    header( "location:../register.php?error=".$error );
}else{
	$sql = "INSERT INTO volunteer (name, address, phone, degree, email, username, password)
	VALUES ('$name','$address', '$phone', '$degree', '$email', '$username', '$password')";
	if ($conn->query($sql) === TRUE) {
		$msg = "You have successfully registered. Please, login to continue.";
		header( "location:loginv.php?msg=".$msg);
	} else {
		$error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../register.php?error=".$error );
	}
	$conn->close();
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
 body {
        background: url(jastimage/bb11-1.jpg) no-repeat center;
        background-size: cover;
        min-height: 100vh; /* Make sure the body covers the viewport */
        display: flex;
        flex-direction: column;
    }
    
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
</style>
</head>
<?php $title="Flood"; ?>
<?php require 'head.php'; ?>
<body>
  <?php include 'header.php'; ?>

    <div class="container cont">

    <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">
          <div class="card rounded">
           
    <div class="tab-content">

      

         <form action="vregister.php" method="post" enctype="multipart/form-data">
          <input type="text" name="name" value="<?php echo $name;?>" placeholder="Name" class="form-control mb-3" required>
          
		  <textarea rows="1" cols="10" class="form-control mb-3" name="address" placeholder="Add Address" required></textarea>
		    <input type="tel" name="phone" placeholder="User Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
<input type="text" name="degree" placeholder="User Degree" class="form-control mb-3" required>         
		 <input type="email" name="email" placeholder="User Email" class="form-control mb-3" required>
        
           <input type="text" name="username" placeholder=" userName" class="form-control mb-3" required>
         
          <input type="password" name="password" placeholder="User Password" class="form-control mb-3" required minlength="6">
          <input type="submit" name="rregister" value="Register" class="btn btn-primary btn-block mb-4">
        </form>

    
    </div>
    <a href="login.php" class="text-center mb-4" title="Click here">Already have account?</a>
</div>
</div>
</div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
