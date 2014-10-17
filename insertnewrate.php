<?php
$newrate=$_GET['newrate'];
$dt=$_GET['dt'];
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("saspfuw",$con);
mysql_query("insert into rate(rate,dt) values ('$newrate','$dt')");
echo "inserted";
?>