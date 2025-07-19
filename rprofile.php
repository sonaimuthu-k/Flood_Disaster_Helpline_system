<?php
@ob_start();
include("connection.php");
include("maindb.php");
session_start();

?><?php 
                                    $student_query=mysqli_query($conn,"select * from user where user_id='$_SESSION[SESS_MEMBER_ID]'")or die(mysqli_error());
                                    $student_row=  mysqli_num_rows($student_query);
									
										
if($fetch_sr_data=mysqli_fetch_array($student_query)){ 
            
$c_id=$fetch_sr_data[user_id];
$name=$fetch_sr_data['name'];
$address=$fetch_sr_data['address'];
$phone=$fetch_sr_data['phone'];
$email=$fetch_sr_data['email'];
$username=$fetch_sr_data['username'];
$password=$fetch_sr_data['password'];
									
									}
                                    ?>
									
	

<!DOCTYPE html>
<html>
<?php $title="Flood"; ?>
<?php require 'head.php';?>
<style>
    body{
    background: url(jastimage/cc1.jpg) no-repeat center;
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
	<?php require 'headeruser.php'; ?>

	<div class="container cont">

		<?php require 'message.php'; ?>
<b>Welcome</b>:<?php echo $_SESSION['SESS_USER_NAME'];?>
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-8 mb-5">
				<div class="card">
					<div class="media justify-content-center mt-1">
						<img src="image/user.png" alt="profile" class="rounded-circle" width="60" height="60">
					</div>
					<div class="card-body">
					   <form action="rprofile.php" name="blood" id="blood"  method="post">
					   <input type="hidden" name="updated_id" id="updated_id" value="<?php echo $c_id;?>">                 
                 
					   	<label class="text-muted font-weight-bold" class="text-muted font-weight-bold"> Name</label>
						<input type="text" name="name" value="<?php echo $name;?>" class="form-control mb-3">
						
						
						 <textarea rows="1" cols="10" class="form-control mb-3" name="address" placeholder="Add Address" required><?php echo $address;?></textarea>
		    <input type="tel" name="phone" placeholder="User Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}"  value="<?php echo $phone;?>">
          <input type="email" name="email" placeholder="User Email" class="form-control mb-3" value="<?php echo $email;?>" required>
        
           <input type="text" name="username" placeholder=" userName" value="<?php echo $username;?>" class="form-control mb-3" required>
         
          <input type="password" name="password" placeholder="User Password" value="<?php echo $password;?>" class="form-control mb-3" required minlength="6">
         
						<input type="submit" name="update" class="btn btn-block btn-primary" value="Update">
					   </form>
					</div>
					<a href="rprofile.php" class="text-center">Cancel</a><br>
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>
</html>
<?php 
 $action=$_GET['action'];

if(isset($_POST['update'])){
	
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
	
$updated_dtime=date('Y-m-d');
$newsid=$_POST['updated_id'];

					
  $update="update user  set name='$name',address='$address',email='$email',password='$password',phone='$phone',username='$username' where  user_id='$newsid' ";
 $update_result=mysqli_query($conn,$update)or die(mysqli_error());
 $encoded_id=base64_encode($newsid);
$message=base64_encode('category_updated');
header("location:rprofile.php?mes=$message&$random");

 // end for submit

}// end for action 
?>
