<?php
session_start();
if(!isset($_SESSION['name']))
{
	echo "<script>window.location='index';</script>";
}
require_once('dbconnect.php');
$start=$_GET['start'];
$end=$_GET['end'];
$month=$_GET['month'];
$year=$_GET['year'];
$result=mysql_query("select * from acdetail");
$row=mysql_num_rows($result);
?>
<html>
<head>
<title>Printdata</title>
</head>
<body>
<table align="center" style="border:thin solid;" cellspacing="4">
    <tr>
    	<td style="border:thin solid;"><b>Account_No</b></td>
        <td style="border:thin solid;"><b>Book_No</b></td>
        <td style="border:thin solid;"><b>Serial_No</b></td>
        <td style="border:thin solid;"><b>Reccive_Date</b></td>
        <td style="border:thin solid;"><b>Amount</b></td>
        <td style="border:thin solid;"><b>total</b></td>
    </tr>
    <?php
try{
	for($i=0;$i<$row;$i++)
	{
		$dt=mysql_result($result,$i,"rc_dt");
		$ac_no=mysql_result($result,$i,"ac_no");
		$se_no=mysql_result($result,$i,"serial_no");
		$bo_no=mysql_result($result,$i,"book_no");
		$amount=mysql_result($result,$i,"amount");
		$test=explode("-",$dt);
		//echo "$test[1]";
		if($test[0] == $year)
		{
			if($test[1]==$month)
			{
				//$am[$l]=$amount;
				//$l++;
				$total +=$amount;
				$k++;
			/*	echo "<script>alert($am[0]);</script>";
				$worksheet->SetCellValueByColumnAndRow(0, $j, $ac_no);
				$worksheet->SetCellValueByColumnAndRow(1, $j, $bo_no);
				$worksheet->SetCellValueByColumnAndRow(2, $j, $se_no);
				$worksheet->SetCellValueByColumnAndRow(3, $j, $dt);
				$worksheet->SetCellValueByColumnAndRow(4, $j, $amount);
				//$worksheet->SetCellValueByColumnAndRow(5, 1, 'Total');
				$j++;*/
				?>
                	<tr>
                        <td style="border:thin solid;"><b><?php echo $ac_no; ?></b></td>
                        <td style="border:thin solid;"><b><?php echo $bo_no; ?></b></td>
                        <td style="border:thin solid;"><b><?php echo $se_no; ?></b></td>
                        <td style="border:thin solid;"><b><?php echo $dt; ?></b></td>
                        <td style="border:thin solid;"><b><?php echo $amount; ?></b></td>
   				   </tr>
                <?php
	
				
			}
		}
	}
	
/*	$worksheet->SetCellValueByColumnAndRow(5, $j, $total);
	$writer = new PHPExcel_Writer_Excel5($spreadsheet);
	$writer->save('hello-world.xls');
	//header( "Content-Type: application/vnd.ms-excel" );
	//header( "Content-disposition: attachment; filename=hello-world.xls" );<br />
	$file = 'hello-world.xls';
	header('Content-Description: File Transfer');
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
	exit;*/
	?>
	<tr>
    	<td style="border:thin solid;"><b></b></td>
        <td style="border:thin solid;"><b></b></td>
        <td style="border:thin solid;"><b></b></td>
        <td style="border:thin solid;"><b></b></td>
        <td style="border:thin solid;"><b></b></td>
        <td style="border:thin solid;"><b><?php echo $total; ?></b></td>
    </tr>
    </table>
    <?php
}
catch(Exception $e)
{
	echo $e->getMessage();
}
/*$writer = new PHPExcel_Writer_Excel5($spreadsheet);
	$writer->save('hello-world.xls');
	header( "Content-disposition: attachment; filename=hello-world.xls" );*/

?>
</body>
</html>