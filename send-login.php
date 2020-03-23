<?php
session_start();
require_once './DBconect.php';
$User=$_POST['user'];
$Pass=$_POST['pass'];
$con=new connectdb();
$con->condb();
$con->checklogin($User,$Pass);
?>