<?php
	session_start();
	
	unset($_SESSION['SESS_ID']);
	unset($_SESSION['ADMIN']);
	header ('location: administrator-index.php');
?>