<?php

function getStudents() {
    global $connection;

    $sql_request = "SELECT * FROM deposit ORDER BY student_name";
    $result = mysqli_query($connection, $sql_request);
    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $students;
}

function getStudentById($student_id) {
    global $connection;

    $sql_request = "SELECT * FROM deposit WHERE id= ".$student_id;
    $result = mysqli_query($connection, $sql_request);
    $student = mysqli_fetch_assoc($result);
    return $student;
}

function addNewStudent($student_id) {
    global $connection;


}

function updateOne($student_id) {

}

function removeStudents($removingArray) {

}


?>