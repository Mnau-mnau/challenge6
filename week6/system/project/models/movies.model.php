<?php

class Movies_Model extends model
{
    protected static $object_class= 'Movies_Object';

    public static function getMovies($id)
    {
        $query = "
        SELECT *
        FROM `imdb_movie`
        WHERE `imdb_id`= ?
        ";

        //database loads products and stores them in $result
        $resultset = db::query($query,$id);

        $objects = static::fetchObjects($resultset);

        return $objects;
        
    }
}