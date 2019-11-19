<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'student_deposit';
$port = 3306;


$connection = mysqli_connect($host, $user, $password, $database, $port) or die ("Error" . mysqli_error($connection));


?>