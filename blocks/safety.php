<?php
    function safety_request(array &$object) 
    {
        $subject = array ("/\"/", "/\'/" , "/\;/", "/\:/","/x00/", "/x1a/");
        
        $replace = array ("\\\"", "\\\'" , "\\\;", "\\\:", "\\x00", "\\x1a");

        foreach($object as &$member) 
        {
            
        $member = preg_replace('/\s+/', ' ', $member)  //Удаление пробелов

        $member = trim($member);
        
        $member = preg_quote($member); //Экранирование служебных символов 
        
        $member = preg_replace($subject, $replace , $member); //Экранирование служебных символов не входящих в quote
        
    }
    unset($member);
    print_r($object);
    }
?>
