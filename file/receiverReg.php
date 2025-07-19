<?php
@ob_start();
if(isset($_POST['rregister'])){
	require 'connection.php';
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
	$sql = "INSERT INTO user (name, address, phone, email, username, password)
	VALUES ('$name','$address', '$phone', '$email', '$username', '$password')";
	if ($conn->query($sql) === TRUE) {
		$msg = "You have successfully registered. Please, login to continue.";
		header( "location:../login.php?msg=".$msg);
	} else {
		$error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../register.php?error=".$error );
	}
	$conn->close();
}
}
?>