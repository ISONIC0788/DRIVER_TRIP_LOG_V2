<?php
$host_name = "localhost";
$user ="root";
$password ="";
$db="driver_trip_log_db";

$conn  = mysqli_connect($host_name,$user,$password,$db);

if(!$conn){
    die("connectio failed ".mysqli_connect_error());
}


?>