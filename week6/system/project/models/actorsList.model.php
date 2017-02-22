<?php

class ActorsList_Model extends model
{
    protected static $object_class= 'ActorsList_Object';

    public static function getActorsList()
    {
       
        $query = "
        SELECT *
        FROM `imdb_person`
        WHERE 1
        LIMIT 0, 50";

        //database loads products and stores them in $result
        $resultset = db::query($query);

        $objects = static::fetchObjects($resultset);

        return $objects;
        
    }
}