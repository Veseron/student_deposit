<?php

function getStudents() {
    global $connection;

    $sql_request = "SELECT * FROM deposit ORDER BY student_name";
    $result = mysqli_query($connection, $sql_request);
    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $students;
}

?>