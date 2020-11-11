<?php
    function safety_request(array &$object) 
    {
        $subject = array ("/\"/", "/\'/" , "/\;/", "/\:/","/x00/", "/x1a/");
        
        $replace = array ("\\\"", "\\\'" , "\\\;", "\\\:", "\\x00", "\\x1a");

        foreach($object as &$member) 
        {

        $member = trim($member);
        
        $member = preg_quote($member);
        
        $member = preg_replace($subject, $replace , $member);
        
    }
    unset($member);
    print_r($object);
    }
?>