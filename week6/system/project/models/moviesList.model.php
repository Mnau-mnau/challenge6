<?php

class MoviesList_Model extends model
{
    protected static $object_class= 'MoviesList_Object';

    public static function getMoviesList()
    {
       
        $query = "
        SELECT *
        FROM `imdb_movie`
        WHERE 1
        LIMIT 0, 50";

        //database loads products and stores them in $result
        $resultset = db::query($query);

        $objects = static::fetchObjects($resultset);

        return $objects;
        
    }
}