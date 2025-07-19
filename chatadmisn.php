<?php
@ob_start();
include("connection.php");
include("maindbv.php");
session_start();

?>
									<?php
	
	$uquery=mysqli_query($conn,"select * from volunteer where volunteer_id='".$_SESSION['SESS_MEMBER_IDv']."'");
	$urow=mysqli_fetch_assoc($uquery);
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
					 
<!DOCTYPE html>
<html>
<head>
<title>Simple Chat using PHP/MySQLi, Ajax/JQuery</title>
</head>
<body>
<div>
	<h4>Welcome, <?php echo $_SESSION['SESS_USER_NAME'];?> </h4>
	<?php
		$query=mysqli_query($conn,"select * from `chat_roomv`");
		while($row=mysqli_fetch_array($query)){
			?>
				<div>
				Chat Room Name: <?php echo $row['chat_room_name']; ?><br><br>
				</div>
				<div id="result" style="overflow-y:scroll; height:300px;"></div>
				<form>
					<input type="text" id="msg">
					<input type="hidden" value="<?php echo $row['chat_room_id']; ?>" id="id">
					<button type="button" id="send_msg">Send</button>
				</form>
			<?php
		}
	?>
</div>

<script src = "jquery-3.1.1.js"></script>	
<script type = "text/javascript">

	$(document).ready(function(){
	displayResult();
	/* Send Message	*/	
		
		$('#send_msg').on('click', function(){
			if($('#msg').val() == ""){
				alert('Please write message first');
			}else{
				$msg = $('#msg').val();
				$id = $('#id').val();
				$.ajax({
					type: "POST",
					url: "send_messagev.php",
					data: {
						msg: $msg,
						id: $id,
					},
					success: function(){
						displayResult();
					}
				});
			}	
		});
	/*****	*****/
	});
	
	function displayResult(){
		$id = $('#id').val();
		$.ajax({
			url: 'send_messagev.php',
			type: 'POST',
			async: false,
			data:{
				id: $id,
				res: 1,
			},
			success: function(response){
				$('#result').html(response);
			}
		});
	}
	
</script>
</body>
</html>
					</div>
					<a href="userhelp.php" class="text-center">Cancel</a><br>
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>
</html>
