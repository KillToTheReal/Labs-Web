<?php

    require_once "../blocks/bd.php";

    $pupil_name =$_POST['pupil_name'];
    $pupil_login =$_POST['pupil_login'];
    $pupil_surname =$_POST['pupil_surname'];
    $pupil_password =$_POST['pupil_pass'];
    $pupil_class = $_POST['pupil_class'];
    $payment = $_POST['secret_payment'];
    $marks = $_POST['secret_mark'];
    $pupil_id = $_POST['pupil_id'];

    $request1 = $db->prepare("UPDATE `users` SET `name` = '$pupil_name' , `login` = '$pupil_login' , `pass` = '$pupil_password' , `class` = '$pupil_class' WHERE `id` = '$pupil_id' ");

    $request1->execute();

    $request2 = $db->prepare("UPDATE `secret` SET `amount` = '$payment' , `marks` = '$marks' WHERE `id_ref` = '$pupil_id' ");

    $request2->execute();
    
 header('Location: read_interface.php');
?>