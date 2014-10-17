<?php
session_start();
if(!isset($_SESSION['name']))
{
	echo "no";
}
else
{
	$con=mysql_connect("localhost","root","123");
	if(!$con)
	{
		die("error".mysql_error());
	}
	mysql_select_db("saspfuw",$con);
	$result=mysql_query("select * from rate order by id desc");
	echo mysql_result($result,0,"rate");
}
?>