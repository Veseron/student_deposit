<?php
include "functions.php";
include "db_connection.php";
global $connection;

if (isset($_POST['name']) && isset($_POST['deposit'])) {
    updateOne($_POST);
    
} else {
    print_r($_POST);
}
?>