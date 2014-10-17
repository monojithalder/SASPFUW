<?php
require_once('dbconnect.php');
$date=$_GET['date'];
$se=$_GET['se'];
$bo=$_GET['bo'];
$ac_no=$_GET['ac_no'];
$result=mysql_query("select * from rate");
try
{
	$ammount=mysql_result($result,0,'rate');
	mysql_query("insert into acdetail(ac_no,book_no,serial_no,rc_dt,amount) values ('$ac_no','$bo','$se','$date','$ammount')");
	echo "Data saved";

}
catch(Exception $e)
{
	echo $e->getMessage();
}
?>