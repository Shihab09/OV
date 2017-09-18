<?php
	session_start();
	
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_VOTERS']);
	header ('location: index.php');
?>