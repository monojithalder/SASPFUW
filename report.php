<meta content="text/html; charset=windows-1252" http-equiv="Content-Type" />
<title>SASPFUW Online</title>
<link rel="stylesheet" type="text/css" href="css/Style.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<link rel="stylesheet" type="text/css" href="css/Menubig.css" />
<link rel="stylesheet" type="text/css" href="css/Menusmall.css" />
<link rel="stylesheet" type="text/css" href="themes/1/js-image-slider.css" />
<script type="text/javascript" src="themes/1/js-image-slider.js"></script>

<script type="text/javascript" src="css/modernizr-1.6.min.js"></script>

<script src="jquery.min.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" src="java.js"></script>

</head>

<body>

<div id="bodycontener">
	<div id="contener">
		<div id="header">
			<div id="headerleft">
								
						<div class="Logo"><img src="images/05.jpg" alt="" height="90" width="198"/></div>
						<!--<div id="logoname"><p><img src="images/Titlelogo.png" width="250" height="50"/></p></div>-->
			</div>
			
			<div id="headerright">
		
				<div id="menu">
						
				</div>
				
				
				<div id="contuctheder">
				<p><span style="color:yellow">WELCOME &nbsp &nbsp</span><span style="color:#FFFFFF">ADMIN</span></p>
				
				</div>
				
				<div class="clear"></div>
					
				
			</div>
		</div>
		<div class="clear"></div>
		
		<div id="menubig">
				<div id='cssmenu'>
							<ul>
							   <li class='active'><a href='Admin.html'><span>Home</span></a></li>
							   <li><a href='LABOUR_DETAILS.html'><span>LABOUR DETAILS</span></a></li>
							   <li><a href='CHANGE_RATE_PLAN.html'><span>CHANGE OF RATE PLAN</span></a></li>
							   <li><a href='AC_DETAILS.html'><span>AC DETAILS</span></a></li>
							   <li><a href='Report.html'><span>REPORT / NIRDESH 4</span></a></li>
							   <li><a href='CHANGE_PASSWORD.html'><span>CHANGE PASSWORD</span></a></li>
							   <li class='last'><a href='index.html'><span style="color:yellow">LOGOUT</span></a></li>
							</ul>
							</div>

							

		</div>
		
		<div class="clear"></div>
		<div id="allcontenar">	
        <div id="Labourdet">
<?php
//echo 'Account_No' . "\t" . 'Book_No' . "\t" . 'Serial_No' . "\t". 'Reccive_Date' . "\t" . 'Amount' . "\t" . 'total'. "\n";

session_start();
if(!isset($_SESSION['name']))
{
	echo "<script>window.location='index';</script>";
}
$month=$_POST['month'];
$year=$_POST['year'];
$txtfirst=$_POST['txtfirst'];
$txtnext=$_POST['txtnext'];
require_once('dbconnect.php');
/*require_once 'PHPExcel.php';
require_once 'PHPExcel/Writer/Excel5.php';
$spreadsheet = new PHPExcel();
$spreadsheet->setActiveSheetIndex(0);
$worksheet = $spreadsheet->getActiveSheet();
$worksheet->SetCellValueByColumnAndRow(0, 1, 'Ac no');
$worksheet->SetCellValueByColumnAndRow(1, 1, 'Book no');
$worksheet->SetCellValueByColumnAndRow(2, 1, 'Serial no');
$worksheet->SetCellValueByColumnAndRow(3, 1, 'Reccive date');
$worksheet->SetCellValueByColumnAndRow(4, 1, 'Amount');
$worksheet->SetCellValueByColumnAndRow(5, 1, 'Total');*/
$result=mysql_query("select * from acdetail");
$row=mysql_num_rows($result);
$j=2;
$k=0;
$l=0;
//echo $row;
?>
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
    	<td style="border:thin solid;"><b><input type="hidden" id="month" value="<?php echo $month; ?>" /></b></td>
        <td style="border:thin solid;"><b><input type="hidden" id="year" value="<?php echo $year; ?>" /></b></td>
        <td style="border:thin solid;"><b><input type="hidden" id="txtfirst" value="<?php echo $txtfirst; ?>"  /> </b></td>
        <td style="border:thin solid;"><b><input type="hidden" id="txtnext" value="<?php echo $txtnext; ?>  /></b></td>
        <td style="border:thin solid;"><b></b></td>
        <td style="border:thin solid;"><b><?php echo $total; ?></b></td>
    </tr>
    <tr>
        <td style="border:thin solid;"><input type="button" value="Print" onclick="printdata()"  /></td>
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
</div>
</div>
		
		<div class="clear"></div>		
		<div class="clear"></div>
		<div id="footer">
		<div style="width:400px;float:left"> Copyright © &nbsp &nbsp<a href="#" style="text-decoration:none"><span style="color:#660066">example.com</span> </a>&nbsp &nbsp 2013 All rights reserved.</div><div style="width:270px;float:left"></div><div style="width:300px;float:right"> Devloped By <a href="http://webtechlink.in/" target="_blank" style="text-decoration:none"><span style="color:#660066"> Web Tech Link</span></a></div>
		</div>
		<div class="clear"></div>

	</div>

</div>