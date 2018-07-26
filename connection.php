<?php
define("server","localhost");
define("user","root");
define("pass","");
define("db","wds");
$con= mysqli_connect(server,user,pass,db);
if(!isset($con))
{
die ("connection not established".mysqli_connect_error());	
}
?>