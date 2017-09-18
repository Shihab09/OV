<?php session_start(); ?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="images/log.png">
<title>Student Voting System</title>
</head>
<body style="background-image:url(images/ewu.jpg);background-size:100%;">
<div id="bar">
<div style="width:900px; margin:auto; padding-top:10px;">
<a href="index.php"><img src="images/ewuLogo.png" /></a><br><marquee><font color="yellow">WELCOME TO ADMINISTRATOR LOGIN PAGE FOR VIEW RESULTS AND ADD NEW CANDIDATES FOR ELECTION</font></marquee>
</div>
</div>
<div id="subbar">
</div>
<div id="content">
<?php
	if(isset($_SESSION['FAILED'])){
	echo '<div style="background-color:#ffebe8; border:1px solid #dd3c10; padding:5px; color:#000; border-radius: 0px; font-family:tahoma; font-size:12px;">';
	echo $_SESSION['FAILED'];
	unset($_SESSION['FAILED']);
	echo '</div>';
}?>
<center>
<form id="loginForm" name="loginForm" method="post" action="admin-exec.php">
<table style="margin-top:120px; margin-bottom:150px;">
<tr>
<td style="font-size:14px; font-weight:bold; color:#044476; padding-bottom:8px;" align="left">
Administrator Login
</td>
</tr>
<tr>
<td>
  <input name="admin" type="password"  placeholder="Enter Password" id="textbox" autocomplete="off" /><br />
</td>
</tr>
<tr>
<td align="right"><input type="submit" name="Submit" value="Login" id="button" /> </td>
</tr>
</table>
</form>
</center>
</div>

</body>
</html>