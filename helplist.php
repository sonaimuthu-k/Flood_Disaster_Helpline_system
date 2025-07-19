<?php
@ob_start();
include("connection.php");
include("maindbv.php");
session_start();

?><?php 
                                    $student_query=mysqli_query($conn,"select * from volunteer where volunteer_id='$_SESSION[SESS_MEMBER_IDv]'")or die(mysqli_error());
                                    $student_row=  mysqli_num_rows($student_query);
									
										
if($fetch_sr_data=mysqli_fetch_array($student_query)){ 
            
$c_id=$fetch_sr_data[volunteer_id];
$name=$fetch_sr_data['name'];
$address=$fetch_sr_data['address'];
$phone=$fetch_sr_data['phone'];
$email=$fetch_sr_data['email'];

$degree=$fetch_sr_data['degree'];
$username=$fetch_sr_data['username'];
$password=$fetch_sr_data['password'];
									
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
	<?php require 'headeruserv.php'; ?>

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
					  <html>
<body>
<?php 
$query = "SELECT * FROM userhelp";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Address</font> </td> 
          <td> <font face="Arial">Phone</font> </td> 
          <td> <font face="Arial">Location</font> </td> 
          <td> <font face="Arial">Needs</font> </td> 
      
	   <td> <font face="Arial">Number of Person</font> </td> 
      
	   <td> <font face="Arial">Other Needs</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
        $field2name = $row["address"];
        $field3name = $row["phone"];
        $field4name = $row["location"];
        $field5name = $row["needs"]; 
  $field6name = $row["noofperson"]; 

  $field7name = $row["oneeds"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
            
<td>'.$field6name.'</td> 
            

<td>'.$field7name.'</td> 
            			</tr>';
    }
    $result->free();
} 
?>
</body>
</html>
This				</div>
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
 $degree=$_POST['degree'];

	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	$username=$_POST['username'];
	$rbg=$_POST['rbg'];
	
$updated_dtime=date('Y-m-d');
$newsid=$_POST['updated_id'];

					
  $update="update volunteer  set name='$name',address='$address',degree='$degree',email='$email',password='$password',phone='$phone',username='$username' where  volunteer_id='$newsid' ";
 $update_result=mysqli_query($conn,$update)or die(mysqli_error());
 $encoded_id=base64_encode($newsid);
$message=base64_encode('category_updated');
header("location:vprofile.php?mes=$message&$random");

 // end for submit

}// end for action 
?>
