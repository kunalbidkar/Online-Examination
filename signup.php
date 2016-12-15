<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Register Here</title>
<?php 
error_reporting(0);
?>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<link href="quiz.css" rel="stylesheet" type="text/css">
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
error_reporting(0);
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
    <br><br><br><br>
<form name="form1" method="post" action="signupuser.php" onSubmit="return check();" style="padding: 10px; border: 2px solid black;">
<h1 style="text-align: center;">Register Here!</h1>
<h3 style="text-align: center; padding-bottom: 30px;">Please enter your credentials here...</h3>
         
 <div class="form-group">

    <input type="text" align="center" style="width: 300px;" placeholder="Enter your username  Ex: kunalbidkar94" name ="lid" class="form-control" id="loginid2">
  </div>
  <div class="form-group">
    <input type="password" style="width: 300px;" placeholder="Enter your password" name="pass" class="form-control responsive" id="pass2">
  </div>
  <div class="form-group">
    <input type="password" style="width: 300px;" placeholder="Enter your password again" name="cpass" class="form-control responsive" id="pass2">
  </div>
   <div class="form-group">

    <input type="text" align="center" style="width: 300px;" placeholder="Enter your name" name ="name" class="form-control" id="loginid2">
  </div>
       <div class="form-group">

    <input type="text" align="center" style="width: 300px;" placeholder="Enter your address" name ="address" class="form-control" id="loginid2">
  </div>
  
 <div class="form-group">

    <input type="text" align="center" style="width: 300px;" placeholder="Enter your city" name ="city" class="form-control" id="loginid2">
  </div>
   <div class="form-group">

    <input type="text" align="center" style="width: 300px;" placeholder="Enter your phone number" name ="phone" class="form-control" id="loginid2">
  </div>
   <div class="form-group">

    <input type="text" align="center" style="width: 300px;" placeholder="Enter your email address" name ="email" class="form-control" id="loginid2">
  </div>





      <br><br>
      
  <button style="text-align:center; vertical-align:middle; width: 100px;" type="submit" name="Submit" id="submit" class="btn btn-default">Register Me!</button>         <br><br>
 
  </form>

    </div>
    <div class="col-sm-4">
      
    </div>
  </div>
</div>
</div>
 <p>&nbsp; </p>
</body>
</html>
