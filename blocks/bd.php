<?php

try {
$db = new pdo('mysql:host=127.0.0.1; dbname=lab2_bd', 'pma' , '' );
    }catch(PDOException $err) {
        die('Connection Error :' . $err->getMessage() );
    }

?>
