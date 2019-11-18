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

    <main>

    <div class="container">
        <div class="row justify-content-center">
        <form>
            <div class="form-group">
                <label for="student_name">Имя ученика:</label>
                <input type="text" class="form-control" id="student_name" name="student_name" placeholder="Введите имя и фамилию ученика">
            </div>
            <div class="form-group">
                <label for="student_deposit">Депозит:</label>
                <input type="text" class="form-control" id="student_deposit" placeholder="Введите текущий депозит">
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
        </div>
    </div>

    </main>

</body>
</html>