<?php
session_start();
//development
//$con=mysqli_connect('localhost','root','','leave_management_system');
//live
//$con=mysqli_connect('remotemysql.com','yf2EdWQHaw','LuQSMJrwgo','yf2EdWQHaw'); - This is the original
//$con=mysqli_connect('sql4.freemysqlhosting.net','sql4444201','kIxM5xHBEB','sql4444201');
/* Heroku remote server */
$i++;
$cfg["Servers"][$i]["host"] = "eu-cdbr-west-01.cleardb.com"; //provide hostname
$cfg["Servers"][$i]["user"] = "bed93763de8082"; //user name for your remote server
$cfg["Servers"][$i]["password"] = "356d4368"; //password
$cfg["Servers"][$i]["auth_type"] = "config"; // keep it as config
?>
