 <?php
	include('conn.php');
	session_start();

?>
<!DOCTYPE html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="WOW Slider, Thumbnail Slider, Carousel Javascript" />
	<meta name="description" content="WOWSlider created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow" />
	<!-- Start WOWSlider.com HEAD section -->
	<script type="text/javascript" src="engine1/jquery.js"></script>


<title>EWU Voting System</title>
</head>
<body style="background-color:#2c323d">
<center><h1>East West University<br>Voting System</h1></center>

<div id="subbar">
</div>
<div id="content">
<center>
<?php
	if(isset($_SESSION['FAILED'])){
	echo '<div style="background-color:#ffebe8; border:1px solid #dd3c10; padding:5px; color:#000; border-radius: 0px; font-family:tahoma; font-size:12px;">';
	echo $_SESSION['FAILED'];
	unset($_SESSION['FAILED']);
	echo '</div>';
}?>
<br>
<h3 align="center"><a href="admin_log.php"><font color="black">Admin Control</font></a></h3>
 <h3 align="center"><a href="administrator.php"><font color="black">Admin Panel</font></a></h3>


	<form name="frn_login" action="<?php  $_SERVER['PHP_SELF'];?>" method="post">
		<table border="1" align="center" rules="groups" width="400" bgcolor="grey">
			<tr bgcolor="#000000">
				<th colspan="2" style="color:#CCCCCC">Student Login Form</th>
			</tr>
			<tr>
				<td colspan="2"><?php echo $_SESSION['msg'];?></td>
			</tr>
			<tr>
				<td><b><u>I</u></b>DNo</td>
				<td><input type="text" name="email" id="email" /></td>
			</tr>
			<tr>
				<td><b><u>P</u></b>assword</td>
				<td><input type="password" name="psw" id="psw" /></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><p>Not Registered yet?<a href="registration.php"><font color="green">Register Now!!!</font></a></p></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" name="SUBMIT" value="Login" /></td>
			</tr>
		</table>
	</form>
	<br>
	<font style='font-family:Arial' size='2' color='red' > <b>&nbsp<ul><li>Forget Password and</li><li> Activate Your Account </li><li>  So ........Please Contact Administrator </li> </ul>&nbsp</b></font>

</center>

</div>

</body>
</html>
<?php

	if(isset($_POST['SUBMIT']) && $_POST['SUBMIT']=='Login')
	{
		$email=$_POST['email'];
		$psw=$_POST['psw'];

		$sel="SELECT * FROM login WHERE email='$email'";
		$res=mysql_query($sel) or mysql_error();
		$fet=mysql_fetch_array($res);
		$row=mysql_num_rows($res);
		if($row>0)
		{
			if($psw==$fet['psw'])
			{
				if($fet['status'] == 'Active')
				{

					$_SESSION['email']=$email;
					echo "<script>alert('Logged In');
					window.location='home.php'
					</script>";
				}
				else
				{
					echo "<script>alert('Your Account Is Not Activated');
					window.location='index.php'
					</script>";
				}
			}
			else
			{
				echo "<script>alert('Password is Incorrect');
					window.location='index.php'
				</script>";
			}
		}
		else
		{
			echo "<script>alert('You are not Registered');
				window.location='index.php'
			</script>";
		}

	}
?>