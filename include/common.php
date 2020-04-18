<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'vicharbandhu';
$con = mysqli_connect($host,$user,$pass,$dbname ,3308);
if(!$con){
    die('Error no:'.mysqli_errno($con));
}
else{
session_start();
}
?>
