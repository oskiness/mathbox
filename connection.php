<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database ="mathbox";


$bd = mysql_connect($hostname,$user,$password) or die ("Could not connect"); //connection of php to navicat
		//sensitive yung spacing... dito lang ^
 mysql_select_db($database,$bd) or die("could not select"); //selection ng DATABASE name w/c is mydatabase;

?>


