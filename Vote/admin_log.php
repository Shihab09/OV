<?php
	include('conn.php');
	session_start();
	if(isset($_SESSION['admin_email']))
	{
		header('location:admin_home.php');
	}
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="SHORTCUT ICON" href="images/log.png">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
<style type="text/css">
	.button
	{
		margin-right:50px;
		height:30px;
		width:100px;
		background-color:#0000FF;
		color:#999999;
		border:#999999 solid 2px;
		border-radius:10px;
	}
	</style>

(function($) {
	var map=new Array();
	$.Watermark = {
		ShowAll:function(){
			for (var i=0;i<map.length;i++){
				if(map[i].obj.val()==""){
					map[i].obj.val(map[i].text);
					map[i].obj.css("color",map[i].WatermarkColor);
				}else{
				    map[i].obj.css("color",map[i].DefaultColor);
				}
			}
		},
		HideAll:function(){
			for (var i=0;i<map.length;i++){
				if(map[i].obj.val()==map[i].text)
					map[i].obj.val("");
			}
		}
	}

	$.fn.Watermark = function(text,color) {
		if(!color)
			color="#FF0000";
		return this.each(
			function(){
				var input=$(this);
				var defaultColor=input.css("color");
				map[map.length]={text:text,obj:input,DefaultColor:defaultColor,WatermarkColor:color};
				function clearMessage(){
					if(input.val()==text)
						input.val("");
					input.css("color",defaultColor);
				}

				function insertMessage(){
					if(input.val().length==0 || input.val()==text){
						input.val(text);
						input.css("color",color);
					}else
						input.css("color",defaultColor);
				}

				input.focus(clearMessage);
				input.blur(insertMessage);
				input.change(insertMessage);

				insertMessage();
			}
		);
	};
})(jQuery);
</script>
<script type="text/javascript">
jQuery(function($){
   $("#email").Watermark("Enter Email");
    $("#psw").Watermark("Enter Password");
   });
</script>

<title>Student Voting System</title>
</head>
<body style="background-image:url(images/ewu.jpg)">
<div id="bar">
<div style="width:900px; margin:auto; padding-top:10px;">
<a href="administrator-index.php"><img src="images/ewuLogo.png" /></a><br><marquee scrolldelay="1" scrollamount="3"><font color="#cecb08">PLEASE VOTE FOR BETTER CANDIDATES IN YOUR VERSITY</font></marquee>
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
<center><br><br>
<form name="frn_login" action="<?php  $_SERVER['PHP_SELF'];?>" method="post">
		<table border="1" align="center" rules="groups" width="400" bgcolor="grey">
			<tr bgcolor="#bcc6d6">
				<th colspan="2" style="color:black">Admin Login</th>
			</tr>
			<tr>
				<td colspan="2"><?php echo $_SESSION['msg'];?></td>
			</tr>
			<tr>
				<td><b><u>E</u></b>mail</td>
				<td><input type="text" name="admin_email" /></td>
			</tr>
			<tr>
				<td><b><u>P</u></b>assword</td>
				<td><input type="password" name="psw" /></td>
			</tr>

			<tr>
				<td colspan="2" align="right"><input type="submit" name="SUBMIT" value="Login" class="button" /><input type="button" name="CANCEL" value="Cancel" class="button" onclick="window.location='index.php';" /></td>
			</tr>
		</table>
	</form>
</center>
</div>

</body>
</html>
<?php

	if(isset($_POST['SUBMIT']) && $_POST['SUBMIT']=='Login')
	{
		$admin_email=$_POST['admin_email'];
		$psw=$_POST['psw'];

		$sel="SELECT * FROM admin_login WHERE admin_email='$admin_email'";
		$res=mysql_query($sel) or mysql_error();
		$fet=mysql_fetch_array($res);
		$row=mysql_num_rows($res);
		if($row>0)
		{
			if($psw==$fet['psw'])
			{
				$_SESSION['admin_email']=$admin_email;

				echo "<script>alert('Logged In');
					window.location='admin_home.php'
				</script>";		
			}
			else
			{	
				echo "<script>alert('Password is Incorrect');
					window.location='admin_log.php'
				</script>";
			}
		}
		else
		{
			echo "<script>alert('Access Denied');
				window.location='admin_log.php'
			</script>";
		}
		
	}
?>