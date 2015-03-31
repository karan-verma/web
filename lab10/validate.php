<?php

include("database.php");
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("INSERT INTO employee(username,password)values('$username','$password')");
if($query)
echo "success";
?>