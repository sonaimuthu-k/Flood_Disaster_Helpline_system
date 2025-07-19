<?php

error_reporting(0);
@ob_start();
 @session_start(); 
	
	if(!isset($_SESSION['SESS_MEMBER_IDad']) || (trim($_SESSION['SESS_MEMBER_IDad']) == '')) {
		header("location: loginadmin.php");
		exit();
	}
	
	?>
	