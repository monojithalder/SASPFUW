<?php
$just="";
$namee=$_GET['namee'];
//echo $namee;
$con=mysql_connect("localhost","root","123");
if(!$con)
{
	die("error".mysql_error());
}
mysql_select_db("saspfuw",$con);
$vowels=array('AA','I','U','RE','E','AI','O');
$flag=0;
$str;
//$str2="aa";
///$len2=strlen($str2);
$just=$namee;
$start_position=0;
$a=str_split($namee);
$len=strlen($just);
//echo "$len";
if($len >= 2)
{
//echo strtoupper($a[0].$a[1]);
	for($i=0;$i<=6;$i++)
	{
		//$frist_letter=a[0];
		//echo "for";
		if(strtoupper($a[0])==$vowels[$i])
		{
			$result1=mysql_query("select * from unicode where english='$vowels[$i]' and re='none'");
			$str=$srt.mysql_result($result1,0,"uni");
			$start_position=1;
			//echo "1";
		}
		else if(strtoupper($a[0].$a[1])==$vowels[$i])
		{
			$result2=mysql_query("select * from unicode where english='$vowels[$i]' and re='none'");
			$str=$str.mysql_result($result2,0,"uni");
			//echo mysql_result($result2,0,"uni");
			$start_position=2;
			
			//echo "2";
			
		}
	}
	$l=0;
	for($i=$start_position;$i<$len;$i++)
	{
		//echo $i;
		for($j=0;$j<=6;$j++)
		{
			///echo $i;
			if($l < $len)
			{
				//echo "$a[$l]";
				if(strtoupper($a[$l])==$vowels[$j])
				{
					$result=mysql_query("select * from unicode where english='$a[$l]' and re='is'");
					//echo $a[$l];
					$str=$str.mysql_result($result,0,"uni");
					//echo "v";
					$l++;
				}
				else if(strtoupper($a[$l].$a[$l+1])==$vowels[$j])
				{
					$k=$l+1;
					$result3=mysql_query("select * from unicode where english='$a[$l]$a[$k]' and re='is'");
					$str=$str.mysql_result($result3,0,"uni");
					$l=$l+2;
					//$i++;
				}
				//else
				//{
			}
		}
		if($l < $len)
		{
			
					$result4=mysql_query("select * from unicode where english='$a[$l]' and re='none'");
					$row=mysql_num_rows($result4);
					$o=$l+1;
					$result6=mysql_query("select * from unicode where english='$a[$l]$a[$o]' and re='none'");
					if($row < 1)
					{
						$k=$l+1;
						$word=strtoupper($a[$l].$a[$k]);
						//echo $word;
						$result5=mysql_query("select * from unicode where english='$word' and re='none'");
						//$row1=mysql_num_rows($result5);
						//echo $a[$i].$a[$k].$row1;
						$row1=mysql_num_rows($result5);
						if($row1 >0)
						{
							$str=$str.mysql_result($result5,0,"uni");
							$l=$l+2;
						}
						//$i++;
					}
					else
					{
						//$result6=mysql_query("select * from unicode where english='$a[$l]' and re='none'");
						$row2=mysql_num_rows($result6);
						if($row2 >0)
						{
							if(mysql_result($result4,0,"uni")==mysql_result($result6,0,"uni"))
							{
								$str=$str.mysql_result($result6,0,"uni");
								$l=$l+2;
							}
							else
							{
								$str=$str.mysql_result($result4,0,"uni");
							//echo "c";
								$l++;
							}
						}
						else
						{
							$str=$str.mysql_result($result4,0,"uni");
							//echo "c";
							$l++;
						}
					}
				//}
			//}
			}
			
		//$row=mysql_num_rows($result);
		//}
	}
}
//$data=utf8_encode($str);
echo $str;
?>