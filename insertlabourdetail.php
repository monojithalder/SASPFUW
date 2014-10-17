<?php
session_start();
$acno=$_GET['txtac'];
$namee=$_GET['txteng'];
$nameb=$_GET['hid'];
//echo $namee.$nameb;
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("saspfuw",$con);
mysql_query("insert into labour_detail(ac_no,name_in_bengali,name_in_english) values ('$acno','$nameb','$namee')");
echo "<script>alert('Inserted');window.location='LABOUR_DETAILS.html'</script>";
?>