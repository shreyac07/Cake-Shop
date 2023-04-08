<?php 
//start session

Session_start();

//creat constants to store non reapting value
define('SITEURL','http://localhost/food-order/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','food-order');



$conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die (mysqli_error());// database conection
//username=root password='' by defalt
$db_select=mysqli_select_db($conn,DB_NAME) or die (mysqli_error());// selecting database 

?>