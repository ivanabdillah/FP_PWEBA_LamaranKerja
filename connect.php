<?php  

error_reporting(0);


$db_name 	= "fp";
$host		= "localhost";
$username	= "root";
$password	= "";


$connect 		= mysqli_connect($host,$username,$password,$db_name) or die("Database connection error!");


?>