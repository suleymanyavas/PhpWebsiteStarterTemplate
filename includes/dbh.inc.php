<?php

$servername ="localhost"; // wanneer je localmachine gebruikt localhost is de naam anders de naam van je server op je website
$dBUsername ="root";

$dBpassword =""; // when you use localhost you don't need to put a password

$dBName ="loginsysteem";

$conn = mysqli_connect($servername, $dBUsername, $dBpassword, $dBName); //connection to database

if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
?>