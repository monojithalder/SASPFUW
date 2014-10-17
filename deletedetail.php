<?php
$acno=$_GET['acno'];
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("saspfuw",$con);
mysql_query("delete from labour_detail where ac_no='$acno'");
echo "Delete Successfull";
?>
