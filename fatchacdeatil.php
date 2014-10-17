<?php
$ac_no=$_GET['acno'];
$year=$_GET['year'];
//echo "$ac_no";
$name;
$bojan;
$befeb;
$bomar;
$boap;
$bomay;
$bojune;
$bojuly;
$boaug;
$boset;
$booct;
$bonov;
$bodec;

$sejan;
$sefeb;
$semar;
$seap;
$semay;
$sejune;
$sejuly;
$seaug;
$seset;
$seoct;
$senov;
$sedec;

$dtjan;
$dtfeb;
$dtmar;
$dtap;
$dtmay;
$dtjune;
$dtjuly;
$dtaug;
$dtset;
$dtoct;
$dtnov;
$dtdec;

$amjan;
$amfeb;
$ammar;
$amap;
$ammay;
$amjune;
$amjuly;
$amaug;
$amset;
$amoct;
$amnov;
$amdec;

$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("saspfuw",$con);
$result1=mysql_query("select * from labour_detail where ac_no='$ac_no'");
$row1=mysql_num_rows($result1);
if($row1 > 0)
{
	$name=mysql_result($result1,0,"name_in_english");
	$result=mysql_query("select * from acdetail where ac_no='$ac_no'");
	$row=mysql_num_rows($result);
	for($i=0;$i<$row;$i++)
	{
		$dt=mysql_result($result,$i,"rc_dt");
		$test=explode("-",$dt);
		if($test[0]==$year)
		{
			if($test[1]==1)
			{
				$bojan=mysql_result($result,$i,"book_no");
				$sejan=mysql_result($result,$i,"serial_no");
				$dtjan=mysql_result($result,$i,"rc_dt");
				$amjan=mysql_result($result,$i,"amount");
			}
			else if($test[1]==2)
			{
				$bofeb=mysql_result($result,$i,"book_no");
				$sefeb=mysql_result($result,$i,"serial_no");
				$dtfeb=mysql_result($result,$i,"rc_dt");
				$amfeb=mysql_result($result,$i,"amount");
			}
			else if($test[1]==3)
			{
				$bomar=mysql_result($result,$i,"book_no");
				$semar=mysql_result($result,$i,"serial_no");
				$dtmar=mysql_result($result,$i,"rc_dt");
				$ammar=mysql_result($result,$i,"amount");
			}
			else if($test[1]==4)
			{
				$boap=mysql_result($result,$i,"book_no");
				$seap=mysql_result($result,$i,"serial_no");
				$dtap=mysql_result($result,$i,"rc_dt");
				$amap=mysql_result($result,$i,"amount");
			}
			else if($test[1]==5)
			{
				$bomay=mysql_result($result,$i,"book_no");
				$semay=mysql_result($result,$i,"serial_no");
				$dtmay=mysql_result($result,$i,"rc_dt");
				$ammay=mysql_result($result,$i,"amount");
			}
			else if($test[1]==6)
			{
				$bojune=mysql_result($result,$i,"book_no");
				$seune=mysql_result($result,$i,"serial_no");
				$dtjune=mysql_result($result,$i,"rc_dt");
				$amjune=mysql_result($result,$i,"amount");
			}
			else if($test[1]==7)
			{
				$bojuly=mysql_result($result,$i,"book_no");
				$sejuly=mysql_result($result,$i,"serial_no");
				$dtjuly=mysql_result($result,$i,"rc_dt");
				$amjuly=mysql_result($result,$i,"amount");
			}
			else if($test[1]==8)
			{
				$boaug=mysql_result($result,$i,"book_no");
				$seaug=mysql_result($result,$i,"serial_no");
				$dtaug=mysql_result($result,$i,"rc_dt");
				$amaug=mysql_result($result,$i,"amount");
			}
			else if($test[1]==9)
			{
				$boset=mysql_result($result,$i,"book_no");
				$seset=mysql_result($result,$i,"serial_no");
				$dtset=mysql_result($result,$i,"rc_dt");
				$amset=mysql_result($result,$i,"amount");
			}
			else if($test[1]==10)
			{
				$booct=mysql_result($result,$i,"book_no");
				$seoct=mysql_result($result,$i,"serial_no");
				$dtoct=mysql_result($result,$i,"rc_dt");
				$amoct=mysql_result($result,$i,"amount");
			}
			else if($test[1]==11)
			{
				$bonov=mysql_result($result,$i,"book_no");
				$senov=mysql_result($result,$i,"serial_no");
				$dtnov=mysql_result($result,$i,"rc_dt");
				$amnov=mysql_result($result,$i,"amount");
			}
			else if($test[1]==12)
			{
				$bodec=mysql_result($result,$i,"book_no");
				$sedec=mysql_result($result,$i,"serial_no");
				$dtdec=mysql_result($result,$i,"rc_dt");
				$amdec=mysql_result($result,$i,"amount");
			}
		}
	}
	echo "{'ac_no' : '$ac_no','name' : '$name','bojan' : '$bojan','sejan' : '$sejan','dtjan' : '$dtjan','amjan' : '$amjan','bofeb' : '$bofeb','sefeb' : '$sefeb','dtfeb' : '$dtfeb','amfeb' : '$amfeb','bomar' : '$bomar','semar' : '$semar','dtmar' : '$dtmar','ammar' : '$ammar','boap' : '$boap','seap' : '$seap','dtap' : '$dtap','amap' : '$amap','bomay' : '$bomay','semay' : '$semay','dtmay' : '$dtmay','ammay' : '$ammay','bojune' : '$bojune','sejune' : '$sejune','dtjune' : '$dtjune','amjune' : '$amjune','bojuly' : '$bojuly','sejuly' : '$sejuly','dtjuly' : '$dtjuly','amjuly' : '$amjuly','boaug' : '$boaug','seaug' : '$seaug','dtaug' : '$dtaug','amaug' : '$amaug','boset' : '$boset','seset' : '$seset','dtset' : '$dtset','amset' : '$amset','booct' : '$booct','seoct' : '$seoct','dtoct' : '$dtoct','amoct' : '$amoct','bodec' : '$bodec','sedec' : '$sedec','dtdec' : '$dtdec','amdec' : '$amdec'}";
}

//echo "{'roll' : '101','roll' : '102'}";
//echo "{'roll' : '102'}";

?>