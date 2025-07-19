<?php

error_reporting(0);
@ob_start();
 @session_start(); 
	
	if(!isset($_SESSION['SESS_MEMBER_IDv']) || (trim($_SESSION['SESS_MEMBER_IDv']) == '')) {
		header("location: loginv.php");
		exit();
	}
	
	?>
	