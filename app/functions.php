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

function addNewStudent($studentData) {
    global $connection;
    $name = $studentData['student_name'];
    $deposit = intval($studentData['student_deposit']);
    if (mysqli_query($connection, "INSERT INTO deposit (student_name, student_deposit) values ('$name', $deposit)")) {
        header('Location: /index.php');
    } else {
        echo mysqli_error($connection);
    }
    exit;

}

function updateOne($studentData) {
    global $connection;
    $id = $studentData['id'];
    $name = $studentData['name'];
    $deposit = $studentData['deposit'];
    try {
        mysqli_query($connection, "UPDATE deposit SET student_name='$name', student_deposit=$deposit WHERE id=$id");
    } catch (PDOException $e) {
        echo $e;
    }
    exit();
}

function removeStudents($student_ids) {
    global $connection;
    header('Content-type: application/json');
    $encodedArray = json_encode($student_ids);
    $encodedArray = json_decode($encodedArray);
    $tempArray = array();
    foreach($encodedArray->removingIds as $key) {
        array_push($tempArray, intval($key));
    }
    $tempArray = implode(', ', $tempArray);
    // var_dump($tempArray);
    // exit();   
    mysqli_query($connection, "DELETE FROM deposit WHERE id IN($tempArray)");
    // header('Location: http://deposit.local/index.php');
    exit();
}

function updateDeposit($student_ids) {
    global $connection;
    header('Content-type: application/json');
    $encodedArray = json_encode($student_ids);
    $encodedArray = json_decode($encodedArray);
    $tempArray = array();
    foreach($encodedArray->removingIds as $key) {
        array_push($tempArray, intval($key));
    }
    $sum = intval($encodedArray->sum);
    $tempArray = implode(', ', $tempArray);
    // var_dump($tempArray, $sum);
    // exit();   
    mysqli_query($connection, "UPDATE deposit SET student_deposit = (SELECT SUM(student_deposit + $sum)) WHERE id IN($tempArray)");
    // header('Location: http://deposit.local/index.php');
    print json_encode(array("success" => 1));
   
    exit();
}

?>