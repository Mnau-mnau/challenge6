<?php

class Actors_Object
{
    public function getUrl()
    {
        return url::to('actors', array(
            'id'=> $this->id
        ));
    }
}