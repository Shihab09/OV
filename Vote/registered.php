<?php
	
  function generatePassword ($length = 15)
  {

    $password = "";
    $possible = "12346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";
    $maxlength = strlen($possible);
  
    if ($length > $maxlength) {
      $length = $maxlength;
    }
	
    $i = 0; 
      while ($i < $length) { 

      $char = substr($possible, mt_rand(0, $maxlength-1), 1);
        
      if (!strstr($password, $char)) { 
        $password .= $char;

        $i++;
      }

    }

    return $password;
  	}
	
	include_once 'config.php';

	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	$votes = generatePassword (15);
	$sql=("INSERT INTO registered (voters) VALUES ('$votes')");
	if (!mysql_query($sql,$link))
  	{
  	die('Error: ' . mysql_error());
  	}
 	header("location: administrator.php");
	mysql_close($link);
	
 ?>
 