<?php
session_start();
$userid=$_GET['userid'];
$password=$_GET['password'];
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("saspfuw",$con);
$result=mysql_query("select * from login");
$row=mysql_num_rows($result);
$flag=0;
for($i=0;$i<$row;$i++)
{
	$user=mysql_result($result,$i,"user_id");
	$pass=mysql_result($result,$i,"password");
	if($user==$userid && $pass==$password)
	{
		$flag++;	
	}
}
if($flag == 1)
{
	$_SESSION['name']=$userid;
	$_SESSION['start_id']=0;
	echo "yes";
	
}
else
{
	echo "no";
}
?>