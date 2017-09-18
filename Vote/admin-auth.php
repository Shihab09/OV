<?php
	session_start();
	
	if(!isset($_SESSION['SESS_ID']) || (trim($_SESSION['SESS_ID']) == '')) {
		header("location: administrator-index.php");
		exit();
	}
?>