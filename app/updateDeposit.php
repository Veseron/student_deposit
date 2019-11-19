<?php
include "functions.php";
include "db_connection.php";

// var_dump($_POST);
// exit();

if (!empty($_POST)) {
    updateDeposit($_POST);
} else {
    header('Location: http://deposit.local/index.php');
}
exit();

?>