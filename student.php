<?php
require_once "app/db_connetction.php";
require_once "app/students.php";

$student_id = $_GET['student_id'];

$student_one = getStudentById($student_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student cash deposit</title>


    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <header>
        <div class="navbar navbar-dark bg-dark justify-content-around">
            <div class="nav-item">
                <h1 class="navbar-brand mb-0 h1">
                Учет депозита учеников
                </h1>
            </div>           
                <a href="add_new_student.php" class="nav-link" id="add_one">Добавить ученика</a>
                <a href="#" class="nav-link" id="remove">Удалить</a>    
        </div>
    </header>
    
    <main>
    
    

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col"><input type="checkbox" id="check_all"></th>
            <th scope="col">Имя ученика: </th>
            <th scope="col">Текущий депозит: </th>
            <th scope="col" class="ref">#</th>
        </tr>
        </thead>
        <tbody>
        <!-- Шаблон записи об ученике -->

            <tr>
            <th scope="row"><input type="checkbox"></th>
                <td><?=$student_one['student_name']?></td>
                <td class='deposit'><?=$student_one['student_deposit']?></td>
                <td><a href="/student/student.php?student_id=<?=$student['id']?>"">#</a></td>
            </tr>
            

        </tbody>
    </table>

    </main>


    <!-- jQuery -->
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.com/libraries/izimodal"></script>
    <!-- Js -->
    <script src="app.js"></script>

</body>
</html>