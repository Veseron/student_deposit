<?php
require_once "app/db_connection.php";
require_once "app/functions.php";

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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
</head>
<body>

    <header>
        <div class="navbar navbar-dark bg-dark justify-content-around">
            <div class="nav-item">
                <h1 class="navbar-brand mb-0 h1">
                Учет депозита учеников
                </h1>
            </div>           
                <a href="add_new_student.php" class="nav-link" id="add">Добавить ученика</a>  
                <a href="#" class="nav-link" id="remove">Удалить</a>    
        </div>
    </header>
         
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
            <th scope="row"><input class="check" type="checkbox" id="<?=$student['id']?>"></th>
                <td><?=$student['student_name']?></td>
                <td class='deposit'><?=$student['student_deposit']?></td>
                <td><a href="/student.php?student_id=<?=$student['id']?>"">#</a></td>
            </tr>
            
        <?php endforeach; ?>
        </tbody>
    </table>

    <div id="modal"></div>

    </main>
    <footer class="navbar fixed-bottom navbar-sm navbar-dark bg-dark">
        <div class="navbar-brand">Изменить депозит учеников:</div>
        <div class="form-inline">
            <input class="form-control mr-sm-2" type="text" placeholder="Сумма изменения" id="sum">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="increase">Увеличить</button>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="decrease">Уменьшить</button>
        </div>
        
    </footer>

    <!-- Js -->
    <script src="app.js"></script>
    <script src="remove.js"></script>
    <script src="updateDeposit.js"></script>

</body>
</html>