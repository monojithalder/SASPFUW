<?php
$month=$_GET['month'];
$year=$_GET['year'];
require_once("dbconnect.php");
$result=mysql_query("select * from acdetail");
$row=mysql_num_rows($result);
for($i=0;$i<$row;$i++)
	{
		$dt=mysql_result($result,$i,"rc_dt");
		$test=explode("-",$dt);
		//echo "$test[1]";
		if($test[0] == $year)
		{
			if($test[1]==$month)
			{
				$j++;
			}
		}
	}
	echo $j;
?>