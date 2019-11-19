<?php
require_once "db_connetction.php";
global $connection;


if (isset($_POST['student_name']) || isset($_POST['student_daposit'])) {
    $name = $_POST['student_name'];
    $deposit = intval($_POST['student_deposit']);
    mysqli_query($connection, "INSERT INTO depostit(student_name, student_deposit) VALUES ($name, $deposit)");
    header('Location: ../index.php');
    exit;
} else {
    exit("Err");
}



?>