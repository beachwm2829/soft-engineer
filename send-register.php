<?php
session_start();
require_once './DBconect.php';
$User=$_POST['user'];
$Pass=$_POST['pass'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$con=new connectdb();
$con->condb();
$con->register($User,$Pass,$name,$phone,$address);
?>