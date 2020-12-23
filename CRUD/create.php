<?php

    require_once "../blocks/bd.php";

    $pupil_name =$_POST['pupil_name'];
    $pupil_login =$_POST['pupil_login'];
    $pupil_surname =$_POST['pupil_surname'];
    $pupil_password =$_POST['pupil_pass'];
    $pupil_class = $_POST['pupil_class'];
    $payment = rand(0,1000);
    $marks = rand(2,5);

    $request1 = $db->prepare("INSERT INTO `users`(`name`,`login`,`pass`,`surname`,`class`) VALUES ('$pupil_name','$pupil_login','$pupil_password','$pupil_surname','$pupil_class')");

    $request1->execute();

    $request2 = $db->prepare("INSERT INTO `secret`(`amount`,`marks`) VALUES ('$payment', '$marks')");

    $request2->execute();
    
header('Location: read_interface.php');
?>
