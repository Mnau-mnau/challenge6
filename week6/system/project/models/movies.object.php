<?php

class Movies_Object
{
    public function getUrl()
    {
        return url::to('Movies', array(
            'id'=> $this->id
        ));
    }
}