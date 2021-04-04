<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'customerorder';


$con = mysqli_connect($server,$user,$pass,$dbname);

if(!$con){
    echo "Failed to connect";
    exit();
}

?>