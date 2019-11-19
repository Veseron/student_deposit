<?php
// var_dump($_POST);
// exit();

include "functions.php";
include "db_connection.php";



if (!empty($_POST)) {
    removeStudents($_POST);
} else {
    header('Location: http://deposit.local/index.php');
}
?>