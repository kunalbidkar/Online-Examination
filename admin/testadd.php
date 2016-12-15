<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2>You are not Logged On Please Login to Access this Page</h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php
require("../database.php");

include("header.php");


echo "<br><h2><div  class=head1>Add Test</div></h2>";
if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
extract($_POST);
mysql_query("insert into mst_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')",$cn) or die(mysql_error());
echo "<p align=center>Test <b>\"$testname\"</b> Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Please enter the test name");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Please Enter the total number of questions");
document.form1.totque.value;
return false;
}
return true;
}
</script>
<form name="form1" method="post" onSubmit="return check();">
  
      <div align="center"><strong>Enter the subject category:  </strong></div><br>
      
      <select name="subid" style="margin-left: 599px; height: 32px; padding: 8px;"><br>
<?php
$rs=mysql_query("Select * from mst_subject order by  sub_name",$cn);
	  while($row=mysql_fetch_array($rs))
{
if($row[0]==$subid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?>
      </select>
        <br><br>
   <div align="center"><strong> Enter the test name </strong></div><br>
        <td>&nbsp;</td>
	  <input name="testname" type="text" style="text-align: center; margin-left: 590px; padding: 8px; height: 30px;" id="testname"><br><br>
    <div align="center"><strong>Enter total number of questions </strong></div><br>
      
      <input name="totque" type="text" id="totque" style="text-align: center; margin-left: 599px; padding: 8px; height: 30px;"><br><br>
    <input type="submit" name="submit" value="Add" style="text-align: center; margin-left: 669px; padding: 8px; height: 35px; width: 50px;">
    
</form>

