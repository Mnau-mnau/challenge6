<?php

class MoviesList_Object
{
    public function getUrl()
    {
        return url::to('MoviesList', array(
            'id'=> $this->id
        ));
    }
}