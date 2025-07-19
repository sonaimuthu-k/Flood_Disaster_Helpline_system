<?php
@ob_start();
include("connection.php");
include("maindbad.php");
session_start();

?><?php 
                                    $student_query=mysqli_query($conn,"select * from admin where admin_id='$_SESSION[SESS_MEMBER_IDad]'")or die(mysqli_error());
                                    $student_row=  mysqli_num_rows($student_query);
									
										
if($fetch_sr_data=mysqli_fetch_array($student_query)){ 
            
$c_id=$fetch_sr_data[admin_id];
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
<?php $title="Flood"; ?>
<?php require 'head.php';?>
<style>
    body{
    background: url(jastimage/bb12.jpg) no-repeat center;
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
					<div class="card-body">
					  <html>
<body>
<?php 


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Chat one User Name</font> </td> 
          
          <td> <font face="Arial">Message</font> </td> 
             </tr>';
			 
			 $query = "SELECT * FROM chat ";
$rs=mysqli_query($conn,$query);


    while($row=mysqli_fetch_array($rs)) {
        $chat_room_id=$row["chat_room_id"];
		
        $useridm=$row['userid'];
		
		
		
		$roomchat=$row['chat_room_id'];

	
        $chatmsg=$row["chat_msg"];
        
		$sqlm="select * from user where user_id='$useridm'";
		$rsm=mysqli_query($conn,$sqlm);
		if($fetch_srm=mysqli_fetch_array($rsm))
		{
			$nameb=$fetch_srm['name'];
			
		}
	
		
		$sqlmd="select * from user where user_id='$roomchat'";
		$rsmd=mysqli_query($conn,$sqlmd);
		if($fetch_srms=mysqli_fetch_array($rsmd))
		{
			$namechat=$fetch_srms['name'];
			
		}

        echo '<tr> 
                  <td>'.$nameb.'</td> 
                  
                  <td>'.$chatmsg.'</td> 
                 
            			</tr>';
    }
    

?>
</body>
</html>
	</div>
				
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>
</html>
