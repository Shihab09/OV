<?php
	require_once('admin-auth.php');
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="images/log.png">
<title>Student Voting System</title>
<style>
#tbl
{
font-family:Tahoma, Geneva, sans-serif;
border-collapse:collapse;
margin-bottom:20px;
width:885px;
}
#tbl td, #tbl th
{
font-size:11px;
border:1px solid #094f4b;
padding:3px 7px 2px 7px;
background-color:#ffffff;
color:#4b4b4b;
font-family:Tahoma, Geneva, sans-serif;
}
#tbl th
{
font-size:14px;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#116763;
color:#ffffff;
}
</style>
</head>
<body style="background-color:#9cb6e5">
<div id="bar">

<div style="width:900px; margin:auto; padding-top:8px;">
<img src="images/ewuLogo.png" />
</div>
</div>
<div id="subbar">
<table style="padding-top:80px; width:890px; margin:auto; text-align:right;">
<tr>
<td id="bold" style="color:#FFF; padding-left:10px;">
<h3><a href="results.php">Election Results</a>  | <a href="addcand.php">Add Election Candidates</a> | <a href="admin-logout.php">Logout</a></h3>
</td>
</tr>

</table>
</div>
<div id="content">
<center><h1><ul><li>For view results</li>
                 <li>For add new candidates</li>
               <li>For manage the candidates</li>
                  <li>For elections process</li>
                  </ul></h1>
<div id="scroll">
<table style="margin-top:1px;">


</div>
</center>
<div id="footer">
EWU ONLINE VOTING[by SHIHAB$PREOM]
</div>
</body>
</html>