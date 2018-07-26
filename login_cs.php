<?php
session_start();
ob_start();
error_reporting(0);
include "connection.php";
if(isset($_REQUEST['sub']))
{
$em=$_REQUEST['t1'];
$pass=$_REQUEST['p1'];
$sql="select * from info where email='$em' and password='$pass'";
$res=mysqli_connect($con,$sql);
$rows=mysqli_fetch_array($res);
$nums=mysqli_num_rows($res);
if($nums>0)
{
	$_SESSION['a']=$rows['email'];
	$_SESSION['b']=$rows['password'];
	$_SESSION['c']=$rows['username'];
	header("location:home.php");	
}
else
{
	header("location:main.php");	
}
}
?>