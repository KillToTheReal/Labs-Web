<?php
    function safety_request(array &$object) //Применение ко всему выбранному массиву
    {
       
        foreach($object as &$member) 
        {
        $member = trim($member);
        
            $member = mysqli_real_escape_string($member);
    }
    unset($member);
    }
?>
