<?php

class request 
{
    //gets a value from $_GET global or returns default value
    public static function get($key, $default = null)
    {
        if(isset($_GET[$key])){
            return $_GET[$key];
        }
        else{
            return $default;
        }
    }

    //gets a value from $_POST global or returns default value
    public static function post($key, $default = null)
    {
        if(isset($_POST[$key])){
            return $_POST[$key];
        }
        else{
            return $default;
        }
    }

    // return true if request is POST 
    public static function isPost()
    {
        if($_SERVER['REQUEST_METHOD']== 'POST'){
            return true;
        }
        else{
            return false;
        }
    }
}