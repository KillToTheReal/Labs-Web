<?php

    require_once "../blocks/bd.php";
    $del_id = $_GET['id'];


    $request1 = $db->prepare(" DELETE FROM `users` WHERE `users`.`id` = '$del_id' ");

    $request1->execute();

    header('Location: read_interface.php');
?>