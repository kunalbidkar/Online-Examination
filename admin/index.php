<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Admin Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
<?php
include("header.php");
?>
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


<form name="form1" method="post" action="login.php" style="padding: 20px; border: 2px solid black;">
<h2 style="text-align: center;">Adminstrative Login </h2>
<img src="login.jpg" width="131" height="155">
<div class="form-group">

    <input type="text" align="center" style="width: 300px;" placeholder="Enter your username" class="form-control"  name="loginid"  id="loginid">
  </div>


    
    <div class="form-group">
    <input type="password" style="width: 300px;" placeholder="Enter your password" name="pass" class="form-control responsive" id="pass">
  </div>
<br><br><br>  
  
  <button style="text-align:center; vertical-align:middle;" type="submit" name="submit" id="submit" class="btn btn-default">Login</button>         <br><br>

  
  
 
</form>
</div>
    <div class="col-sm-4">
      
    </div>
</div>
</body>
</html>
