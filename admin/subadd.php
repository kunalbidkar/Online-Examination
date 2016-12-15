<?php
session_start();
error_reporting(0);
require("../database.php");
include("header.php");

?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php
error_reporting(0);
extract($_POST);

echo "<br>";
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2><div  class=head1>You have not logged in! <br> Please login to access this page</div></h2>";
	echo "<a href=index.php><h3 align=center>Click here to login</h3></a>";
	exit();
}

if($submit=='submit' || strlen($subname)>0 )
{
$rs=mysql_query("select * from mst_subject where sub_name='$subname'");
if (mysql_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Subject is Already Exists</div>";
	exit;
}
mysql_query("insert into mst_subject(sub_name) values ('$subname')",$cn) or die(mysql_error());
echo "<p align=center>Subject  <b> \"$subname \"</b> Added Successfully.</p>";
$submit="";
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Subject Name");
document.form1.subname.focus();
return false;
}
return true;
}
</script>


<title>Add Subject</title>



 <div class="container">
  <div class="row">
    <div class="col-sm-4">
      
    </div>

<div class="col-sm-4" style="background-color: #b2b2ff; text-align: center; padding:20px; border:2px solid black;  margin-left:320px; margin-top: 124px; width:50%">

<form name="form1" method="post" onSubmit="return check();">
  
  
  <h2 style="padding: 10px; border: 3px solid blue; text-align: center; background-color: #4c4cff;">Enter the name of the subject:</h2><br>
  <div class="form-group">

    <input type="text" align="center"  placeholder="Enter subject name" name ="subname" class="form-control" >
  </div>
        <br><br>
<button style="text-align:center; vertical-align:middle;" type="submit" name="submit"  class="btn btn-default">Add!</button>         <br><br>
   
    </form>      
    </div>
<div class="col-sm-4">
      
    </div>
</div>
