<?php
  require_once "../blocks/bd.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    
    <link rel="stylesheet" href="style.css">
    
    <title>Просмотр БД</title>
</head>
<body>
        <div class="container md-12 bg-12">

        <div class="container md-3 bg-3">

            <form action="create.php" method="POST" onsubmit="return validate();">
                <p><h2>Create new pupil</h2></p>
                <br><input type="text" name="pupil_login"  id="pupil_login"  placeholder="Введите логин ученика" required><br>
                <div id = "login_error"></div>
                <br><input type="text" name="pupil_name"  id="pupil_name"  placeholder="Введите имя ученика"><br>
                <div id = "name_error"></div>
                <br><input type="text" name="pupil_surname" id="pupil_surname"  placeholder="Введите фамилию ученика"><br>
                <div id = "surname_error"></div>
                <br><input type="password" name="pupil_pass"  id="pupil_pass"  placeholder="Введите пароль ученика"><br>
                <div id = "pass_error"></div>
                <br><input type="text" name="pupil_class" id="pupil_class"  placeholder="Введите класс ученика"><br>
                <div id = "class_error"></div>

                <br><button type="submit" class="btn btn-success">Отправить данные</button>
            </form>

            <script>
                function validate() {
                    var Name = document.getElementById("pupil_name");
                    var SurName = document.getElementById("pupil_surname");
                    var Login = document.getElementById("pupil_login");
                    var Pass = document.getElementById("pupil_pass");
                    var Class = document.getElementById("pupil_class");
                    var ErrorName = document.getElementById("name_error");
                    var ErrorSurname = document.getElementById("surname_error");
                    var ErrorLogin = document.getElementById("login_error");
                    var ErrorPass = document.getElementById("pass_error");
                    var ErrorClass = document.getElementById("class_error");

                    let NameMessage = [];

                    if(!Login.value){
                        
                        NameMessage.push("Вы не ввели логин!");
                        Login.style.border = "2px solid red";
                        Login.style.borderRadius = "4px";
                        ErrorLogin.innerText = NameMessage.join(", ");
                        return false;
                    }

                    if(!Name.value){

                        NameMessage.push("Вы не ввели имя");
                        Name.style.border = "2px solid red";
                        Name.style.borderRadius = "4px";
                        ErrorName.innerText = NameMessage.join(", ");
                        return false;
                    }

                    if(!SurName.value){
                        
                        NameMessage.push("Вы не ввели фамилию");
                        SurName.style.border = "2px solid red";
                        SurName.style.borderRadius = "4px";
                        ErrorSurname.innerText = NameMessage.join(", ");
                        return false;
                    }

                    if(!Pass.value){
                        
                        NameMessage.push("Вы не ввели пароль");
                        Pass.style.border = "2px solid red";
                        Pass.style.borderRadius = "4px";
                        ErrorPass.innerText = NameMessage.join(", ");
                        return false;
                    }
                    

                    if(!Class.value){
                        
                        NameMessage.push("Вы не ввели класс ученика");
                        Class.style.border = "2px solid red";
                        Class.style.borderRadius = "4px";
                        ErrorClass.innerText = NameMessage.join(", ");
                        return false;
                    }


                    return true;

                }
            </script>
        </div>


        <div class="container cont md-9 bg-9">

        <h1>Таблица CR </h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Логин</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Пароль(новые пароли не хэширую для удобства просмотра)</th>
            <th>Класс</th>
        </tr>


<?php

$info = $mysql->query("SELECT * FROM `users`");

$infof = $info->fetch_all();

foreach ($infof as $inf)
{
    ?>
    
    <tr>
        <td> <?= $inf[0] ?></td>
        <td> <?= $inf[2] ?></td>
        <td> <?= $inf[1] ?></td>
        <td> <?= $inf[4] ?></td>
        <td> <?= $inf[3] ?></td>
        <td> <?= $inf[5] ?></td>
    </tr>
    <?php
}
?>
    </table>
        </div>
            </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous">
    </script>
</body>
</html>
