<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title> Проверка </title>
  </head>

  <body>
  <div class="container mt-4">

        <h1>
            Форма для проверки данных на экранирование
        </h1>
        <form action="enterForm/check-test.php" method="POST">
            <input type="text" class="form-control" name="login-test" id="login-test" placeholder="Форма проверки логина">
            <input type="password" class="form-control" name="pass-test" id="pass-test" placeholder="Форма проверки пароля">       
            <button class="btn btn-success" type="submit"> Совершить проверку</button>
        </form>
  </div>
  </body>