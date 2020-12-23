<?php

    require_once "../blocks/bd.php";

    function safety_request_bd(array &$object) 
    {
        $connect = mysqli_connect("127.0.0.1", "pma", "" , "lab2_bd");

        foreach($object as &$member) 
        {

        $member = preg_replace('/\s+/', ' ', $member);

        $member = trim($member);
        
        $member = mysqli_real_escape_string($connect, $member);
        
    }
    unset($member);
    }



    function safety_request_html($object)
    {
        return htmlspecialchars($object,ENT_QUOTES);
    }
    
?>
