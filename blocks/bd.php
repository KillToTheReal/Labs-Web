<?php

$mysql = new mysqli('127.0.0.1' , 'pma' , '' , 'lab2_bd');

if ($mysql->connect_errno) 
    {
    printf("Соединение не удалось: %s\n", $mysql->connect_error);
    exit();
    }

try {
        $db = new pdo('mysql:host=127.0.0.1; dbname=lab2_bd', 'pma' , '' );
    }   catch(PDOException $err) {
        die('Connection Error :' . $err->getMessage() );
    }

?>
