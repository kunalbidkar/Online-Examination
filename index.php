<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Online Examination</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<style>
        div.wrapper {
            width: 300px;
            height:300px;
            border:5px solid black;
        }

        input[type="text"] {
             display: block;
             margin : 0 auto;
             padding: 20px;

        }
        input[type="password"] {
             display: block;
             margin : 0 auto;
             padding: 20px;
}

button{
    height:50px; 
    width:70px; 
    margin: -20px -50px; 
    position:relative;
    top:50%; 
    left:50%;
    padding: 20px;

}
    </style>


    <div class="container">
  <div class="row">
    <div class="col-sm-4">
      
    </div>
    <div class="col-sm-4">
    <br><br><br><br>
<form name="form1" method="post" action=""  style="padding: 20px; border: 2px solid black; margin-right:auto; margin-left: auto;">
<h1 style="text-align: center;">Login Here!</h1>
<h3 style="text-align: center; padding-bottom: 30px;">Please enter your login credentials here...</h3>
         
 <div class="form-group">

    <input type="text" align="center" style="width: 300px;" placeholder="Enter your email address" name ="loginid" class="form-control" id="loginid2">
  </div>
  <div class="form-group">
    <input type="password" style="width: 300px;" placeholder="Enter your password" name="pass" class="form-control responsive" id="pass2">
  </div>
      
      <br><br>
      
  <button onclick="window.location='http://onlineexam.pe.hu/success.php';" style="text-align:center; vertical-align:middle;" type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>         <br><br>
  <div align="center"><span class="style4">New User ? <a href="signup.php">Sign up Here</a></span></div><br>
<div style="text-align: center; background-color: #b3b300"><a href="http://onlineexam.pe.hu/admin/index.php">Admin Login</a></div>
  </form>

    </div>
    <div class="col-sm-4">
      
    </div>
  </div>
</div>
</div>
</body>
</html>
<?php
include("header.php");

include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
header("Location:success.php");

}


?>