<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Admin Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
extract($_POST);
if(isset($submit))
{
	include("../database.php");
	$rs=mysql_query("select * from mst_admin where loginid='$loginid' and pass='$pass'",$cn) or die(mysql_error());
	if(mysql_num_rows($rs)<1)
	{
		echo "<br><br><br><br><div class=head1> Invalid User Name or Password<div>";
		exit;
		
	}
	$_SESSION['alogin']="true";
	
}
else if(!isset($_SESSION[alogin]))
{
	echo "<br><br><br><br><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
?>

<p class="head1">Admin Panel</p>
<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left; background-color: #C5E3BF;">
<div style="padding-top:5%">
<p style="padding: 10px; border: 1px solid black; text-align: center; margin-left: auto; margin-right: auto; width: 50%; background-color: #4AC948"><a href="subadd.php">Click here to enter name of the subject </a></p><br>
<p style="padding: 10px; border: 1px solid black; text-align: center; margin-left: auto; margin-right: auto; width: 50%; background-color: #4AC948;"><a href="testadd.php">Click here to add a test</a></p><br>
<p style="padding: 10px; border: 1px solid black; text-align: center; margin-left: auto; margin-right: auto; width: 50%; background-color: #4AC948;"><a href="questionadd.php">Click here to add questions </a></p><br>
<p align="center" class="head1">&nbsp;</p>
</div>
</div>
</body>
</html>
