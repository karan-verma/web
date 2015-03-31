<?php
$host="localhost";
$host_user="root";
$host_password="";
$database="db1";
$data=mysql_connect($host,$host_user,$host_password) or die("couldnot connect");
mysql_select_db($database,$data)or die("couldnot select database");
?>