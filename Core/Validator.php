<?php

class Validator {

    public static function validEmail($email){

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else{
            return false;
        }
    }
    
    public static function validName($name){

        if (preg_match("/^[a-zA-Z]{3,10}$/", $name)) {
            return true;
        } else {
            return false;
        }

    }

}