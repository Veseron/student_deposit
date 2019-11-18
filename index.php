<?php
require_once "app/db_connetction.php";
require_once "app/students.php";

$students = getStudents();
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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css"> -->
    <!-- Styles -->
    <link rel="stylesheet" href="css/main.css">
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>
</head>
<body>

    <header>
        <div class="navbar navbar-dark bg-dark justify-content-around">
            <div class="nav-item">
                <h1 class="navbar-brand mb-0 h1">
                Учет депозита учеников
                </h1>
            </div>           
                <a href="add_new_student.php" class="nav-link" id="remove">Добавить ученика</a>  
                <a href="#" class="nav-link" id="remove">Удалить</a>    
        </div>
    </header>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
            
    <main>
    
    

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col"><input type="checkbox" id="check_all"></th>
            <th scope="col">Имя ученика: </th>
            <th scope="col">Текущий депозит:</th>
            <th scope="col" class="ref">#</th>
        </tr>
        </thead>
        <tbody>
        <!-- Шаблон записи об ученике -->
        <?php foreach($students as $student):?>
            <tr>
            <th scope="row"><input type="checkbox"></th>
                <td><?=$student['student_name']?></td>
                <td class='deposit'><?=$student['student_deposit']?></td>
                <td><a href="/student.php?student_id=<?=$student['id']?>"">#</a></td>
            </tr>
            
        <?php endforeach; ?>
        </tbody>
    </table>

    <div id="modal"></div>

    </main>


    <!-- jQuery -->
    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js" type="text/javascript"></script> -->
    <!-- Js -->
    <script src="app.js"></script>

</body>
</html>