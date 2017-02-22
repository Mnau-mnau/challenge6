<?php
class config
{
    protected static $data = array();

    public static function get($key, $default = null)
    {
        if(array_key_exists($key, static::$data))
        {
            return static::$data[$key];
        }
        else 
        {
            return $default;
        }
        //array_key_exists returns the value of the key no matter what it is
        //if it is null, returns null
        //isset would return default as if the key never existed
    }

    //load all the configuration settings from external file config.php
    public static function load()
    {
        //config array - we can include it straight in the array above as well
        include(CONFIG_DIR.'/config.php');

        //assign $config as the value of static::$data
        static::$data = $config;
    }
}