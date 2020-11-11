<?php
    session_start();

    require_once "../blocks/bd.php";

    require_once "../blocks/safety.php";  

    echo 'Данные до экранирования: ';

    print_r($_POST);

    safety_request($_POST);

    echo '<br>Данные после экранирования: ';

    die(print_r($_POST));
?>