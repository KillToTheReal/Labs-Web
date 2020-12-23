<?php
    session_start();

    require_once "../blocks/bd.php";

    require_once "../blocks/safety.php";  

    echo('js код для проверки. если в php коде убрать преобразование с помощью ф-ии, на экран выведется слово WORKED c помощью алерта <br>');
    
    $test = "<script> alert('WORKED'); </script> ";
    
    $test_1 = safety_request_html($test);
    
    echo($test_1);
    
    echo('<br> <br> <p></p>');

    echo 'Данные до экранирования: ';

    print_r($_POST);

    safety_request_bd($_POST);

    echo '<br>Данные после экранирования: ';

    die(print_r($_POST));
?>
