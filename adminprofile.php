<?php
error_reporting(0);
@ob_start();
include("connection.php");
include("maindbad.php");
session_start();

?><?php 

                                    $student_query=mysqli_query($conn,"select * from admin where admin_id='$_SESSION[SESS_MEMBER_IDad]'")or die(mysql_error());
                                    $student_row=  mysqli_fetch_array($student_query);
									
										
if($fetch_sr_data=mysqli_fetch_array($student_query)){ 
            
$c_id=$fetch_sr_data[admin_id];
$name=$fetch_sr_data[name];
$address=$fetch_sr_data[address];
$phone=$fetch_sr_data[phone];
$email=$fetch_sr_data[email];

$degree=$fetch_sr_data[degree];
$username=$fetch_sr_data[username];
$password=$fetch_sr_data[password];
									
									}
                                    ?>
									
	

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Receiver Profile"; ?>
<?php require 'head.php';?>
<style>
    body{
    background: url(jastimage/bb8.jpg) no-repeat center;
    background-size: cover;
    min-height: 0;
    height: 800px;
  }
.login-form{
    width: calc(100% - 20px);
    max-height: 650px;
    max-width: 450px;
    background-color: white;
}
</style>
<body>
	<?php require 'headeruserad.php'; ?>

	<div class="container cont">

		<?php require 'message.php'; ?>
<b>Welcome</b>:<?php echo $_SESSION['SESS_admin_NAME'];?>
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-8 mb-5">
				<div class="card">
					<div class="media justify-content-center mt-1">
						<img src="image/user.png" alt="profile" class="rounded-circle" width="60" height="60">
					</div>
	
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>
</html>

