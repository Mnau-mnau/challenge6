<?php

class Actors_Model extends model
{
    protected static $object_class= 'Actors_Object';

    public static function getActors($id)
    {
       
        $query = "
        SELECT *
        FROM `imdb_movie_has_person`
        INNER JOIN `imdb_person`
        ON `imdb_movie_has_person`.`imdb_person_id` = `imdb_person`.`imdb_id`
        INNER JOIN `imdb_movie`
        ON `imdb_movie_has_person`.`imdb_movie_id` = `imdb_movie`.`imdb_id`
        WHERE `imdb_person`.`imdb_id` = ?
        ";

        //database loads products and stores them in $result
        $resultset = db::query($query, $id);

        $objects = static::fetchObjects($resultset);

        return $objects;
    }
}