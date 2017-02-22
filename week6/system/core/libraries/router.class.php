<?php

class router
{
    public static function runController($controller_name)
    {
        //get the path to the right controller file based on the controller name
        $controller_file = static::getControllerFile($controller_name);

        //include the file
        include $controller_file;
    }
    public static function getControllerName()
    {
        //get the name of the page from URL
        $page_name = request::get('page', 'home');
        //get the path to the proper controller file based on the page name
        $controller_file = static::getControllerFile($page_name);

        //if such controller exists, it will return the name of the page, otherwise throws an error404
        if(file_exists($controller_file))
        {
            return $page_name;
        }
        else
        {
            return 'error404';
        }
    }
    public static function getControllerFile($page_name)
    {
        $file_name = $page_name. '.controller.php'; 
        //for example get retrieves home, this will create home.controller.php
        $file_path = CONTROLLERS_DIR. '/'.$file_name;
        //this goes to root folder/system/project/controllers and looks for home.controller.php
        return $file_path;
    }
}