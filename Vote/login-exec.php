<?php
	session_start();
	
	require_once('config.php');
	
	$errmsg_arr = array();
	
	$errflag = false;
		$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	$voters = clean($_POST['voters']);
	
	if($voters != '$voters') {
		$qry = "SELECT * FROM registered WHERE voters='$voters'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'Please login your account.';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	
	$failed = '<i>Invalid Code. Please try again.</i>';
	
	$qry="SELECT * FROM registered WHERE voters='$voters'";
	$result=mysql_query($qry);
	
	if($result) {
		if(mysql_num_rows($result) == 1) {
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_VOTERS'] = $member['voters'];
			session_write_close();
			header("location: candidates.php");
			exit();
		}else {
			
			$_SESSION['FAILED'] = $failed;
			session_write_close();
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>