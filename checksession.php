<?php
session_start();
if(!isset($_SESSION['name']))
{
	echo "no";
}
else
{
	echo "yes";
}

?>