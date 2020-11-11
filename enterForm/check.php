<?php
    require_once "../blocks/safety.php";
        session_start();

        safety_request($_POST); //Обработка

        $login= $_POST['login'];

        $name= $_POST['name'];
        
        $pass= $_POST['pass'];
        
        $surname = $_POST['surname'];
        
        $passcheck= $_POST['pass-check'];


    if($pass === $passcheck)   //Проверка повтора пароля для регистрации
    {
        require_once "../blocks/bd.php";
    
        $status = rand(1,2);
        if($status==1){
            $status = 'Ученик';
        } else {
            $status = 'Учитель';
        }
        $payment = rand(0,1000); //Потому что лень заполнять секретную таблицу руками (Это кол-во внесенных за ремонт денег)

        $pass= md5($pass."lmaokek");

        $req_log = $db->prepare("INSERT INTO `users`(`name`,`login`,`pass`,`surname`) VALUES ('$name','$login','$pass','$surname')");

        $req_log->execute();

        $req_sec = $db->prepare("INSERT INTO `secret`(`amount`,`status`) VALUES ('$payment','$status') ");

       // $mysql->query("INSERT INTO `users`(`name`,`login`,`pass`,`surname`) VALUES ('$name','$login','$pass','$surname')");

      //  $mysql->query("INSERT INTO `secret`(`amount`,`status`) VALUES ('$payment','$status') ");

      //  $mysql->close();

        header('Location: ../login.php');

    } else 
    {

        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../regpage.php');
    }
?>
