<?php
include("database.php");
if($_POST['username']=='admin' && $_POST['password']=='admin')
header('location:signup.php');
else
{
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("SELECT * FROM employee WHERE username='$username' and password='$password'")or die(mysql_error());
if($result=mysql_fetch_array($query))
{
	$user=$result['username'];
	echo "Welcome Mr.".$user.'</a>';
}
else
{
	echo "this user doesn't exits";
	exit;
}
}
?>