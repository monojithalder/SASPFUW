<?php
$q = "&#2478;&#2472;&#2507;&#2460;&#2495;&#2468;";
              /* print html_entity_decode($q, ENT_NOQUOTES, 'utf8_general_ci')."\n";*/
			  $data=utf8_encode($q);
			  $data1=utf8_encode("&#2437;&#2478;&#2495;&#2479;");
			  $a=htmlentities($q,ENT_NOQUOTES,'UTF-8');
			  print $data.$a;
			  $con=mysql_connect("localhost","root","123");
			  if(!$con)
			  {
			  	die("error".mysql_error());
			  }
			 // mysql_select_db("saspfuw",$con);
			  //mysql_query("insert into test(name) values ('$data')");
			  echo "$data1"
			   
?>