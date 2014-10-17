<?php
header("application/x-httpd-php .htm .html");
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=document_name.xls");

echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";
echo "<b>testdata1</b> \t <u>testdata2</u> \t \n ";
echo "knknkn";
echo "</body>";
echo "</html>";
?>